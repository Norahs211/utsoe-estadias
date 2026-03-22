<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function require_login() {
    if (!isset($_SESSION['usuario'])) {
        header("Location: Login.php");
        exit();
    }
}

function require_admin() {
    if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'admin') {
        header("Location: Login.php");
        exit();
    }
}
?>