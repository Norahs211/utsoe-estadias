<?php
include("includes/auth.php");
require_admin();

include("config/db.php");

if (
    !isset($_POST['id'], $_POST['nombre'], $_POST['Ap1'], $_POST['Ap2'], $_POST['edad'],
        $_POST['sexo'], $_POST['grado'], $_POST['grupo'], $_POST['Carrera'],
        $_POST['correo'], $_POST['telefono'])
) {
    die("Faltan datos para actualizar el registro.");
}

if (!is_numeric($_POST['id'])) {
    die("ID de registro no válido.");
}

$id = (int) $_POST['id'];
$nombre = mysqli_real_escape_string($connect, trim($_POST['nombre']));
$apellido_paterno = mysqli_real_escape_string($connect, trim($_POST['Ap1']));
$apellido_materno = mysqli_real_escape_string($connect, trim($_POST['Ap2']));
$edad = mysqli_real_escape_string($connect, trim($_POST['edad']));
$sexo = mysqli_real_escape_string($connect, trim($_POST['sexo']));
$grado = mysqli_real_escape_string($connect, trim($_POST['grado']));
$grupo = mysqli_real_escape_string($connect, trim($_POST['grupo']));
$carrera = mysqli_real_escape_string($connect, trim($_POST['Carrera']));
$correo = mysqli_real_escape_string($connect, trim($_POST['correo']));
$telefono = mysqli_real_escape_string($connect, trim($_POST['telefono']));

$ingreso = "UPDATE registro SET
    Nombre = '$nombre',
    Apellido_paterno = '$apellido_paterno',
    Apellido_materno = '$apellido_materno',
    Edad = '$edad',
    Sexo = '$sexo',
    Grado = '$grado',
    Grupo = '$grupo',
    Carrera = '$carrera',
    Correo = '$correo',
    Telefono = '$telefono'
    WHERE id_registro = $id";

$resultado = mysqli_query($connect, $ingreso);

if (!$resultado) {
    die("Error al actualizar el registro: " . mysqli_error($connect));
}

mysqli_close($connect);

header("Location: consulta.php");
exit();
?>