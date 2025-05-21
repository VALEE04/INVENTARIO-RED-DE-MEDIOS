<?php
	include 'plantilla.php';
	require 'conexion.php';
	

	$query = "SELECT ID_FECHA,NOMBRE_ALMACENADO,FECHA_ENTREGA,ESTADO_ENTREGA,FECHA_SALIDA,
	ESTADO_SALIDA,NOMBRE_ENCARGADO,ROL
 FROM prestamo";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
 $pdf->SetFillColor(302,232,232,232);
	$pdf->SetFont('Arial','B',8);

///  parte hecha

$pdf->Cell(4, 8, 'ID', 1, 0, 'C', 0);
$pdf->Cell(40, 8, 'Nombre', 1, 0, 'C', 0);
$pdf->Cell(20, 8, 'Fecha entrega', 1, 0, 'C', 0);
$pdf->Cell(30, 8, 'Estado En', 1, 0, 'C', 0);
$pdf->Cell(20, 8, 'Fecha salida', 1, 0, 'C', 0);
$pdf->Cell(35, 8, 'Estado Sal', 1, 0, 'C', 0);
$pdf->Cell(30, 8, 'Nombre encargado', 1, 0, 'C', 0);
$pdf->Cell(20, 8, 'Rol', 1, 1, 'C', 0);
// $pdf->Cell(10, 8, 'img.', 1, 1, 'C', 0); muestra en letra el campo de imagen 

	


   
	
	$pdf->SetFont('Arial','',6);
	
	while($row = $resultado->fetch_assoc())
	{	
	

		$pdf->Cell(4, 8,$row['ID_FECHA'], 1, 0, 'C', 0);
		$pdf->Cell(40, 8,$row['NOMBRE_ALMACENADO'], 1, 0, 'C', 0);
		$pdf->Cell(20, 8,$row['FECHA_ENTREGA'], 1, 0, 'C', 0);
		$pdf->Cell(30, 8,$row['ESTADO_ENTREGA'], 1, 0, 'C', 0);
		$pdf->Cell(20, 8,$row['FECHA_SALIDA'], 1, 0, 'C', 0);
		$pdf->Cell(35, 8,$row['ESTADO_SALIDA'], 1, 0, 'C', 0);
		$pdf->Cell(30, 8,$row['NOMBRE_ENCARGADO'], 1, 0, 'C', 0);
		$pdf->Cell(20, 8,$row['ROL'], 1, 1, 'C', 0);
		//$pdf->Cell(10, 8,$row['imagen_Img'], 1, 1, 'C', 0);  muestra la ruta  de la imagen 
		
	
	}
	$pdf->Output(); 
?>