<?php

// Comparacion
// Regresa 1 si el valor en la izquierda es mayor que el de la derecha
// Regresa 0 si los valores en ambos lados son iguales
// Regresa -1 si el valor de la derecha es mayor que el de la izquierda

// <    =     >
// 1    0    -1

// echo '<br />';
// echo 10 <=> 1;
// echo '<br />';
// echo 10 <=> 10;
// echo '<br />';
// echo 1 <=> 10;

$array = [3, 1, 5, 2, 4];
// sort($array);

/* function comparar($a, $b) {
    if($a == $b) {
        return 0;
    } else if($a > $b) {
        1;
    } else {
        return -1;
    }
} */

function comparar($a, $b) {
    return $a <=> $b;
}

usort($array, 'comparar');



echo implode('- ', $array);