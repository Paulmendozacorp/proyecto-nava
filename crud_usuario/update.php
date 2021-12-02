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

$sql = "UPDATE usuario SET nombre='$nombre', apellidos='$apellidos', direccion='$direccion', telefono='$telefono', CorreoElectronico='$CorreoElectronico', Contra='$Contra' WHERE id = '$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>