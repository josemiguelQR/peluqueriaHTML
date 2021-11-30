<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM `cita` WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cita.php");
    }
?>