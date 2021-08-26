<?php

if($_POST) {
    echo $_POST['nombre'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>
        <input type="text" placeholder='Ingresa tu nombre:' name='nombre' />
        <br>
        <br>
        
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value='hombre' id='hombre'>
        <br>
        <br>

        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value='mujer' id='mujer'>
        <br>
        <br>

        <select name="year" id="">
            <?php
            for($i=1980; $i<=2021; $i++) {
               echo "<option value='$i'>" . $i . "</option>";
           } 
           ?>
        </select>
        <br>
        <br>

        <label for="terminos">Aceptar los terminos</label>
        <input type="checkbox" name="terminos" id="terminos" value='true' />

        <br>
        <br>
        <input type="submit" value='Enviar'>
    </form>
</body>
</html>