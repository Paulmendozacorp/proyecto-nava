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

$sql = "UPDATE empleados SET nombre='$nombre', apellido='$apellido', fechaNacimiento='$fechaNacimiento', direccion='$direccion', fechaingreso='$fechaingreso', turno='$turno' WHERE id_empleado = '$id_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>