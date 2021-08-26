<?php 

$errores = '';

if(isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if(!empty($nombre)) {
        // $nombre = trim($nombre);
        // $nombre = htmlspecialchars($nombre);
        // $nombre = stripcslashes($nombre);

        // <b>damian<b> filter_var quita las etiquetas devuelve solo texto
       $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        
        echo "Tu nombre es: $nombre <br />";
    } else {
        $errores .= 'Por favor agrega un nombre <br />';
    }

    if(!empty($correo)) {
       $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
       
        if(var_dump(!filter_var($correo, FILTER_VALIDATE_EMAIL))) {
            $errores .= 'Por favor ingresa un correo valido <br />';
        } else {
            echo "Tu correo es: $correo";
        }

    } else {
        $errores .= 'Por favor agrega un correo';
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
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='post'>
        <input type="text" name='nombre' placeholder='nombre'>
        <!-- <input type="email" name='correo' placeholder='correo'> -->
        <input type="text" name='correo' placeholder='correo'>

        <?php if(!empty($errores)) : ?>
            <div class='error'><?php echo $errores; ?></div>
        <?php endif; ?>

        <input type="submit" value='enviar consulta' name='submit'>
    </form>


<!--     <form action="valida_envio.php" method='post'>
        <input type="text" name='nombre' placeholder='nombre'>
        <input type="email" name='correo' placeholder='correo'>

        <input type="submit" value='enviar consulta' name='submit-formulario2'>
    </form> -->
</body>
</html>