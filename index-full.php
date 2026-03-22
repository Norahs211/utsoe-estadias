<?php
include("includes/auth.php");
require_admin();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Inicio - Administrador | Estadías</title>
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

        .hero {
            max-width: 1100px;
            margin: 32px auto 20px;
            padding: 0 20px;
        }

        .hero-card {
            background: linear-gradient(135deg, #0f172a, #1d4ed8);
            color: white;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.12);
        }

        .hero-card h1 {
            margin-top: 0;
            font-size: 34px;
        }

        .hero-card p {
            margin-bottom: 0;
            line-height: 1.6;
            max-width: 800px;
        }

        .section {
            max-width: 1100px;
            margin: 24px auto 40px;
            padding: 0 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 14px;
            padding: 22px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .card h2 {
            margin-top: 0;
            font-size: 22px;
        }

        .card p {
            color: #4b5563;
            line-height: 1.5;
        }

        .button {
            display: inline-block;
            margin-top: 12px;
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
            background: #1d4ed8;
            color: white;
            font-size: 14px;
        }

        .button.secondary {
            background: #334155;
        }

        footer {
            background: #111827;
            color: #d1d5db;
            padding: 24px 20px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>

<?php include("includes/navbar.php"); ?>

<section class="hero">
    <div class="hero-card">
        <h1>Bienvenido, administrador</h1>
        <p>
            Este es el panel principal del sistema de Estadías. Desde aquí puedes administrar
            registros de usuarios, consultar información institucional y revisar las páginas
            principales del portal.
        </p>
    </div>
</section>

<section class="section">
    <div class="grid">
        <article class="card">
            <h2>Administración de usuarios</h2>
            <p>
                Accede al listado completo de registros, actualiza información y elimina usuarios
                desde el panel administrativo.
            </p>
            <a class="button" href="consulta.php">Ir al panel admin</a>
        </article>

        <article class="card">
            <h2>Dirección Vinculación</h2>
            <p>
                Consulta la información institucional relacionada con el área de vinculación y
                servicios universitarios.
            </p>
            <a class="button secondary" href="post-elements.php">Ver información</a>
        </article>

        <article class="card">
            <h2>Estadías Internacionales</h2>
            <p>
                Revisa los detalles del programa, requisitos y contenido general relacionado con
                estadías internacionales.
            </p>
            <a class="button secondary" href="post-details-1.php">Abrir sección</a>
        </article>
    </div>
</section>

<footer>
    <p>Proyecto académico recuperado y en proceso de refactorización.</p>
</footer>

</body>
</html>