<?php

$host = 'localhost';
$user = 'root';
$pasword = '';
$dbname = 'imagenes';

try {
    $conn = mysqli_connect($host, $user, $pasword, $dbname);
} catch (ErrorException $e) {
    $e->getMessage();
}
