<?php
include("conexion.php");
$con = connection();

$sql = "SELECT * FROM peliculas";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <style>
            body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            text-align: center;
        }
        .boton-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 25px;
        }
        .columna {
            flex: 0 0 200%;
        }
        .boton {
            display: block;
            width: 100%;
            margin-bottom: 15px;
        }
        
    </style>
    <title>peliculas CRUD</title>
</head>

<body>
<h1>¿QUÉ DESEAS HACER?</h1>
    
    <div>
        <div class="columna">
            <button class="boton" onclick="window.location.href='index-peliculas.php'">Peliculas</button>
            <button class="boton" onclick="window.location.href='index-usuarios.php'">Usuarios</button>
            <button class="boton" onclick="window.location.href='index-genero.php'">Generos</button>
        </div>
        <div class="columna">
            <button class="boton" onclick="window.location.href='index-prestamos.php'">Prestamos</button>
            <button class="boton" onclick="window.location.href='index-productores.php'">Productores</button>
            <button class="boton" onclick="window.location.href='index-detalles_productores.php'">Detalles de Productores</button>
        </div>
    </div>
  

</body>

</html>