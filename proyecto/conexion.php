<?php
$servename = 'db'; // Cambia esto al nombre de tu servidor MySQL
$username = 'root'; // Cambia esto a tu nombre de usuario de MySQL
$password = 'test'; // Cambia esto a tu contraseña de MySQL
$dbname = 'busca_chamba';

$pdo = mysqli_connect($servename, $username, $password, $dbname);

if (!$pdo) {
    die("la conexion esta mal:" . mysqli_connect_error());
}


?>