<?php

include("../../../conexionPDO.php");

$ID_ARTICULOS=$_GET['id'];

$sql="DELETE FROM articulos WHERE ID_ARTICULOS='$ID_ARTICULOS'";
$query=mysqli_query($con,$sql);
if ($query) {
	header("Location: ../listas_articulos.php");
}
