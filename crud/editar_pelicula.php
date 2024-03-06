<?php

include("conexion.php");
$con = connection();

$id=$_POST["id"];
$titulo = $_POST['titulo'];
$productor = $_POST['productor_id'];
$genero = $_POST['genero_id'];
$stock = $_POST['stock'];

$sql="UPDATE peliculas SET titulo='$titulo', productor_id='$productor', genero_id='$genero', stock='$stock' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-peliculas.php");
}else{

}

?>