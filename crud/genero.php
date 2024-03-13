<?php
include("conexion.php");
$con = connection();

$sql = "SELECT * FROM generos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>generos CRUD</title>
</head>

<body>
    <div class="form">
        <h1>Insertar Genero</h1>
        <form action="insertar_genero.php" method="POST">
            <input type="text" name="nombres" placeholder="Nombre">
            <input type="text" name="descripcion" placeholder="Descripcion">
          
            <input type="submit" value="Agregar">
        </form>
    </div>
</body>

</html>