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
        <select name="pelicula_id">
            <?php
            $con = connection();
            $consulta ="SELECT * FROM peliculas";
            $ejecutar =mysqli_query($con,$consulta);
            ?>
             <?php foreach($ejecutar as $opciones):?>

                <option value="<?php echo $opciones['id_p']?>"><?php echo $opciones['titulo']?></option>


            <?php endforeach?>
            </select>

            <select name="usuario_id">
            <?php
            $con = connection();
            $consulta ="SELECT * FROM usuarios";
            $ejecutar =mysqli_query($con,$consulta);
            ?>
             <?php foreach($ejecutar as $opciones):?>

                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']." ".$opciones['apellido']?></option>


            <?php endforeach?>
            </select>
             
            <input type="date" name="fecha_devolucion">
          
            <input type="submit" value="Agregar">
        </form>
    </div>
</body>

</html>