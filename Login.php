<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="assets/css/Login.css">
</head>
<body>

    <img src="assets/img/logo.png" width="400" height="100" alt="Logo UTSOE">

    <div class="login-box">
        <img src="assets/img/utsoe.jpg" class="avatar" alt="Avatar Image">

        <form action="validar.php" method="post">
            <h1>Inicio de Sesión</h1>

            <label for="usuario">Usuario</label>
            <input type="text" placeholder="Nombre de usuario" id="usuario" name="usuario"/>

            <label for="contraseña">Contraseña</label>
            <input type="password" placeholder="Colocar contraseña" id="contraseña" name="contraseña"/>

            <input type="submit" value="Iniciar Sesión">
            <a href="registro.php">No tienes una cuenta?</a>
        </form>
    </div>

</body>
</html>