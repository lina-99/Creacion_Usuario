<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    header('Location: index.php');
    exit;
}

require '../conexion/conexion.php';
$conn = connection();
$id =$_GET['id_usuario'];
$consulta = mysqli_query($conn,"DELETE FROM usuarios WHERE Id_usario = '$id';");

if ($consulta){
    header("location: usuario.php");

}
else {
    echo "error al eliminar";
}

?>