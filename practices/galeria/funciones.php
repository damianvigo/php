<?php

function conexion($galeria_practica, $usuario, $pass)
{
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$galeria_practica", $usuario, $pass);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}
