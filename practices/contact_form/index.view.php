<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre:" id="nombre" value="<?php if (!$enviado && isset($nombre)) echo $nombre ?>">

            <input type="text" id="correo" class="form-control" name="correo" placeholder="Correo:" value="<?php if (!$enviado && isset($correo)) echo $correo ?>">

            <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Mensaje:"> <?php if (!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

            <!--    <div class="alert error">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </div>

            <div class="alert success">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </div> -->

            <?php if (!empty($errores)) : ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif ($enviado) : ?>
                <div class="alert success">
                    <p>Enviado correctamente</p>
                </div>
            <?php endif ?>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
</body>

</html>