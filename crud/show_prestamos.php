<?php 
    include("conexion.php");
    $con=connection();

    $id=$_GET['id'];

    $sql= "SELECT * FROM prestamos p INNER JOIN peliculas r  ON p.pelicula_id = r.id_p INNER JOIN usuarios u ON p.usuario_id = u.id WHERE id_pr='$id'"; 
    
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
            <input type="text" name="id" value="<?= $row['id_pr']?>" disabled>
            <input type="text" name="id" value="<?= $row['titulo']?>" disabled>
            <input type="text" name="id" value="<?= $row['nombre']." ".$row['apellido']?>" disabled>


<input type="date" name="fecha_devolucion" value="<?= $row['fecha_prestamo']?>" disabled>
<input type="date" name="fecha_devolucion" value="<?= $row['fecha_devolucion']?>" disabled>
<button onclick="window.location.href='index-prestamos.php'">Volver</button>
            </form>
        </div>
    </body>
</html>