<?php

include("../../../conexionPDO.php");

$TIPO_CABLE=$_GET['id'];

$sql="DELETE FROM cables WHERE TIPO_CABLE='$TIPO_CABLE'";
$query=mysqli_query($con,$sql);
if ($query) {
	header("Location: ../listas_cables.php");
}
