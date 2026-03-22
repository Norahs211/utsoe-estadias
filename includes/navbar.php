<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$usuarioActual = $_SESSION['usuario'] ?? null;
$esAdmin = ($usuarioActual === 'admin');
?>
<style>
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
</style>

<header class="navbar">
    <div class="brand">UTSOE - Estadías</div>
    <nav>
        <?php if ($esAdmin): ?>
            <a href="index-full.php">Inicio</a>
            <a href="consulta.php">Panel admin</a>
        <?php else: ?>
            <a href="index1-full.php">Inicio</a>
            <a href="proceso.php">Proceso de estadías</a>
        <?php endif; ?>

        <a href="post-details-1.php">Estadías Internacionales</a>
        <a href="post-elements.php">Dirección Vinculación</a>
        <a href="privacy-policy.php">Aviso de Privacidad</a>
        <a href="Login.php">Cerrar sesión</a>
    </nav>
</header>