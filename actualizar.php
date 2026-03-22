<?php
include("includes/auth.php");
require_admin();

include("config/db.php");

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID de registro no válido.");
}

$id = (int) $_GET['id'];

$ingreso = "SELECT * FROM registro WHERE id_registro = $id";
$resultado = mysqli_query($connect, $ingreso);

if (!$resultado) {
    die("Error al consultar el registro: " . mysqli_error($connect));
}

$fila = mysqli_fetch_assoc($resultado);

if (!$fila) {
    die("No se encontró el registro solicitado.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Actualizar usuario | Estadías</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #f4f6f8;
            color: #1f2937;
        }

        .navbar {
            background: #0f172a;
            color: white;
            padding: 14px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .brand {
            font-size: 20px;
            font-weight: bold;
        }

        .navbar nav {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .container {
            max-width: 900px;
            margin: 32px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            border-radius: 14px;
            padding: 28px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #6b7280;
            margin-bottom: 24px;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .field {
            display: flex;
            flex-direction: column;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        label {
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: bold;
        }

        input, select {
            padding: 11px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
        }

        .actions {
            margin-top: 24px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 11px 16px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-primary {
            background: #1d4ed8;
            color: white;
        }

        .btn-secondary {
            background: #e5e7eb;
            color: #111827;
        }

        @media (max-width: 700px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<?php include("includes/navbar.php"); ?>

<main class="container">
    <section class="card">
        <h1>Actualizar usuario</h1>
        <p class="subtitle">Edita la información del registro seleccionado.</p>

        <form method="post" action="actualizardatos.php">
            <div class="grid">
                <div class="field">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($fila['Nombre']); ?>" required>
                </div>

                <div class="field">
                    <label for="Ap1">Apellido paterno</label>
                    <input type="text" id="Ap1" name="Ap1" value="<?php echo htmlspecialchars($fila['Apellido_paterno']); ?>" required>
                </div>

                <div class="field">
                    <label for="Ap2">Apellido materno</label>
                    <input type="text" id="Ap2" name="Ap2" value="<?php echo htmlspecialchars($fila['Apellido_materno']); ?>" required>
                </div>

                <div class="field">
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" value="<?php echo htmlspecialchars($fila['Edad']); ?>" required>
                </div>

                <div class="field">
                    <label for="sexo">Sexo</label>
                    <input type="text" id="sexo" name="sexo" value="<?php echo htmlspecialchars($fila['Sexo']); ?>" required>
                </div>

                <div class="field">
                    <label for="grado">Grado</label>
                    <input type="text" id="grado" name="grado" value="<?php echo htmlspecialchars($fila['Grado']); ?>" required>
                </div>

                <div class="field">
                    <label for="grupo">Grupo</label>
                    <input type="text" id="grupo" name="grupo" value="<?php echo htmlspecialchars($fila['Grupo']); ?>" required>
                </div>

                <div class="field">
                    <label for="Carrera">Carrera</label>
                    <input type="text" id="Carrera" name="Carrera" value="<?php echo htmlspecialchars($fila['Carrera']); ?>" required>
                </div>

                <div class="field">
                    <label for="correo">Correo</label>
                    <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($fila['Correo']); ?>" required>
                </div>

                <div class="field">
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($fila['Telefono']); ?>" required>
                </div>

                <input type="hidden" name="id" value="<?php echo $id; ?>">
            </div>

            <div class="actions">
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <a href="consulta.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </section>
</main>

</body>
</html>