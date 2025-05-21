<?php

include("Conexion.php");

$imagen_ID=$_GET['id'];

$sql="DELETE FROM mobiliario WHERE 	imagen_ID='$imagen_ID'";
$query=mysqli_query($con,$sql);
if ($query) {
	header("Location:index.php");
}