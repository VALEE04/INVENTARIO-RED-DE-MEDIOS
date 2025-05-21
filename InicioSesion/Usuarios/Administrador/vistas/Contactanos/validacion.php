<?php

	//Llamada a los campos

	$encargado = $_POST['NOMBRE_ENCARGADO'];
	$articulo =$_POST['NOMBRE_ALMACENADO'];
	$asunto = $_POST['asunto'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	//Datos para el correo

	$destinatario = "santiagocas2316@gmail.com";
	$asuntoC = "Enviado desde inventario";

	$carta = "De: $encargado \n";
	$carta = "De: $articulo \n";
	$carta = "Correo: $correo \n";
	$carta = "De: $asunto \n";
	$carta = "De: $mensaje ";

	//Enviar mensaje

	mail($destinatario, $asuntoC, $carta);
	echo "<script>alert('Correo enviado exitosamente')</script>";
	echo "<script> setTimeout(\"location.href`='index.php'\",1000)</script>";
?>