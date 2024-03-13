<?php 
    include("conexion.php");
    $con=connection();

    $id_p=$_GET['id_p'];

    $sql="SELECT * FROM peliculas p INNER JOIN generos g  ON p.genero_id = g.id INNER JOIN productores r  ON p.productor_id = r.id WHERE id_p='$id_p'";
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
            <form action="index-peliculas.php" method="POST">
            <input type="tex" name="id_p" value="<?= $row['id_p']?>" disabled>
            <input type="text" name="titulo" placeholder="<?= $row['titulo']?>"disabled>
            <input type="text" name="productor_id" placeholder="<?= $row['nombre']?> <?= $row['apellido']?>"disabled>
            <input type="text" name="genero_id" placeholder="<?= $row['nombres']?>"disabled>

            <input type="number" name="slug" placeholder="<?= $row['slug']?>" value="<?= $row['slug']?>"disabled>
<input type="number" name="stock" placeholder="Stock" value="<?= $row['stock']?>"disabled>
<button onclick="window.location.href='index-peliculas.php'">Volver</button>
            </form>
        </div>
    </body>
</html>