<?php

if (isset($_COOKIE['font-size'])) {
    $tamanio = htmlspecialchars($_COOKIE['font-size']);
} else {
    $tamanio = '15px';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Txt</title>
    <style>
        p {
            font-size: <?php echo $tamanio ?>;
        }
    </style>
</head>

<body>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore neque itaque vel voluptates dicta optio totam non velit, minus quisquam deserunt aperiam repellendus, a, sint quibusdam sit aliquam obcaecati ducimus?</p>
</body>

</html>