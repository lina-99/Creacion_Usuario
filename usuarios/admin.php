<?php
    require '../conexion/conexion.php';
    $conn = connection();
    $consulta = mysqli_query($conn, 'SELECT * FROM usuarios;');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1> </H1>
    <div class="contenedor">
    
    <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($consulta)): ?>
            <tr>
                <td><?php echo $row['Id_usario'] ?></td>
                <td><?php echo $row['Nombre_Usuario'] ?></td>
                <td><?php echo $row['Telefono_Usuario'] ?></td>
                <td><?php echo $row['Correo_Usuario'] ?></td>
                <td><?php echo $row['Contraseña_usuario'] ?></td>
                <td>
                    <a href="editar_usuario.php?id_usuario=<?php echo $row['Id_usario'] ?>">Modificar</a> |
                    <a href="eliminar_usuario.php?id_usuario=<?php echo $row['Id_usario'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</table>
    <tbody>
                <tr>
                    <?php while ($row = mysqli_fetch_assoc($consulta)): ?>
                        <th><tr><td><?php echo $row ['Id_usario'] ?></tr></td>
                        <td><?php echo $row ['Nombre_Usuario'] ?></td>
                        <td><?php echo $row ['Telefono_Usuario'] ?></td>
                        <td><?php echo $row ['Correo_Usuario'] ?></td>
                        <td><?php echo $row ['Contraseña_usuario'] ?></td>
                        <td> <a href="editar_usuario.php?id_usuario=<?php echo $row['Id_usario'] ?>">Modificar</a></td>
                        <td> <a href="eliminar_usuario.php?id_usuario=<?php echo $row['Id_usario'] ?>">Eliminar</a></td>
                    
</th>                        
<?php endwhile ?>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="crear_usuario.php" class="btn-crear">Crear Usuario</a>
    
</body>
</html>