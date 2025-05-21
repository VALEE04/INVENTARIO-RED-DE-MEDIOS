<?php

include("../../../conexionPDO.php");

$nodos=$_GET['id'];

$sql="DELETE FROM nodo WHERE nodos='$nodos'";
$query=mysqli_query($con,$sql);
if ($query) {
	header("Location: ../lista_nodos.php");
}
