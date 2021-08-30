<?php

class Usuario
{
    public $nombre;
    public $correo;

    function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function showName()
    {
        echo 'Your name is: ' . $this->nombre . '<br />';
        return $this;
    }


    public function showEmail()
    {
        echo 'Your email is: ' . $this->correo . '<br />';
        return $this;
    }
}

$martin = new Usuario('Martin', 'martin@gmail.com');
$martin->showName()->showEmail();
