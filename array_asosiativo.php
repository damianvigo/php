<?php

$alex = array('telefono' => '1234567', 'edad' => 25, 'apellido' => 'querty', 'pais' => 'Argentina');

/* $_FILES = array('foto' => array('name'=> '1.jpg', 'type' => 'image/jpeg', 'tmp_name' => 'C:/xampp/tmp/php831.tmp'));

$_FILES['foto']['tmp_name']; */

$alex['telefono'] = '1111';
echo 'El telefono de alex es: ' . $alex['telefono'];

// echo $alex['telefono'] . '<br />';
// echo $alex['edad'] . '<br />';
// echo $alex['apellido'] . '<br />';
// echo $alex['pais'] . '<br />';
