<?php

try {
    $conexion = new PDO('mysql:host=127.0.0.1;dbname=paginacion', 'root', '');
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPorPagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $postPorPagina");

$articulos->execute();
$articulos = $articulos->fetchAll();

// print_r($articulos);

if (!$articulos) {
    header('Location: index.php');
}

$totalArticulos = $conexion->query(('SELECT FOUND_ROWS() as total'));
$totalArticulos = $totalArticulos->fetch()['total'];

// echo "total: $totalArticulos";
$numeroPaginas = ceil($totalArticulos / $postPorPagina); // 20 / 5 = 4pag

// echo $numeroPaginas;

require 'index.view.php';
