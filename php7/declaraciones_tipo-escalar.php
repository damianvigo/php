<?php

declare(strict_types=1);
function cuadrado(int $numero) {
    return $numero * $numero;
}

$numero = '8'; // Fatal error
// $numero = 4;
// $numero = 'Damian';
echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);