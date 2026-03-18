
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
     <table>  
        <thead>
            <tr>
                <form action="usuario_guardado.php"  method="post">
                <th><label for="">Usuario</label></th>
                <td><input type="text" name="Nombre_Usuario" value=""></td>
                
            </tr>
            
            <tr>
            <th><label for="">Telefono</label></th>
               <td><input type="text" name="Telefono_Usuario" value="" ></td>
            </tr>

            <tr>
                <th><label for="">Correo</label></th>
                <td><input type="text" name="Correo_Usuario" value=""></td>
            </tr>
                
                <th><label for="">Contraseña</label></th>
                <td><input type="text" name="Contraseña_usuario" value=""></td>
            </tr>
            </form>
        </thead>
    </table>
                <button type="submit">Guardar</button>
                <button><a href="usuario.php">Cancelar</a></button>
</div>

</body>
</html>
