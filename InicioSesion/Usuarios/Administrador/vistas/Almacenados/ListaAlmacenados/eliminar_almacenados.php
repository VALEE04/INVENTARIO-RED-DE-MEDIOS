<?php

include("../../../conexionPDO.php");

$id=$_GET['id'];

$sql="DELETE FROM almacenado WHERE ID_ALMACENADO='$id'";
$query=mysqli_query($con,$sql);
if ($query) {
	header("Location: ../listas_almacenados.php");
}
