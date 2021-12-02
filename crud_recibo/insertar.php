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


$sql="INSERT INTO recibo VALUES('$id_recibo','$precio','$direccion','$numfactura','$metrosCubicos','$Giro','$totalPagar')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>