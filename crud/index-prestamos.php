<?php
include("conexion.php");
$con = connection();

$sql = "SELECT * FROM prestamos p INNER JOIN peliculas r  ON p.pelicula_id = r.id_p INNER JOIN usuarios u ON p.usuario_id = u.id";
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
    <div class="table">
        <h2>Prestamos Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th><a href="index.php" >Volver</a></th>
                    <th><a href="prestamos.php" >Agregar</a></th>
                </tr>
            </thead>
        <table>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>pelicula_id</th>
                    <th>usuario_id</th>
                    <th>Fecha_prestamo</th>
                    <th>fecha_devolucion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_pr'] ?></a></th>
                        <th><a href="show_prestamos.php?id=<?= $row['id_pr'] ?>"><?= $row['titulo'] ?></th>
                        <th><?= $row['nombre']." ".$row['apellido'] ?></th>
                        <th><?= $row['fecha_prestamo'] ?></th>
                        <th><?= $row['fecha_devolucion'] ?></th>
                        
                        <th><a href="actualizar_prestamos.php?id=<?= $row['id_pr'] ?>" class="table--edit">Editar</a></th>
                        <th><a href="eliminar_prestamos.php?id=<?= $row['id_pr'] ?>" class="table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>