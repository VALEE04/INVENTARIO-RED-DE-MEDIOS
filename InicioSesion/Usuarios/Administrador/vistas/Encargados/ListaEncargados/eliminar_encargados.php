<?php

include("../../../conexionPDO.php");

$ID_ENCARGADO=$_GET['id'];

$sql="DELETE FROM encargados WHERE ID_ENCARGADO='$ID_ENCARGADO'";
$query=mysqli_query($con,$sql);
if ($query) {
	header("Location: ../listas_encargados.php");
}
