<?php

$id = $_GET['id'];

try {
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
    echo 'connection success <br />';

    // $resultados = $conexion->query('SELECT * FROM usuarios');
    // method query
    /*   $resultados = $conexion->query('SELECT * FROM usuarios');

    foreach ($resultados as $fila) {
        echo $fila['ID'] . ' - ' . $fila['nombre'] . "<br />";
    } */

    // prepared statements
    /*     $statement = $conexion->prepare('INSERT INTO usuarios VALUES(null, "Jose")');
    $statement->execute(); */


    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id or :id2');
    $statement->execute(array(':id' => $id, ':id2' => 2));

    $resultados = $statement->fetchAll();
    foreach ($resultados as $usuario) {
        echo $usuario['nombre'] . '<br />';
    }
} catch (PDOException $e) {
    echo 'Error ' . $e->getMessage();
}
