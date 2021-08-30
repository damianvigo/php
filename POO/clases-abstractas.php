<?php

abstract class Persona
{
    public function saludo()
    {
        return 'Hi';
    }
}

class Estudiante extends Persona
{
}

// $martin = new Persona;
$martin = new Estudiante; // abstract - solo se accede heredandola
echo $martin->saludo();
