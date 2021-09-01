<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno) {
    die('Problem with server');
} else {
    $sql = 'SELECT * FROM usuarios LIMIT 5';
    $resultado = $conexion->query($sql);
    // var_dump($resultado);

    if ($resultado->num_rows) {
        /*       echo '<pre>';
        var_dump($resultado->fetch_assoc());
        var_dump($resultado->fetch_assoc());
        '</pre>'; */

        while ($fila = $resultado->fetch_assoc()) {
            echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br />';
        }

        echo $resultado->fetch_assoc()['nombre'];
    } else {
        echo 'Not data found';
    }
}
