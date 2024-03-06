<?php
include("conexion.php");
$con = connection();

$id = null;
$productor_id = $_POST['productor_id'];
$biografia = $_POST['biografia'];


$sql = "INSERT INTO detalles_productores VALUES('$id','$productor_id','$biografia')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-detalles_productores.php");
}else{

}

?>