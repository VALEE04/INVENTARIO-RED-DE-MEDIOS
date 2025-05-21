<?php  
include '../conexionPDO.php';

$ID_ENCARGADO=$_POST['ID_ENCARGADO'];
$NOMBRE_ENCARGADO=$_POST['NOMBRE_ENCARGADO'];
$ROL=$_POST['ROL'];
$email=$_POST['email'];
$numero_documento=$_POST['numero_documento'];
$tipo_documento=$_POST['tipo_documento'];
$lugar_sede=$_POST['lugar_sede'];
$telefono = preg_replace('/[^0-9]/', '', $_POST['telefono']); // Elimina cualquier letra o carácter especial
if (!preg_match('/^[0-9]{10}$/', $telefono)) {
    echo "<script>
            alert('El número de teléfono debe contener solo 10 dígitos NO acepta letras.');
            window.location.href='../vistas/Encargados/registrar_encargados.php';
          </script>";
    exit();
}

if (buscarCorreo($email, $con) ==1) {
	echo 2;
	?>
	<script>
			alert('El correo ya esta creado, intente nuevamente.');
			window.location.href='../vistas/Encargados/registrar_encargados.php';
			</script>
	<?php
}elseif (buscarDocu($numero_documento, $con) ==1) {
	echo 2;
	?>
	<script>
			alert('El numero de documento ya esta creado, intente nuevamente.');
			window.location.href='../vistas/Encargados/registrar_encargados.php';
			</script>
	<?php
}elseif (buscarTelefono($telefono, $con) ==1) {
	echo 2;
	?>
	<script>
			alert('El numero de telefono ya esta creado, intente nuevamente.');
			window.location.href='../vistas/Encargados/registrar_encargados.php';
			</script>
	<?php
}else{
$sql="INSERT INTO encargados VALUES('$ID_ENCARGADO','$NOMBRE_ENCARGADO','$ROL','$email','$numero_documento','$tipo_documento','$lugar_sede','$telefono')";
$query=mysqli_query($con,$sql);
if ($query) {
	?>
	<script>
			alert('Encargado creado correctamente....');
			window.location.href='../vistas/Encargados/listas_encargados.php';
			</script>
	<?php
}
}

	function buscarCorreo($correo, $con){
		$sql2="SELECT * FROM encargados WHERE email='$correo'" ;
		$query2=mysqli_query($con,$sql2);

		if (mysqli_num_rows($query2) > 0) {
			return 1;
		}else{
			return 0;
		}
	}
	function buscarDocu($documento, $con){
		$sql2="SELECT * FROM encargados WHERE numero_documento='$documento'" ;
		$query2=mysqli_query($con,$sql2);

		if (mysqli_num_rows($query2) > 0) {
			return 1;
		}else{
			return 0;
		}
	}
	function buscarTelefono($telefono, $con){
		$sql2="SELECT * FROM encargados WHERE telefono='$telefono'" ;
		$query2=mysqli_query($con,$sql2);

		if (mysqli_num_rows($query2) > 0) {
			return 1;
		}else{
			return 0;
		}
	}
?>