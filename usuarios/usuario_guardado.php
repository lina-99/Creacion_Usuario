<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    header('Location: index.php');
    exit;
}

require '../conexion/conexion.php';
$conn = connection();
$Nombre = $_POST["Nombre_Usuario"] ?? '';
$Telefono = $_POST["Telefono_Usuario"] ?? '';
$Correo = $_POST["Correo_Usuario"] ?? '';
$Contraseña = $_POST["Contraseña_usuario"] ?? '';

if ($Nombre === '' || $Telefono === '' || $Correo === '' || $Contraseña === '') {
    echo "Debes completar todos los campos.";
    exit;
}

$consulta = mysqli_query($conn,"INSERT INTO `usuarios`( `Nombre_Usuario`, `Telefono_Usuario`, `Correo_Usuario`, `Contraseña_usuario`) VALUES ('$Nombre','$Telefono','$Correo','$Contraseña') ");
if ($consulta){
    header("location: usuario.php");

}
else {
    echo "Error al guardar: " . mysqli_error($conn);
}



?>