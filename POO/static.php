<?php

class Persona
{
    public static $dia = '1 de enero';

    public static function greeting($nombre = null)
    {
        if ($nombre) {
            return 'hey' . $nombre;
        } else {
            return 'there is not name';
        }
    }
}

// $martin = new Persona;



// echo Persona::$dia;
// echo Persona::greeting();

// echo Persona::greeting('Martin');
echo Persona::greeting();
