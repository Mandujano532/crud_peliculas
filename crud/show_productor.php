<?php 
    include("conexion.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM productores WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar Productores</title>
        
    </head>
    <body>
        <div class="form">
            <form action="editar_productor.php" method="POST">
            <input type="tex" name="id" value="<?= $row['id']?>" disabled>
            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>" disabled>
            <input type="text" name="apellido" placeholder="Apellidos" value="<?= $row['apellido']?>" disabled>
            <button onclick="window.location.href='index-productor.php'">Volver</button>
            </form>
        </div>
    </body>
</html>