<?php
include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$direccion=$_POST['direccion'];
$fechaingreso=$_POST['fechaingreso'];
$turno=$_POST['turno'];


$sql="INSERT INTO empleados VALUES('$id_empleado','$nombre','$apellido','$fechaNacimiento','$direccion','$fechaingreso','$turno')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>