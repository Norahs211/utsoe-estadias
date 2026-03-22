<?php
include("includes/auth.php");
require_login();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Proceso de Estadías</title>

<style>
body {
    font-family: Arial;
    background: #f4f6f8;
    margin: 0;
}

.navbar {
    background: #0f172a;
    color: white;
    padding: 14px;
}

.container {
    max-width: 700px;
    margin: 30px auto;
    background: white;
    padding: 25px;
    border-radius: 12px;
}

h1 {
    text-align: center;
}

form {
    margin-bottom: 25px;
}

button {
    padding: 10px;
    background: #1d4ed8;
    color: white;
    border: none;
    border-radius: 6px;
}
</style>
</head>

<body>

<?php include("includes/navbar.php"); ?>

<div class="container">
    <h1>Subir documentación</h1>

    <form action="enviodatos.php" method="post" enctype="multipart/form-data">
        <h3>Paso 1 - Archivo</h3>
        <input type="file" name="archivo" required>
        <button type="submit">Subir</button>
    </form>

    <form action="enviodatos2.php" method="post" enctype="multipart/form-data">
        <h3>Paso 2 - Constancia</h3>
        <input type="file" name="constancia" required>
        <button type="submit">Subir</button>
    </form>

    <form action="enviodatos3.php" method="post" enctype="multipart/form-data">
        <h3>Paso 3 - Acta</h3>
        <input type="file" name="acta" required>
        <button type="submit">Subir</button>
    </form>

</div>

</body>
</html>