<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include("config/db.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$_SESSION['usuario'] = $usuario;

$sql = "SELECT * FROM usuarios 
WHERE Usuario='$usuario' AND Contraseña='$contraseña'";

$resultado = mysqli_query($connect, $sql);

if (!$resultado) {
    die("Error en consulta: " . mysqli_error($connect));
}

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {

    if ($usuario === "admin") {
        header("Location: index-full.php");
    } else {
        header("Location: index1-full.php");
    }
    exit();

} else {
    echo "<h2>Error en la autenticación</h2>";
    echo "<a href='Login.php'>Volver</a>";
}

mysqli_free_result($resultado);
mysqli_close($connect);
?>