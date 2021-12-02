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

$sql = "UPDATE citas SET nombre='$nombre', correoele='$correoele', fechaCita='$fechaCita', telefono='$telefono', horario='$horario' WHERE id = '$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>