<?php

error_reporting(0);
header('Content-type: application/json; charset=utf-8');

$conexion = new mysqli('localhost', 'root', '', 'php_ajax');

if ($conexion->connect_errno) {
    $respuesta = [
        'error' => true
    ];
} else {
    $conexion->set_charset('utf8');
    $statement = $conexion->prepare("SELECT * FROM usuarios");
    $statement->execute();

    $resultados = $statement->get_result();

    $respuesta = [];

    while ($fila = $resultados->fetch_assoc()) {
        $usuario = [
            'id'     => $fila['ID'],
            'name' => $fila['nombre'],
            'phone'   => $fila['telefono'],
            'website'   => $fila['sitio web'],
            'email' => $fila['correo']
        ];
        // print_r($usuario);
        array_push($respuesta, $usuario);
    }
}

echo json_encode($respuesta);
