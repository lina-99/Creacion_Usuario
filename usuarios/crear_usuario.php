<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    header('Location: index.php');
    exit;
}
?>
    <h1 class="titulo-centro">Crear usuario</h1>

    <div class="contenedor">
        <form action="usuario_guardado.php" method="POST">
            <table>
                <thead>
                    <tr>
                        <th><label>Usuario</label></th>
                        <td><input type="text" name="Nombre_Usuario"></td>
                    </tr>
                    <tr>
                        <th><label>Teléfono</label></th>
                        <td><input type="text" name="Telefono_Usuario"></td>
                    </tr>
                    <tr>
                        <th><label>Correo</label></th>
                        <td><input type="text" name="Correo_Usuario"></td>
                    </tr>
                    <tr>
                        <th><label>Contraseña</label></th>
                        <td><input type="password" name="Contraseña_usuario"></td>
                    </tr>
                </thead>
            </table>

            <div class="botones">
                <button type="submit">Guardar</button>
                <a href="usuario.php" class="btn-crear">Cancelar</a>
            </div>
        </form>
    </div>

</body>
</html>
