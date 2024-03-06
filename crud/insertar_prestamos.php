<?php
include("conexion.php");
$con = connection();

$id = null;
$pelicula_id = $_POST['pelicula_id'];
$usuario_id = $_POST['usuario_id'];
$fecha_prestamo = date("Y-m-d");
$fecha_devolucion = $_POST['fecha_devolucion'];


$sql = "INSERT INTO prestamos VALUES('$id','$pelicula_id','$usuario_id','$fecha_prestamo','$fecha_devolucion')";
$query = mysqli_query($con, $sql);

if($query){

    Header("Location: index-prestamos.php");

}else{

}

?>