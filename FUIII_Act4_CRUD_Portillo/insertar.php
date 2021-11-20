<?php
include("conexion.php");
$con=conectar();

$Matricula=$_POST['Matricula'];
$Telefono=$_POST['Telefono'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$RFC=$_POST['RFC'];


$sql="INSERT INTO `profesores`(`RFC`, `Nombre`, `Apellidos`, `Telefono`, `Matricula`) VALUES ('$RFC','$Nombre','$Apellidos','$Telefono','$Matricula')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>