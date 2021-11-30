<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cita";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CITAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="hidden" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre del cliente">
                                    <input type="text" class="form-control mb-3" name="fechacita" placeholder="Fecha de la cita">
                                    <input type="text" class="form-control mb-3" name="horacita" placeholder="Hora de la cita">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono del cliente">
                                    <input type="text" class="form-control mb-3" name="servicio" placeholder="Servicio">
                                    <input type="submit" class="btn btn-primary"> <a class="btn btn-primary" href="/proyecto_final_peluqueria/index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre del cliente</th>
                                        <th>Numero de telefono</th>
                                        <th>Fecha de la cita</th>
                                        <th>Hora de la cita</th>
                                        <th>Telefono del cliente</th>
                                        <th>Servicio</th> 
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['Nombre del cliente']?></th>
                                                <th><?php  echo $row['Fecha de la cita']?></th>
                                                <th><?php  echo $row['Hora de la cita']?></th>
                                                <th><?php  echo $row['Telefono del cliente']?></th> 
                                                <th><?php  echo $row['Servicio']?></th>       
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>