<?php

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function showInfo()
    {
        return $this->nombre . ' tiene ' . $this->edad . ' anios de edad y es de ' . $this->pais;
    }
}

class Estudiante extends Persona
{
    function __construct($nombre, $edad, $pais, $carrera)
    {
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }
}

class Trabajador extends Persona
{
    function __construct($nombre, $edad, $pais, $trabajo)
    {
        parent::__construct($nombre, $edad, $pais);
        $this->trabajo = $trabajo;
    }
}

// $martin = new Estudiante('Martin', 23, 'Colombia', 'Desarrollador');
$martin = new Trabajador('Martin', 23, 'Colombia', 'Desarrollador', 'Profesor');
echo $martin->trabajo;
