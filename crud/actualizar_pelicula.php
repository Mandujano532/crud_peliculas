<?php 
    include("conexion.php");
    $con=connection();

    $id_p=$_GET['id'];

    $sql="SELECT * FROM peliculas p INNER JOIN generos g  ON p.genero_id = g.id INNER JOIN productores r  ON p.productor_id = r.id WHERE id_p='$id_p'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);

    function obtenerNombresProductores() {
        global $con; 
    
        $sql = "SELECT id, nombre, apellido FROM productores";
        $resultado = mysqli_query($con, $sql);
    
        $productores = array();

        while ($row = mysqli_fetch_array($resultado)) {
            $productores[$row['id']] = $row['nombre']." ".$row['apellido'];
        }
        return $productores;
    }

    function obtenerNombresGenero() {
        global $con; 
    
        $sql = "SELECT id, nombres FROM generos";
        $resultado = mysqli_query($con, $sql);
    
        $generos = array();

        while ($row = mysqli_fetch_array($resultado)) {
            $generos[$row['id']] = $row['nombres'];
        }
        return $generos;
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Editar usuarios</title>
        
    </head>
    <body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <form action="editar_pelicula.php" method="POST">
            <h2>Peliculas Registradas</h2>
            <input type="hidden" name="id_p" value="<?= $row['id_p']?>">
            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" placeholder="Titulo" value="<?= $row['titulo']?> ">
            
            <label for="exampleFormControlInput1" class="form-label">Productor</label>
             <select class="form-select"   name="productor_id" required>
               <?php
               $productores = obtenerNombresProductores();
               foreach ($productores as $id => $nombre) {
               $selected = ($row['productor_id'] == $id) ? 'selected' : '';
               echo "<option value='{$id}' $selected>{$nombre}</option>";
               }
               ?>
               </select>
               <label for="exampleFormControlInput1" class="form-label">Genero</label>

                <select class="form-select" name="genero_id" required>
                <?php
                $generos = obtenerNombresGenero();
                foreach ($generos as $id => $nombre) {
                $selected = ($row['genero_id'] == $id) ? 'selected' : '';
                echo "<option value='{$id}' $selected>{$nombre}</option>";
                }
                ?>
                </select>
                <label for="exampleFormControlInput1" class="form-label">Stock</label>
              <input type="number" name="stock" placeholder="Stock" class="form-control" value="<?= $row['stock']?>">

              <input type="submit" value="Actualizar" class="btn btn-outline-success">
              <button type="button" class="btn btn-outline-danger" onclick="window.location.href='index-peliculas.php'">Cancelar</button>
            </form>
            
     
</html>