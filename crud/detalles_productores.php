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
        <select name="productor_id">
            <?php
            $con = connection();
            $consulta ="SELECT * FROM productores";
            $ejecutar =mysqli_query($con,$consulta);
            ?>
             <?php foreach($ejecutar as $opciones):?>

                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']." ".$opciones['apellido']?></option>


            <?php endforeach?>
            </select>
            <input type="text" name="biografia" placeholder="Biografia">
          
            <input type="submit" value="Agregar">
        </form>
    </div>

</body>

</html>