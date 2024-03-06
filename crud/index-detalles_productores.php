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
        <h2>Detalles de productores</h2>
        <br>
        <a href="peliculas.php" class="table--edit">Agregar</a>
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Productor_ID</th>
                    <th>Biografia</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['productor_id'] ?></th>
                        <th><?= $row['biografia'] ?></th>
                        <th><a href="actualizar_dproductores.php?id=<?= $row['id'] ?>" class="table--edit">Editar</a></th>
                        <th><a href="eliminar_dproductores.php?id=<?= $row['id'] ?>" class="table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>