<?php
require '../conexion/conexion.php';
$conn = connection();
$Nombre =$_POST["Nombre_Usuario"];
$Telefono =$_POST["Telefono_Usuario"];
$Correo =$_POST["Correo_Usuario"];
$Contraseña =$_POST["Contraseña_usuario"];


$consulta = mysqli_query($conn,"INSERT INTO `usuarios`( `Nombre_Usuario`, `Telefono_Usuario`, `Correo_Usuario`, `Contraseña_usuario`) VALUES ('$Nombre','$Telefono','$Correo','$Contraseña') ");
if ($consulta){
    header("location: usuario.php");

}
else {
    echo "error al eliminar";
}



?> 