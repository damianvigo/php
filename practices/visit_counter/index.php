<?php

function counter_users()
{
    $archivo = 'contador.txt';

    if (file_exists($archivo)) {
        $cuenta = file_get_contents($archivo) + 1;
        file_put_contents($archivo, $cuenta);

        return $cuenta;
    } else {
        file_put_contents($archivo, 1);
        return 1;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <h1>Contador Visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo counter_users(); ?></p>
        <p class="texto">Visitas</p>
    </div>
</body>

</html>