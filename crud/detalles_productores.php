<?php
include("conexion.php");
$con = connection();

$sql = "SELECT * FROM detalles_productores";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>dproductores CRUD</title>
</head>

<body>
    <div class="form">
        <h1>Insertar Detalles de Productor</h1>
        <form action="insertar_dproductores.php" method="POST">
        <select name="productor_id" >
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
            <input type="text" name="biografia" placeholder="Biografia">
          
            <input type="submit" value="Agregar">
        </form>
    </div>

</body>

</html>