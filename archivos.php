<?php

// $resultado = file_exists('document.txt');
// var_dump($resultado); // bool(true)
/* if (file_exists('document.txt')) {
    echo 'existe';
} else {
    echo 'no existe';
} */

// echo file_get_contents('document.txt');

// file_put_contents('document.txt', "hey dvdev \n", FILE_APPEND);

/* file_put_contents('document.txt', '');
for ($i = 1; $i <= 10; $i++) {
    file_put_contents('document.txt', "$i \n", FILE_APPEND);
}
 */

$archivo = file('document.txt');
/* echo '<pre>';
print_r($archivo);
echo '</pre>'; */
// echo $archivo[7];
