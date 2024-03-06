<?php

include("conexion.php");
$con = connection();

$id=$_POST["id"];
$productor_id = $_POST['productor_id'];
$biografia = $_POST['biografia'];


$sql="UPDATE detalles_productores SET productor_id='$productor_id', biografia='$biografia' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-detalles_productores.php");
}else{

}

?>