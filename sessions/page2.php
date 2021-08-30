<?php
session_start();

if ($_SESSION) {
    /*  $nombre = $_SESSION['nombre'];
    echo "<h1>Hey there, $nombre</h1>"; */
    print_r($_SESSION);
} else {
    echo "Not login";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>

<body>
    <!--  <h1>Hey, <?php echo $_SESSION['nombre']; ?></h1> -->
    <a href="close.php">Close session</a>
</body>

</html>