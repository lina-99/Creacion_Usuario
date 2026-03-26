<?php
session_start();
if (!isset($_SESSION['rol'])) {
    header('Location: index.php');
    exit;
}

require '../conexion/conexion.php';
$conn = connection();
$consulta = mysqli_query($conn, 'SELECT * FROM usuarios;');
$esAdmin = $_SESSION['rol'] === 'admin';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1 class="titulo-centro">Listado de usuarios</h1>
    <div class="contenedor">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Contrasena</th>
                    <?php if ($esAdmin): ?>
                        <th>Acciones</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($consulta)): ?>
                    <tr>
                        <td><?php echo $row['Id_usario']; ?></td>
                        <td><?php echo $row['Nombre_Usuario']; ?></td>
                        <td><?php echo $row['Telefono_Usuario']; ?></td>
                        <td><?php echo $row['Correo_Usuario']; ?></td>
                        <td>********</td>
                        <?php if ($esAdmin): ?>
                            <td>
                                <a href="editar_usuario.php?id_usuario=<?php echo $row['Id_usario']; ?>">Modificar</a>
                                <a href="eliminar_usuario.php?id_usuario=<?php echo $row['Id_usario']; ?>" onclick="return confirm('Deseas eliminar este usuario?');">Eliminar</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <div class="acciones-centro">
        <?php if ($esAdmin): ?>
            <a href="crear_usuario.php" class="btn-crear">Crear Usuario</a>
        <?php endif; ?>
        <a href="logout.php" class="btn-crear">Salir</a>
    </div>
</body>
</html>