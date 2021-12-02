<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correoele=$_POST['correoele'];
$fechaCita=$_POST['fechaCita'];
$telefono=$_POST['telefono'];
$horario=$_POST['horario'];


$sql="INSERT INTO citas VALUES('$id','$nombre','$apellido','$correoele','$fechaCita','$telefono','$horario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>