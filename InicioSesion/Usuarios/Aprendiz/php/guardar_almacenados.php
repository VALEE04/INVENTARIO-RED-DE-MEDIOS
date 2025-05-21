<?php
	include '../conexionPDO.php';

	$id = $_POST['ID_ALMACENADO'];
	$nombreAlmacenado = $_POST['NOMBRE_ALMACENADO'];
	$categoriaAlmacenado = $_POST['CATEGORIA_NOMBRE'];
	$serialAlmacenado = $_POST['SERIAL_ALMACENADO'];
	$cantidadAlmacenado = $_POST['CANTIDAD_ALMACENADO'];
	$observacionAlmacenado = $_POST['OBSERV_ALMACENADO'];
	$estadoAlmacenado = $_POST['ESTADO'];
	$fechaAlmacenado = $_POST['GFECHA_REVISION'];
	$nodo=$_POST['Nodos'];

	if (buscarSerial($serialAlmacenado, $con) ==1) {
		echo 2;
	?>
	<script>
			alert('Ya se esta usuando un articulo con este serial, intente nuevamente.');
			window.location.href='../vistas/Almacenados/registrar_almacenados.php';
			</script>
	<?php	
	}elseif (buscarNombre($nombreAlmacenado, $con) ==1) {
		echo 2;
	?>
	<script>
			alert('Ya se esta usuando un articulo con este nombre, intente nuevamente.');
			window.location.href='../vistas/Almacenados/registrar_almacenados.php';
			</script>
	<?php	
	}else{
		$sql="INSERT INTO almacenado VALUES('$id','$nombreAlmacenado','$categoriaAlmacenado','$serialAlmacenado','$cantidadAlmacenado','$observacionAlmacenado','$estadoAlmacenado','$fechaAlmacenado', '$nodo')";
	$query = mysqli_query($con,$sql);

	if ($query) {
		?>
	<script>
			alert('Articulo almacenado correctamente ...');
			window.location.href='../vistas/Almacenados/listas_almacenados.php';
			</script>
	<?php
	}

	}

	
	function buscarSerial($serial, $con){
		$sql2="SELECT * FROM almacenado WHERE SERIAL_ALMACENADO='$serial'" ;
		$query2=mysqli_query($con,$sql2);

		if (mysqli_num_rows($query2) > 0) {
			return 1;
		}else{
			return 0;
		}
	}

	function buscarNombre($nombre, $con){
		$sql3="SELECT * FROM almacenado WHERE NOMBRE_ALMACENADO='$nombre'" ;
		$query3=mysqli_query($con,$sql3);

		if (mysqli_num_rows($query3) > 0) {
			return 1;
		}else{
			return 0;
		}
	}
?>