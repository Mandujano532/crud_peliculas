<?php
include("conexion.php");
$con = connection();

$sql = "SELECT * FROM productores";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>productores CRUD</title>
</head>

<body>
    <div class="form">
        <h1>Insertar Productor</h1>
        <form action="insertar_productor.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellidos">
          
            <input type="submit" value="Agregar">
        </form>
    </div>
</body>

</html>