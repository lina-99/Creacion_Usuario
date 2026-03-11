<?php
    require '../conexion/conexion.php';
    $conn = connection();
    $consulta = mysqli_query($conn, 'SELECT * FROM usuarios;');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th> Id</th>
            <th> Nombre </th>
            <th> Telefono</th>
            <th> Correo</th>
            <th> Contraseña</th>

        </thead>
        <tbody>
            <tr>
                <?php while ($row = mysqli_fetch_assoc($consulta)): ?>
                    <td><?php echo $row ['Id_usario'] ?></td>
                    <td><?php echo $row ['Nombre_Usuario'] ?></td>
                    <td><?php echo $row ['Telefono_Usuario'] ?></td>
                    <td><?php echo $row ['Correo_Usuario'] ?></td>
                    <td><?php echo $row ['Contraseña_usuario'] ?></td>
                    <td> <a href="editar_usuario.php?id_usuario=<?php echo $row['Id_usario'] ?>">Modificar</a></td>
                    <td> <a href="eliminar_usuario.php?id_usuario=<?php echo $row['Id_usario'] ?>">Eliminar</a></td>
                <?php endwhile ?>
            </tr>
        </tbody>
    </table>
</body>
</html>