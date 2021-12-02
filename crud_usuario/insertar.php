<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$CorreoElectronico=$_POST['CorreoElectronico'];
$Contra=$_POST['Contra'];


$sql="INSERT INTO usuario VALUES('$id','$nombre','$apellidos','$direccion','$telefono','$CorreoElectronico','$Contra')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>