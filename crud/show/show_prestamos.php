<?php 
    include("conexion.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM prestamos WHERE id='$id'";
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
            <input type="tex" name="id" value="<?= $row['id']?>" disabled>
<select name="pelicula_id" value="<?= $row['pelicula_id']?>" disabled>
<option value="1">Steven Spielberg</option>
<option value="2">George Lucas</option>
<option value="3">Jerry Bruckheimer</option>
<option value="4">Kathleen Kennedy</option>
<option value="5">Scott Rudin</option>
<option value="6">Harvey Weinstein</option>
<option value="7">Kevin Feige</option>
<option value="8">Christopher Nolan</option>
<option value="9">James Cameron</option>
<option value="10">Joel Silver</option>
</select>

<select name="usuario_id" value="<?= $row['usuario_id']?>" disabled>
<option value="1">Acción</option>
<option value="2">Aventura</option>
<option value="3">Comedia</option>
<option value="4">Drama</option>
<option value="5">Ciencia ficción</option>
<option value="6">Fantasía</option>
<option value="7">Terror</option>
<option value="8">Suspenso</option>
<option value="9">Romance</option>
<option value="10">Animación</option>
<option value="11">Documental</option>
<option value="12">Cine negro</option>
<option value="13">Western</option>
<option value="14">Musical</option>
<option value="15">Guerra</option>
</select>
 
<input type="date" name="fecha_devolucion" value="<?= $row['fecha_prestamo']?>" disabled>
<input type="date" name="fecha_devolucion" value="<?= $row['fecha_devolucion']?>" disabled>
<button onclick="window.location.href='index-prestamos.php'">Volver</button>
            </form>
        </div>
    </body>
</html>