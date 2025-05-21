<?php
include 'plantilla.php';
require 'conexion.php';

$query = "SELECT ID_ARTICULOS,REFERENCIASERIAL,NOMBRE_MARCA,CATEGORIA_NOMBRE,PLACA,GUAYA,MOUSE,MOUSEPAD,MEMORIA,
LAPIZ,ADAPTADOR_PODER,CABLE_PODER,CARGADOR,BATERIA,ESTADO,MANT_REALIZAR,OBSERV_ESTADO,FECHA_REVISION,
NOMBRE_ENCARGADO,ROL FROM articulos";

$resultado = $mysqli->query($query);

// Verifica si la consulta devolvió resultados
if (!$resultado) {
    die("Error en la consulta: " . $mysqli->error);
}

if ($resultado->num_rows == 0) {
    die("No hay datos para generar el PDF.");
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',5);

// Encabezados
$pdf->Cell(2, 8, 'ID', 1, 0, 'C', 0);
$pdf->Cell(10, 8, 'Serial', 1, 0, 'C', 0);
$pdf->Cell(23, 8, 'Marca', 1, 0, 'C', 0);
$pdf->Cell(9, 8, 'Categoria', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'P', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'G', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'M', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'Mpad', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'Mem', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'L', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'Ad.P', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'Cab.P', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'Car', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'B', 1, 0, 'C', 0);
$pdf->Cell(5, 8, 'E', 1, 0, 'C', 0);
$pdf->Cell(6, 8, 'Man.R', 1, 0, 'C', 0);
$pdf->Cell(30, 8, 'Ob.E', 1, 0, 'C', 0);
$pdf->Cell(10, 8, 'Fec.', 1, 0, 'C', 0);
$pdf->Cell(40, 8, 'Nom.E', 1, 0, 'C', 0);
$pdf->Cell(10, 8, 'Rol', 1, 1, 'C', 0);

$pdf->SetFont('Arial','',3);

// Llenar la tabla con los datos
while($row = $resultado->fetch_assoc()) {	
    $pdf->Cell(2, 8, $row['ID_ARTICULOS'], 1, 0, 'C', 0);
    $pdf->Cell(10, 8, $row['REFERENCIASERIAL'], 1, 0, 'C', 0);
    $pdf->Cell(23, 8, $row['NOMBRE_MARCA'], 1, 0, 'C', 0);
    $pdf->Cell(9, 8, $row['CATEGORIA_NOMBRE'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['PLACA'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['GUAYA'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['MOUSE'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['MOUSEPAD'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['MEMORIA'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['LAPIZ'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['ADAPTADOR_PODER'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['CABLE_PODER'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['CARGADOR'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['BATERIA'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['ESTADO'], 1, 0, 'C', 0);
    $pdf->Cell(6, 8, $row['MANT_REALIZAR'], 1, 0, 'C', 0);
    $pdf->Cell(30, 8, $row['OBSERV_ESTADO'], 1, 0, 'C', 0);
    $pdf->Cell(10, 8, $row['FECHA_REVISION'], 1, 0, 'C', 0);
    $pdf->Cell(40, 8, $row['NOMBRE_ENCARGADO'], 1, 0, 'C', 0);
    $pdf->Cell(10, 8, $row['ROL'], 1, 1, 'C', 0);
}

$pdf->Output();
?>
