<?php

include("conexion.php");
$con=conectar();

$Matricula=$_GET['id'];

$sql="DELETE FROM `profesores` WHERE Matricula='$Matricula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
