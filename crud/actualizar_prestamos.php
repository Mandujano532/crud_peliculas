<?php 
    include("conexion.php");
    $con=connection();

    $id_pr=$_GET['id'];

    $sql="SELECT * FROM prestamos p INNER JOIN peliculas r  ON p.pelicula_id = r.id_p INNER JOIN usuarios u ON p.usuario_id = u.id WHERE id_pr='$id_pr'"; 
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar Prestamos</title>
        
    </head>
    <body>
        <div class="form">
            <form action="editar_prestamos.php" method="POST">
            <input type="text" name="genero_id" placeholder="<?= $row['id_pr']?>"disabled>
            <input type="hidden" name="id" value="<?= $row['id_pr']?>">
            <input type="text" placeholder="<?= $row['titulo']?>"disabled>
            <select name="pelicula_id" value="<?= $row['pelicula_id']?>">
            <?php
            $con = connection();
            $consulta ="SELECT * FROM peliculas";
            $ejecutar =mysqli_query($con,$consulta);
            ?>
             <?php foreach($ejecutar as $opciones):?>

                <option value="<?php echo $opciones['id_p']?>"><?php echo $opciones['titulo']?></option>


            <?php endforeach?>
            </select>

            <input type="text" name="" placeholder="<?= $row['nombre']." ".$row['apellido']?>"disabled>
            <select name="usuario_id" value="<?= $row['usuario_id']?>">
            <?php
            $con = connection();
            $consulta ="SELECT * FROM usuarios";
            $ejecutar =mysqli_query($con,$consulta);
            ?>
             <?php foreach($ejecutar as $opciones):?>

                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']." ".$opciones['apellido']?></option>


            <?php endforeach?>
            </select>
             


 

<input type="date" name="fecha_devolucion" value="<?= $row['fecha_devolucion']?>">
               
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>