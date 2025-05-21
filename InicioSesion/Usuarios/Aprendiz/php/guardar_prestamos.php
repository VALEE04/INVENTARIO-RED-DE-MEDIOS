<?php 
include '../conexionPDO.php';

$ID_FECHA = $_POST['ID_FECHA'];
$ARTICULO_PRESTAMO=$_POST['NOMBRE_ALMACENADO'];
$FECHA_ENTREGA=$_POST['FECHA_ENTREGA'];
$ESTADO_ENTREGA=$_POST['ESTADO_ENTREGA'];
$FECHA_SALIDA=$_POST['FECHA_SALIDA'];
$ESTADO_SALIDA=$_POST['ESTADO_SALIDA'];
$NOMBRE_ENCARGADO=$_POST['NOMBRE_ENCARGADO'];
$ROL=$_POST['ROL'];
$nodo=$_POST['Nodos'];

if (buscarPrestamo($ARTICULO_PRESTAMO, $con) ==1) {
		echo 2;
	?>
	<script>
			alert('Este articulo ya esta en prestamo, intente nuevamente.');
			window.location.href='../vistas/Prestamos/registrar_prestamos.php';
			</script>
	<?php	
	}else{ 


$sql="INSERT INTO prestamo VALUES('$ID_FECHA','$ARTICULO_PRESTAMO','$FECHA_ENTREGA','$ESTADO_ENTREGA','$FECHA_SALIDA','$ESTADO_SALIDA','$NOMBRE_ENCARGADO','$ROL','$nodo')";
$query=mysqli_query($con,$sql);

if ($query) {
	?>
	<script>
			alert('Articulo prestado correctamente....');
			window.location.href='../vistas/Prestamos/listas_prestamos.php';
			</script>
	<?php
}
}

function buscarPrestamo($prestamo, $con){
		$sql2="SELECT * FROM prestamo WHERE NOMBRE_ALMACENADO='$prestamo'" ;
		$query2=mysqli_query($con,$sql2);

		if (mysqli_num_rows($query2) > 0) {
			return 1;
		}else{
			return 0;
		}
	}
?>