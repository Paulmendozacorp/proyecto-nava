<?php

include("conexion.php");
$con=conectar();

$id_recibo=$_POST['id_recibo'];
$precio=$_POST['precio'];
$direccion=$_POST['direccion'];
$numfactura=$_POST['numfactura'];
$metrosCubicos=$_POST['metrosCubicos'];
$Giro=$_POST['Giro'];
$totalPagar=$_POST['totalPagar'];

$sql = "UPDATE recibo SET precio='$precio', direccion='$direccion', numfactura='$numfactura', metrosCubicos='$metrosCubicos', Giro='$Giro', totalPagar='$totalPagar' WHERE id_recibo = '$id_recibo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>