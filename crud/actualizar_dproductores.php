<?php 
    include("conexion.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM detalles_productores WHERE id='$id'";
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
            <form action="editar_dproductores.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id']?>">
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
            <input type="text" name="biografia" placeholder="Biografia" value="<?= $row['biografia']?>">


               
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>