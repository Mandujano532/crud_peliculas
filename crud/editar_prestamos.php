<?php

include("conexion.php");
$con = connection();

$id_pr=$_POST["id_pr"];
$pelicula_id = $_POST['pelicula_id'];
$usuario_id = $_POST['usuario_id'];
$fecha_prestamo = date("Y-m-d");
$fecha_devolucion = $_POST['fecha_devolucion'];

$sql="UPDATE prestamos SET pelicula_id='$pelicula_id', usuario_id='$usuario_id', fecha_prestamo='$fecha_prestamo', fecha_devolucion='$fecha_devolucion' WHERE id_pr='$id_pr'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-prestamos.php");
}else{

}

?>