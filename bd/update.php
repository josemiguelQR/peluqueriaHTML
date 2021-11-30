<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$fechacita=$_POST['fechacita'];
$horacita=$_POST['horacita'];
$telefono=$_POST['telefono'];
$servicio=$_POST['servicio'];

$sql="UPDATE `cita` SET `Nombre del cliente`='$nombre',`Fecha de la cita`='$fechacita',`Hora de la cita`='$horacita',`Telefono del cliente`='$telefono',`Servicio`='$servicio' WHERE `id`='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cita.php");
    }
?>