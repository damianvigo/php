<?php

// public - dentro y fuera de la clase
// protected - dentro de la clase y otras clases que heredaron. No fuera de estas
// Private - Solo desde dentro de las clases que fueron creadas

class Usuario
{
    public $nombre;
    protected $correo;

    function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function showInfo()
    {
        return $this->correo;
    }
}

class Miembro extends Usuario
{
    public function showEmail()
    {
        return 'this is my email: ' . $this->correo;
    }
}

$martin = new Miembro('Martin', 'martin@gmail.com');
echo $martin->showEmail();
// $leo = new Usuario('Leo', 'leo@gmail.com');
// echo $leo->correo;
