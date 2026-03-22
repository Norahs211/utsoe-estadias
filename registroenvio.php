<!DOCTYPE html>
    <html lang ="es" dir ="ltr">
        <head>
            <meta charset = "utf-8">
            <meta name="author" content="TIDEM">
            <title>Formulario de registro</title>
        </head>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("config/db.php");

$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['Ap1'];
$apellido_materno = $_POST['Ap2'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$grado = $_POST['grado'];
$grupo = $_POST['grupo'];
$carrera = $_POST['Carrera'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Insertar en registro
$sql1 = "INSERT INTO registro 
(Nombre, Apellido_paterno, Apellido_materno, Edad, Sexo, Grado, Grupo, Carrera, Correo, Telefono)
VALUES 
('$nombre','$apellido_paterno','$apellido_materno','$edad','$sexo','$grado','$grupo','$carrera','$correo','$telefono')";

$resultado1 = mysqli_query($connect, $sql1);

if (!$resultado1) {
    die("Error en registro: " . mysqli_error($connect));
}

// Insertar en usuarios
$sql2 = "INSERT INTO usuarios (Usuario, Contraseña)
VALUES ('$usuario', '$contraseña')";

$resultado2 = mysqli_query($connect, $sql2);

if (!$resultado2) {
    die("Error en usuarios: " . mysqli_error($connect));
}

// Redirigir correctamente
header("Location: Login.php");
exit();
?>
</body>
</html>





