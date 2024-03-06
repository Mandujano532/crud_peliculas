<?php

include("conexion.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM detalles_productores WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-detalles_productores.php");
}else{

}

?>