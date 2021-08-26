<?php

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'Se enviaron por GET';
} else {
    echo 'Se enviaron por POST';
}

?>