<?php
require '../conexion/conexion.php';
$conn = connection();
$id =$_GET['id_usuario'];
$consulta = mysqli_query($conn,"SELECT * FROM  `usuarios` WHERE `Id_usario` = '$id';");

$resultado = mysqli_fetch_assoc($consulta)







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    
        <form action="actualizar_datos.php?id_usuario=<?php echo $resultado['Id_usario'] ?>"  method="post">
            <label for="">Usuario</label>
            <input type="text" name="Nombre_Usuario" value="<?php echo $resultado ['Nombre_Usuario'] ?>">
            <label for="">Telefono</label >
            <input type="text" name="Telefono_Usuario" value="<?php echo $resultado ['Telefono_Usuario'] ?>" >
            <label for="">Correo</label>
            <input type="text" name="Correo_Usuario" value="<?php echo $resultado ['Correo_Usuario'] ?>">
            <label for="">Contraseña</label>
            <input type="text" name="Contraseña_usuario" value="<?php echo $resultado ['Contraseña_usuario'] ?>">
            <button  type="submit">Guardar</button>
            <button><a href="usuario.php">Cancelar</a></button>
            
        </form>
    
</body>
</html>
