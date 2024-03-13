<?php

include("conexion.php");
$con = connection();

$id_pr=$_GET["id_pr"];

$sql="DELETE FROM prestamos WHERE id_pr='$id_pr'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-prestamos.php");
}else{

}

?>