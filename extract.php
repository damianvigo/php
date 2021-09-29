<?php

$array = array('nombre' => 'Damian', 'apellido' => 'Vigo');

extract($array);

$nombre = 'Marcus';

// echo $nombre;
echo $array['nombre'];
