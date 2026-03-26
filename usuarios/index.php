<?php
session_start();

$error = '';
define('ADMIN_PASSWORD', 'admin123');
define('ADMIN_KEY', 'clave123');

if (isset($_GET['modo']) && $_GET['modo'] === 'usuario') {
    $_SESSION['rol'] = 'usuario';
    header('Location: usuario.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'] ?? '';
    $clave = $_POST['clave'] ?? '';

    if ($password === ADMIN_PASSWORD && $clave === ADMIN_KEY) {
        $_SESSION['rol'] = 'admin';
        header('Location: usuario.php');
        exit;
    }

    $error = 'Credenciales de administrador incorrectas.';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Inicio</title>
</head>
<body>
    <div class="pantalla-centro">
    <div class="contenedor login-box">
        <h1>Bienvenido</h1>
        <p class="subtitulo">Sistema de gestion de usuarios</p>
        <p>Selecciona como deseas ingresar:</p>
        <div class="botones">
            <a href="index.php?modo=usuario" class="btn-crear">Entrar como usuario</a>
        </div>

        <h2>Entrar como administrador</h2>
        <?php if ($error !== ''): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="index.php">
            <label for="password">Contrasena</label>
            <input id="password" type="text" name="password" required>

            <label for="clave">Clave</label>
            <input id="clave" type="text" name="clave" required>

            <button type="submit">Entrar como administrador</button>
        </form>
    </div>
    </div>
</body>
</html>
