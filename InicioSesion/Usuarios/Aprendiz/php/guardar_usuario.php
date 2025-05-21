<?php
include '../conexionPDO.php';

$idUsuario=$_POST['idUsuario'];
$nombreUsuario=$_POST['nombreUsuario'];
$apellidoUsuario=$_POST['apellidoUsuario'];
$ID_CARGO=$_POST['ID_CARGO'];
$emailUsuario=$_POST['emailUsuario'];
$usuarioUsuario=$_POST['usuarioUsuario'];
$usuarioClave=$_POST['usuarioClave'];
$usuarioClave2=$_POST['usuarioClave2'];

if (buscarCorreo($emailUsuario, $con) ==1) {
	echo 2;
	?>
	<script>
			alert('El correo ya esta creado, intente nuevamente.');
			window.location.href='../vistas/Usuarios/registrar.php';
			</script>
	<?php
}elseif(buscarUsuarios($usuarioUsuario,  $con) ==1) {
	echo 2;
	?>
	<script>
			alert('El usuario ya esta creado, intente nuevamente.');
			window.location.href='../vistas/Usuarios/registrar.php';
			</script>
	<?php
}else{
	if ($usuarioClave == $usuarioClave2) {
	//Crear Dato
	$sql="INSERT INTO usuarios VALUES('$idUsuario','$nombreUsuario','$apellidoUsuario','$ID_CARGO','$emailUsuario','$usuarioUsuario','$usuarioClave','$usuarioClave2')";
$query=mysqli_query($con,$sql);

if ($query) {
	?>
	<script>
			alert('Usuario creado correctamente ...');
			window.location.href='../vistas/Usuarios/listas.php';
			</script>
	<?php
	
}
}else{

	?>
	<script>
			alert('Las contraseñas no coinciden, rellene de nuevo el formulario');
			window.location.href='../vistas/Usuarios/registrar.php';
			</script>
	<?php
	
}
}

	function buscarUsuarios($usuario, $con){
		$sql2="SELECT * FROM usuarios WHERE usuarioUsuario='$usuario'" ;
		$query2=mysqli_query($con,$sql2);

		if (mysqli_num_rows($query2) > 0) {
			return 1;
		}else{
			return 0;
		}
	}

	function buscarCorreo($correo, $con){
		$sql2="SELECT * FROM usuarios WHERE emailUsuario='$correo'" ;
		$query2=mysqli_query($con,$sql2);

		if (mysqli_num_rows($query2) > 0) {
			return 1;
		}else{
			return 0;
		}
	}
?>