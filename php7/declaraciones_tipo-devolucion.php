<?php

declare(strict_types=1); // Fatal error
function obtenerEdad() : int {
    $edad = '23'; // php convierte a entero sin modo stricto
    // $edad = 23;
    // $edad = 'Cesar tiene 23 anios';
    return $edad;
}

echo obtenerEdad();