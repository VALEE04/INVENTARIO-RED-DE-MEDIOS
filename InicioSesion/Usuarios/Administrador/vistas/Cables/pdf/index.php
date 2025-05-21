<?php
	include 'plantilla.php';
	require 'conexion.php';
	

	$query = "SELECT ID_CABLE,TIPO_CABLE,CATEGORIA_NOMBRE,CANTIDAD,
	CFECHA_REVISION FROM cables";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
 $pdf->SetFillColor(302,232,232,232);
	$pdf->SetFont('Arial','B',13);

///  parte hecha

$pdf->Cell(10, 8, 'ID', 1, 0, 'C', 0);
$pdf->Cell(50, 8, 'Tipo', 1, 0, 'C', 0);
$pdf->Cell(40, 8, 'Categoria', 1, 0, 'C', 0);
$pdf->Cell(35, 8, 'Cantidad', 1, 0, 'C', 0);
$pdf->Cell(50, 8, 'Fec.', 1, 1, 'C', 0);
// $pdf->Cell(10, 8, 'img.', 1, 1, 'C', 0); muestra en letra el campo de imagen 

	


   
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{	
	

		$pdf->Cell(10, 8,$row['ID_CABLE'], 1, 0, 'C', 0);
		$pdf->Cell(50, 8,$row['TIPO_CABLE'], 1, 0, 'C', 0);
		$pdf->Cell(40, 8,$row['CATEGORIA_NOMBRE'], 1, 0, 'C', 0);
		$pdf->Cell(35, 8,$row['CANTIDAD'], 1, 0, 'C', 0);
		$pdf->Cell(50, 8,$row['CFECHA_REVISION'], 1, 1, 'C', 0);

		//$pdf->Cell(10, 8,$row['imagen_Img'], 1, 1, 'C', 0);  muestra la ruta  de la imagen 
		
	
	}
	$pdf->Output(); 
?>