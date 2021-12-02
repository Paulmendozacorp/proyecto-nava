<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM recibo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Recibo|Jmas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Recibos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
                                    <input type="text" class="form-control mb-3" name="numfactura" placeholder="numfactura">
                                    <input type="text" class="form-control mb-3" name="metrosCubicos" placeholder="metrosCubicos">
                                    <input type="text" class="form-control mb-3" name="Giro" placeholder="Giro">
                                    <input type="text" class="form-control mb-3" name="totalPagar" placeholder="totalPagar">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                                <a href="../index.php">Inicio</a></li>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_recibo</th>
                                        <th>precio</th>
                                        <th>direccion</th>
                                        <th>numero de factura</th>
                                        <th>metrosCubicos</th>
                                        <th>Giro</th>
                                        <th>total a Pagar</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_recibo']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['numfactura']?></th>    
                                                <th><?php  echo $row['metrosCubicos']?></th>   
                                                <th><?php  echo $row['Giro']?></th>
                                                <th><?php  echo $row['totalPagar']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['id_recibo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_recibo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }while($row=mysqli_fetch_array($query));
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>