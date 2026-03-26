<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    header('Location: index.php');
    exit;
}

require '../conexion/conexion.php';
$conn = connection();
$id =$_GET['id_usuario'];
$Nombre =$_POST["Nombre_Usuario"];
$Telefono =$_POST["Telefono_Usuario"];
$Correo =$_POST["Correo_Usuario"];
$Contraseña =$_POST["Contraseña_usuario"];


$consulta = mysqli_query($conn,"UPDATE `usuarios` SET `Nombre_Usuario`='$Nombre',`Telefono_Usuario`='$Telefono',`Correo_Usuario`='$Correo',`Contraseña_usuario`='$Contraseña' WHERE Id_usario = '$id'");
if ($consulta){
    header("location: usuario.php");

}
else {
    echo "error al eliminar";
}



?> 

