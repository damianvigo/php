<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno) {
    die('Problem with server');
} else {
    $statement = $conexion->prepare("INSERT INTO usuarios(ID, nombre, edad) VALUES(?,?,?)");
    /* remplazo los placeholder ? con los valores que quiero usar. 
    s-string, i-integer d-double */
    $statement->bind_param('ssi', $id, $nombre, $edad);
    $id = NULL;

    if (isset($_GET['nombre']) && isset($_GET['edad'])) {
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
    }

    $statement->execute();

    if ($conexion->affected_rows >= 1) {
        echo 'add row: ' . $conexion->affected_rows;
    } else {
        echo 'not add row';
    }
}
