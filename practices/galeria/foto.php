<?php

require './funciones.php';

$conexion = conexion('galeria_practica', 'root', '');

if (!$conexion) {
    die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
    header('Location: index.php');
}

$statement = $conexion->prepare('SELECT * FROM fotos where id = :id');
$statement->execute(array(':id' => $id));

$foto = $statement->fetch();
// print_r($foto);

if (!$foto) {
    header('Location: index.php');
}

require './views/foto.view.php';
