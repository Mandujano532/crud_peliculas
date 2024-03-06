<?php
include("conexion.php");
$con = connection();

$sql = "SELECT * FROM prestamos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Prestamos CRUD</title>
</head>

<body>
    <div class="form">
        <h1>Crear Prestamo</h1>
        <form action="insertar_prestamos.php" method="POST">
            <select name="pelicula_id" >
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
        
            <select name="usuario_id">
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
             
            <input type="date" name="fecha_devolucion">
          
            <input type="submit" value="Agregar">
        </form>
    </div>
</body>

</html>