<?php
include 'plantilla.php';
require 'conexion.php';

// Verificar si se recibió el nodo como parámetro
$nodo_filtrado = isset($_GET['nodo']) ? urldecode($_GET['nodo']) : '';

// Armar consulta SQL con o sin filtro
if (!empty($nodo_filtrado)) {
    // Usar sentencia preparada para evitar inyección SQL
    $stmt = $mysqli->prepare("SELECT ID_ALMACENADO, NOMBRE_ALMACENADO, CATEGORIA_NOMBRE, SERIAL_ALMACENADO,
        CANTIDAD_ALMACENADO, OBSERV_ALMACENADO, ESTADO, nodos FROM almacenado WHERE nodos = ?");
    $stmt->bind_param("s", $nodo_filtrado);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else {
    // Si no se especifica nodo, mostrar todos los registros
    $query = "SELECT ID_ALMACENADO, NOMBRE_ALMACENADO, CATEGORIA_NOMBRE, SERIAL_ALMACENADO,
        CANTIDAD_ALMACENADO, OBSERV_ALMACENADO, ESTADO, nodos FROM almacenado";
    $resultado = $mysqli->query($query);
}

$pdf = new PDF("L");
$pdf->SetMargins(50, 10, 40);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(230, 230, 230);
$pdf->SetFont('Arial', 'B', 7);

// Encabezados
$pdf->Cell(6, 8, 'ID', 1, 0, 'C', true);
$pdf->Cell(30, 8, 'Nombre', 1, 0, 'C', true);
$pdf->Cell(30, 8, 'Categoria', 1, 0, 'C', true);
$pdf->Cell(25, 8, 'Nodo o Persona', 1, 0, 'C', true);
$pdf->Cell(20, 8, 'Serial', 1, 0, 'C', true);
$pdf->Cell(15, 8, 'Cantidad', 1, 0, 'C', true);
$pdf->Cell(60, 8, 'Observaciones', 1, 0, 'C', true);
$pdf->Cell(18, 8, 'Estado', 1, 1, 'C', true);

$pdf->SetFont('Arial', '', 6);

// Contenido
while ($row = $resultado->fetch_assoc()) {
    $x = $pdf->GetX();
    $y = $pdf->GetY();

    $pdf->Cell(6, 8, $row['ID_ALMACENADO'], 0, 0, 'C');
    $pdf->Cell(30, 8, $row['NOMBRE_ALMACENADO'], 0, 0, 'C');
    $pdf->Cell(30, 8, $row['CATEGORIA_NOMBRE'], 0, 0, 'C');
    $pdf->Cell(25, 8, $row['nodos'], 0, 0, 'C');
    $pdf->Cell(20, 8, $row['SERIAL_ALMACENADO'], 0, 0, 'C');
    $pdf->Cell(15, 8, $row['CANTIDAD_ALMACENADO'], 0, 0, 'C');

    $x_obs = $pdf->GetX();
    $y_obs = $pdf->GetY();
    $pdf->MultiCell(60, 8, $row['OBSERV_ALMACENADO'], 0, 'C');
    $y_after = $pdf->GetY();
    $height = $y_after - $y;

    $pdf->SetXY($x_obs + 60, $y);
    $pdf->Cell(18, $height, $row['ESTADO'], 0, 0, 'C');

    $pdf->SetXY($x, $y);
    $pdf->Cell(6, $height, '', 1);
    $pdf->Cell(30, $height, '', 1);
    $pdf->Cell(30, $height, '', 1);
    $pdf->Cell(25, $height, '', 1);
    $pdf->Cell(20, $height, '', 1);
    $pdf->Cell(15, $height, '', 1);
    $pdf->Cell(60, $height, '', 1);
    $pdf->Cell(18, $height, '', 1);

    $pdf->SetY($y + $height);
}

$pdf->Output();
?>
