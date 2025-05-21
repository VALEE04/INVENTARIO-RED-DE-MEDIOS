<?php
	include 'plantilla.php';
	require 'conexion.php';
	

	$query = "SELECT ID_ENCARGADO,NOMBRE_ENCARGADO,ROL,email,numero_documento,tipo_documento,lugar_sede,telefono
 FROM encargados";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
 $pdf->SetFillColor(302,232,232,232);
	$pdf->SetFont('Arial','B',8);

///  parte hecha

$pdf->Cell(4, 8, 'ID', 1, 0, 'C', 0);
$pdf->Cell(40, 8, 'Nombre', 1, 0, 'C', 0);
$pdf->Cell(25, 8, 'Rol', 1, 0, 'C', 0);
$pdf->Cell(35, 8, 'Email', 1, 0, 'C', 0);
$pdf->Cell(15, 8, 'Num-D', 1, 0, 'C', 0);
$pdf->Cell(35, 8, 'Tipo-D', 1, 0, 'C', 0);
$pdf->Cell(20, 8, 'Lugar', 1, 0, 'C', 0);
$pdf->Cell(20, 8, 'Tel', 1, 1, 'C', 0);
// $pdf->Cell(10, 8, 'img.', 1, 1, 'C', 0); muestra en letra el campo de imagen 

	


   
	
	$pdf->SetFont('Arial','',6);
	
	while($row = $resultado->fetch_assoc())
	{	
	

		$pdf->Cell(4, 8,$row['ID_ENCARGADO'], 1, 0, 'C', 0);
		$pdf->Cell(40, 8,$row['NOMBRE_ENCARGADO'], 1, 0, 'C', 0);
		$pdf->Cell(25, 8,$row['ROL'], 1, 0, 'C', 0);
		$pdf->Cell(35, 8,$row['email'], 1, 0, 'C', 0);
		$pdf->Cell(15, 8,$row['numero_documento'], 1, 0, 'C', 0);
		$pdf->Cell(35, 8,$row['tipo_documento'], 1, 0, 'C', 0);
		$pdf->Cell(20, 8,$row['lugar_sede'], 1, 0, 'C', 0);
		$pdf->Cell(20, 8,$row['telefono'], 1, 1, 'C', 0);
		//$pdf->Cell(10, 8,$row['imagen_Img'], 1, 1, 'C', 0);  muestra la ruta  de la imagen 
		
	
	}
	$pdf->Output(); 
?>