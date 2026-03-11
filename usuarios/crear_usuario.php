
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>

    <div class="contenedor">
        <form action="usuario_guardado.php"  method="post">
            <label for="">Usuario</label>
            <input type="text" name="Nombre_Usuario" value="">
            <label for="">Telefono</label >
            <input type="text" name="Telefono_Usuario" value="" >
            <label for="">Correo</label>
            <input type="text" name="Correo_Usuario" value="">
            <label for="">Contraseña</label>
            <input type="text" name="Contraseña_usuario" value="">
            <button type="submit">Guardar</button>
            <button><a href="usuario.php">Cancelar</a></button>
            
        </form>
    </div>
</body>
</html>
