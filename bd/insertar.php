<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$fechacita=$_POST['fechacita'];
$horacita=$_POST['horacita'];
$telefono=$_POST['telefono'];
$servicio=$_POST['servicio'];

$sql="INSERT INTO `cita`(`id`, `Nombre del cliente`, `Fecha de la cita`, `Hora de la cita`, `Telefono del cliente`, `Servicio`) VALUES('$id','$nombre','$fechacita','$horacita','$telefono','$servicio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cita.php");
    
}else {
}
?>