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

    <div class="table">
        <br>
        <br>
        <h2>Productores Registrados</h2>
<br>
        <table>
            <thead>
                <tr>
                    <th><a href="index.php" >Volver</a></th>
                    <th><a href="productores.php" >Agregar</a></th>
                </tr>
            </thead>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><a href="show_productor.php?id=<?= $row['id'] ?>"><?= $row['id'] ?></a></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['apellido'] ?></th>
                        <th><a href="actualizar_productor.php?id=<?= $row['id'] ?>" class="table--edit">Editar</a></th>
                        <th><a href="eliminar_productor.php?id=<?= $row['id'] ?>" class="table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>