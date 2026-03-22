<?php
include("includes/auth.php");
require_admin();

include("config/db.php");

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID no válido.");
}

$id = (int) $_GET['id'];

// Confirmación por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "DELETE FROM registro WHERE id_registro = $id";
    $resultado = mysqli_query($connect, $sql);

    if (!$resultado) {
        die("Error al eliminar: " . mysqli_error($connect));
    }

    mysqli_close($connect);

    header("Location: consulta.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Eliminar usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            margin: 0;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 10px;
        }

        p {
            color: #6b7280;
        }

        .actions {
            margin-top: 20px;
        }

        button, a {
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            margin: 5px;
        }

        .confirm {
            background: #dc2626;
            color: white;
        }

        .cancel {
            background: #e5e7eb;
            color: #111827;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Eliminar usuario</h1>
    <p>¿Estás seguro de que deseas eliminar este registro?</p>

    <div class="actions">
        <form method="post" style="display:inline;">
            <button class="confirm" type="submit">Sí, eliminar</button>
        </form>

        <a href="consulta.php" class="cancel">Cancelar</a>
    </div>
</div>

</body>
</html>