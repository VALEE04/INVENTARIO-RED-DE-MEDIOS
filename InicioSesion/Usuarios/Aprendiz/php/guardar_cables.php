<?php
	include '../conexionPDO.php';

	$id = $_POST['ID_CABLE'];
	$tipo_cable = $_POST['TIPO_CABLE'];
	$categoria_cable = $_POST['CATEGORIA_NOMBRE'];
	$cantidad_cable = $_POST['CANTIDAD'];
	$fecha_revisionc = $_POST['CFECHA_REVISION'];

	if (buscarCable($tipo_cable, $con) ==1) {
		echo 2;
	?>
	<script>
			alert('Ya hay un cable con este nombre, intente nuevamente.');
			window.location.href='../vistas/Cables/registrar_cables.php';
			</script>
	<?php	
	}else{

	$sql="INSERT INTO cables VALUES('$id','$tipo_cable','$categoria_cable','$cantidad_cable','$fecha_revisionc')";
	$query = mysqli_query($con,$sql);

	if ($query) {
		?>
	<script>
			alert('Tipo de cable creado correctamente....');
			window.location.href='../vistas/Cables/listas_cables.php';
			</script>
	<?php	
	}
	}

	function buscarCable($cable, $con){
		$sql2="SELECT * FROM cables WHERE TIPO_CABLE='$cable'" ;
		$query2=mysqli_query($con,$sql2);

		if (mysqli_num_rows($query2) > 0) {
			return 1;
		}else{
			return 0;
		}
	}
?>