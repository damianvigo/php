<?php

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    public function showInfo()
    {
        echo 'Your info';
    }
}

$john = new Persona;
$john->nombre = 'John';
$john->edad = '30';
$john->pais = 'Mexico';

// $marcus->showInfo();
// echo $john->nombre . ' tiene ' . $john->edad . ' anios de edad';

$alejandro = new Persona;
$alejandro->nombre = 'Alejandro';
$alejandro->edad = 20;
$alejandro->pais = 'Chile';
