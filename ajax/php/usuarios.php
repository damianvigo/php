<?php

// header('Content-type: application/json; charset=utf-8');

$respuesta = [
    [
        'id' => '1',
        'name' => 'Marcus',
        'phone' => 1234567890,
        'website' => 'https://heythere.com',
        'email' => 'correo@correo.com'
    ],
    [
        'id' => '2',
        'name' => 'Martin',
        'phone' => 123456,
        'website' => 'https://heythere.com',
        'email' => 'correo2@correo.com'
    ]
];

echo json_encode($respuesta);

// var_dump($respuesta);

// echo '[{"name": "Damian"}, {"name": "Marcus"}]';
