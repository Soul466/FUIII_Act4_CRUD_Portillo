<?php

include("conexion.php");
$con=conectar();

$Matricula=$_POST['Matricula'];
$Telefono=$_POST['Telefono'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$RFC=$_POST['RFC'];

$sql="UPDATE `profesores` SET `RFC`='$RFC',`Nombre`='$Nombre',`Apellidos`='$Apellidos',`Telefono`='$Telefono',`Matricula`='$Matricula' WHERE 1";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>