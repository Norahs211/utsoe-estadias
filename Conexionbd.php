<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "estadias";

$connect = mysqli_connect("localhost", "appuser", "1234", "estadias");
if (!$connect) {
    die("Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($connect, "utf8");
?>