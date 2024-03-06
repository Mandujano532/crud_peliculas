<?php 
    include("conexion.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM peliculas WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="form">
            <form action="editar_pelicula.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input type="text" name="titulo" placeholder="Titulo" value="<?= $row['titulo']?>">

<!-- Este es un comentario en HTML <input type="number" name="productor_id" placeholder="Stock">
-->
<select name="productor_id" value="<?= $row['productor_id']?>">
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

<select name="genero_id" value="<?= $row['genero_id']?>">
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
 

<input type="number" name="stock" placeholder="Stock" value="<?= $row['stock']?>">
               
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>