<?php

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    function __contruct($nombre, $edad, $pais)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function showInfo()
    {
        echo $this->nombre . ' tiene ' . $this->edad . ' anios de edad y es de ' . $this->pais;
    }
}

$manu = new Persona('Manu', 23, 'Colombia');
$manu->nombre = 'Manuel';
// $manu->edad = 23;
// $manu->pais = 'Colombia';
$manu->showInfo();

echo '<br />';

$raul = new Persona('Raul', 40, 'Venezuela');
// $raul->nombre = 'Raul';
// $raul->edad = 40;
// $raul->pais = 'Venezuela';
$raul->showInfo();
