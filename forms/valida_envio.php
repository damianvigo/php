<?php

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'Se enviaron por GET';
} else {
    echo 'Se enviaron por POST';
}

/* if(isset($_POST['submit-formulario2'])) {
    echo 'Se han enviado los datos correctamente <br />';
    print_r($_POST['submit-formulario2']);
} */

?>