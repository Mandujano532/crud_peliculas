
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="CSS/style.css" rel="stylesheet">
    <title>peliculas CRUD</title>
</head>

<body>
    <div class="form">
        <h1>Crear Pelicula</h1>
        <form action="insertar_peliculas.php" method="POST">
            <input type="text" name="titulo" placeholder="Titulo">

          
            <select name="productor_id" class="form-select">
            <?php
            $con = connection();
            $consulta ="SELECT * FROM productores";
            $ejecutar =mysqli_query($con,$consulta);
            ?>
             <?php foreach($ejecutar as $opciones):?>

                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']." ".$opciones['apellido']?></option>


            <?php endforeach?>
            </select>

            <select name="genero_id" class="form-select">
            <?php
            $con = connection();
            $consulta ="SELECT * FROM generos";
            $ejecutar =mysqli_query($con,$consulta);
            ?>
             <?php foreach($ejecutar as $opciones):?>

                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombres']?></option>


            <?php endforeach?>
            </select>

            <input type="number" class="form-control" name="stock" placeholder="Stock">
            <input type="submit" class="btn btn-outline-success" value="Agregar" >
            <button type="button" class="btn btn-outline-danger" onclick="window.location.href='index-peliculas.php'">Cancelar</button>
        </form>
    </div>

</body>

</html>