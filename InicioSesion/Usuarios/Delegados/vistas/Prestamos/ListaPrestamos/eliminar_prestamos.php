<?php

include("../../../conexionPDO.php");

$ID_FECHA=$_GET['id'];

$sql="DELETE FROM prestamo WHERE ID_FECHA='$ID_FECHA'";
$query=mysqli_query($con,$sql);
if ($query) {
	header("Location: ../listas_prestamos.php");
}
