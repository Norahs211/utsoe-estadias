<?php
include("includes/auth.php");
require_login();

$dir = "uploads/constancias/";
$permitidos = ['doc','docx','pdf'];

$nombre = $_FILES['constancias']['name'];
$tmp = $_FILES['constancias']['tmp_name'];
$size = $_FILES['constancias']['size'];

$ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));

if (!in_array($ext, $permitidos)) {
    die("Archivo no permitido");
}

if ($size > 5 * 1024 * 1024) {
    die("Archivo demasiado grande");
}

if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}

$nombreFinal = time() . "_" . $nombre;
$ruta = $dir . $nombreFinal;

if (move_uploaded_file($tmp, $ruta)) {
    header("Location: proceso.php?ok=1");
} else {
    echo "Error al subir archivo";
}