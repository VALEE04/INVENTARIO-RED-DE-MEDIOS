<?php 
include '../conexionPDO.php';

$ID_ARTICULOS= $_POST['ID_ARTICULOS'];
$REFERENCIASERIAL=$_POST['REFERENCIASERIAL'];
$NOMBRE_MARCA=$_POST['NOMBRE_MARCA'];
$CATEGORIA_NOMBRE=$_POST['CATEGORIA_NOMBRE'];
$PLACA=$_POST['PLACA'];
$GUAYA=$_POST['GUAYA'];
$MOUSE=$_POST['MOUSE'];
$MOUSEPAD=$_POST['MOUSEPAD'];
$MEMORIA=$_POST['MEMORIA'];
$LAPIZ=$_POST['LAPIZ'];
$ADAPTADOR_PODER=$_POST['ADAPTADOR_PODER'];
$CABLE_PODER=$_POST['CABLE_PODER'];
$CARGADOR=$_POST['CARGADOR'];
$BATERIA=$_POST['BATERIA'];
$ESTADO=$_POST['ESTADO'];
$MANT_REALIZAR=$_POST['MANT_REALIZAR'];
$OBSERV_ESTADO=$_POST['OBSERV_ESTADO'];
$FECHA_REVISION=$_POST['FECHA_REVISION'];
$NOMBRE_ENCARGADO=$_POST['NOMBRE_ENCARGADO'];
$ROL=$_POST['ROL'];

if (buscarSerial($REFERENCIASERIAL, $con) ==1) {
		echo 2;
	?>
	<script>
			alert('El articulo con este serial ya esta creado, intente nuevamente.');
			window.location.href='../vistas/Articulo/registrar_articulos.php';
			</script>
	<?php	
	}else{ 


$sql="INSERT INTO articulos VALUES('$ID_ARTICULOS','$REFERENCIASERIAL','$NOMBRE_MARCA','$CATEGORIA_NOMBRE','$PLACA','$GUAYA','$MOUSE','$MOUSEPAD','$MEMORIA','$LAPIZ','$ADAPTADOR_PODER','$CABLE_PODER','$CARGADOR','$BATERIA','$ESTADO','$MANT_REALIZAR','$OBSERV_ESTADO','$FECHA_REVISION','$NOMBRE_ENCARGADO','$ROL')";
$query=mysqli_query($con,$sql);

if ($query) {
	?>
	<script>
			alert('Articulo creado correctamente....');
			window.location.href='../vistas/Articulo/listas_articulos.php';
			</script>
	<?php
}else{
	?>
	<script>
			alert('No se pudo crear el articulo, intente nuevamente.');
			window.location.href='../vistas/Articulo/registrar_articulos.php';
			</script>
	<?php
}
}

function buscarSerial($serial, $con){
		$sql2="SELECT * FROM articulos WHERE REFERENCIASERIAL='$serial'" ;
		$query2=mysqli_query($con,$sql2);

		if (mysqli_num_rows($query2) > 0) {
			return 1;
		}else{
			return 0;
		}
	}
?>