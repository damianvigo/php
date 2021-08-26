<?php

/* $amigo = array('telefono' => 123456789, 'edad' => 20, 'pais' => 'Argentina');

extract($amigo);
echo $telefono; */


$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

/* $ultimo_dia = array_pop($semana);

foreach ($semana as $dia) {
    echo $dia . '<br />';
}

echo $ultimo_dia; */

/* $varText = join('-  ', $semana);
var_dump($varText);
print_r($varText); */

/* sort($semana);
echo join(', ', $semana); */

$semana_reverse = array_reverse($semana);
echo join(', ', $semana_reverse);

?>

