<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno) {
    die('Problem with server');
} else {
    $sql = "INSERT INTO usuarios(ID, nombre, edad) VALUES(null, 'Fernando', 40)";
    $conexion->query($sql);
    if ($conexion->affected_rows >= 1) {
        echo 'add file: ' . $conexion->affected_rows;
    }
}
