<?php 
    include("conexion.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM generos WHERE id='$id'";
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
            <form action="editar_genero.php" method="POST">
            <input type="tex" name="id" value="<?= $row['id']?>" disabled>
            <input type="text" name="nombres" placeholder="Nombre" value="<?= $row['nombres']?>"disabled>
            <input type="text" name="descripcion" placeholder="Descripcion" value="<?= $row['descripcion']?>"disabled>
            <div class="contenedor">
            <button onclick="window.location.href='index-genero.php'">Volver</button>
            </div>
            </form>
        </div>
    </body>
</html>