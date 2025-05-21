<?php

include("../../../conexionPDO.php");

$nombreUsuario=$_GET['id'];

$sql="DELETE FROM usuarios WHERE nombreUsuario='$nombreUsuario'";
$query=mysqli_query($con,$sql);
if ($query) {
	header("Location: ../listas.php");
}
