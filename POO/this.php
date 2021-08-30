<?php

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    public function showInfo()
    {
        echo $this->nombre . ' tiene ' . $this->edad . ' anios de edad y es de ' . $this->pais . '<br />';
    }
}

$manu = new Persona;
$manu->nombre = 'Manu';
$manu->edad = 23;
$manu->pais = 'Colombia';
$manu->showInfo();

$raul = new Persona;
$raul->nombre = 'Raul';
$raul->edad = 40;
$raul->pais = 'Venezuela';
$raul->showInfo();
