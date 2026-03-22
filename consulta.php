<?php

include("includes/auth.php");
require_admin();

include("config/db.php");

$ingreso = "SELECT * FROM registro ORDER BY id_registro ASC";
$resultado = mysqli_query($connect, $ingreso);

if (!$resultado) {
    die("Error al consultar registros: " . mysqli_error($connect));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Panel de Administración - Estadías</title>
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
        }

        .navbar h1 {
            margin: 0;
            font-size: 20px;
        }

        .navbar nav a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
            font-size: 14px;
        }

        .container {
            width: 95%;
            max-width: 1200px;
            margin: 30px auto;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .title {
            margin: 0 0 8px 0;
            font-size: 28px;
        }

        .subtitle {
            margin: 0 0 24px 0;
            color: #6b7280;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1000px;
        }

        thead {
            background: #e5e7eb;
        }

        th, td {
            padding: 12px 10px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
            font-size: 14px;
        }

        tr:hover {
            background: #f9fafb;
        }

        .actions a {
            text-decoration: none;
            padding: 8px 10px;
            border-radius: 6px;
            font-size: 13px;
            margin-right: 8px;
            display: inline-block;
        }

        .edit {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .delete {
            background: #fee2e2;
            color: #b91c1c;
        }

        .empty {
            padding: 20px;
            background: #fff7ed;
            border: 1px solid #fdba74;
            border-radius: 8px;
            color: #9a3412;
        }
    </style>
</head>
<body>

<?php include("includes/navbar.php"); ?>

    <main class="container">
        <section class="card">
            <h2 class="title">Panel de administración de usuarios</h2>
            <p class="subtitle">Listado de registros disponibles en el sistema.</p>

            <?php if (mysqli_num_rows($resultado) > 0): ?>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre completo</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Grado</th>
                                <th>Grupo</th>
                                <th>Carrera</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
                                <tr>
                                    <td><?php echo $fila['id_registro']; ?></td>
                                    <td>
                                        <?php
                                        echo htmlspecialchars(
                                            $fila['Nombre'] . ' ' .
                                            $fila['Apellido_paterno'] . ' ' .
                                            $fila['Apellido_materno']
                                        );
                                        ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($fila['Edad']); ?></td>
                                    <td><?php echo htmlspecialchars($fila['Sexo']); ?></td>
                                    <td><?php echo htmlspecialchars($fila['Grado']); ?></td>
                                    <td><?php echo htmlspecialchars($fila['Grupo']); ?></td>
                                    <td><?php echo htmlspecialchars($fila['Carrera']); ?></td>
                                    <td><?php echo htmlspecialchars($fila['Correo']); ?></td>
                                    <td><?php echo htmlspecialchars($fila['Telefono']); ?></td>
                                    <td class="actions">
                                        <a class="edit" href="actualizar.php?id=<?php echo $fila['id_registro']; ?>">Actualizar</a>
                                        <a class="delete" href="eliminar.php?id=<?php echo $fila['id_registro']; ?>" onclick="return confirm('¿Seguro que deseas eliminar este registro?');">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="empty">No hay usuarios registrados todavía.</div>
            <?php endif; ?>

            <?php mysqli_free_result($resultado); ?>
            <?php mysqli_close($connect); ?>
        </section>
    </main>

</body>
</html>S