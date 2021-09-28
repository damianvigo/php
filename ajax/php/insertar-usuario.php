<?php

// error_reporting(0);
header('Content-type: application/json; charset=utf-8');

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$web = $_POST['sitio_web'];
$correo = $_POST['correo'];
var_dump($nombre, $telefono, $web, $correo);

function validarDatos($nombre, $telefono, $web, $correo)
{
    if ($nombre == '') {
        return false;
    } elseif ($telefono == '' || is_int($telefono)) {
        return false;
    } elseif ($web == '') {
        return false;
    } elseif ($correo == '') {
        return false;
    }

    return true;
}

if (validarDatos($nombre, $telefono, $web, $correo)) {
    $conexion = new mysqli('localhost', 'root', '', 'php_ajax');
    $conexion->set_charset('utf8');

    if ($conexion->connect_errno) {
        $respuesta = ['error' => true];
    } else {
        $statement = $conexion->prepare("INSERT INTO usuarios(nombre, telefono, sitio web, correo) VALUES(?,?,?,?)");
        $statement->bind_param("siss", $nombre, $telefono, $web, $correo);
        $statement->execute();

        if ($conexion->affected_rows <= 0) {
            $respuesta = ['error' => true];
        }

        $respuesta = [];
    }
} else {
    $respuesta = ["error" => true];
}

echo json_encode($respuesta);
