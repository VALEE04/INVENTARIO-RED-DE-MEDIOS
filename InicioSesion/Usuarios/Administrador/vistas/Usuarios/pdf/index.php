<?php
	include 'plantilla.php';
	include("Conexion.php");
	

	$query = "SELECT idUsuario,nombreUsuario,apellidoUsuario,ID_CARGO,emailUsuario,usuarioUsuario FROM usuarios";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
 $pdf->SetFillColor(302,232,232,232);
	$pdf->SetFont('Arial','B',13);

///  parte hecha

$pdf->Cell(10, 8, 'ID', 1, 0, 'C', 0);
$pdf->Cell(30, 8, 'Nombres', 1, 0, 'C', 0);
$pdf->Cell(30, 8, 'Apellidos', 1, 0, 'C', 0);
$pdf->Cell(30, 8, 'Cargo', 1, 0, 'C', 0);
$pdf->Cell(50, 8, 'Correo', 1, 0, 'C', 0);
$pdf->Cell(25, 8, 'Usuarios.', 1, 1, 'C', 0);
// $pdf->Cell(10, 8, 'img.', 1, 1, 'C', 0); muestra en letra el campo de imagen 

	


   
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{	
	

		$pdf->Cell(10, 8,$row['idUsuario'], 1, 0, 'C', 0);
		$pdf->Cell(30, 8,$row['nombreUsuario'], 1, 0, 'C', 0);
		$pdf->Cell(30, 8,$row['apellidoUsuario'], 1, 0, 'C', 0);
		$pdf->Cell(30, 8,$row['ID_CARGO'], 1, 0, 'C', 0);
		$pdf->Cell(50, 8,$row['emailUsuario'], 1, 0, 'C', 0);
		$pdf->Cell(25, 8,$row['usuarioUsuario'], 1, 1, 'C', 0);
		//$pdf->Cell(10, 8,$row['imagen_Img'], 1, 1, 'C', 0);  muestra la ruta  de la imagen 
		
	
	}
	$pdf->Output(); 
?>