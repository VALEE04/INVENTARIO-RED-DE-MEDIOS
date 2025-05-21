<?php
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="reporte.pdf"');

ob_start(); // Inicia el buffer de salida

include 'plantilla.php';
require 'conexion.php';

$query = "SELECT imagen_ID, descripcion, categoria_nombre, cantidad, estado, observaciones, asignado_a, imagen_Img FROM mobiliario";
$resultado = $mysqli->query($query);

$pdf = new PDF("L"); // 'L' para horizontal
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(302, 232, 232, 232);
$pdf->SetFont('Arial', 'B', 13);

// Encabezados de la tabla
$pdf->Cell(10, 8, 'ID', 1, 0, 'C');
$pdf->Cell(50, 8, 'Descripcion', 1, 0, 'C');
$pdf->Cell(30, 8, 'Categoria', 1, 0, 'C');
$pdf->Cell(20, 8, 'Cantidad', 1, 0, 'C');
$pdf->Cell(30, 8, 'Estado', 1, 0, 'C');
$pdf->Cell(35, 8, 'Asignado a', 1, 0, 'C');
$pdf->Cell(60, 8, 'Observaciones', 1, 0, 'C');
$pdf->Cell(40, 8, 'Imagen', 1, 1, 'C');

$pdf->SetFont('Arial', '', 8);

// Recorremos los datos
while ($row = $resultado->fetch_assoc()) {
    $imagePath = $_SERVER['DOCUMENT_ROOT'] . '/Inventario/Inventario/InicioSesion/Usuarios/Delegados/vistas/MOBILIARIO/imagenes/' . $row['imagen_Img'];
    if (!file_exists($imagePath)) {
        error_log("La imagen no existe: " . $imagePath);
    }
    $hasImage = !empty($row['imagen_Img']) && file_exists($imagePath);

    // Tamaño de la imagen
    $imgWidth = 20; // Ancho de la imagen
    $imgHeight = 20; // Alto de la imagen

    // Altura de la fila (basada en la imagen o el contenido más alto)
    $cellHeight = max($imgHeight + 10, 20); // Ajusta el valor mínimo según sea necesario

    // ID
    $pdf->Cell(10, $cellHeight, $row['imagen_ID'], 1, 0, 'C');

    // Descripción
    $pdf->Cell(50, $cellHeight, $row['descripcion'], 1, 0, 'L');

    // Categoría
    $pdf->Cell(30, $cellHeight, $row['categoria_nombre'], 1, 0, 'C');

    // Cantidad
    $pdf->Cell(20, $cellHeight, $row['cantidad'], 1, 0, 'C');

    // Estado
    $pdf->Cell(30, $cellHeight, $row['estado'], 1, 0, 'C');

    // Asignado a
    $pdf->Cell(35, $cellHeight, $row['asignado_a'], 1, 0, 'C');

    // Observaciones
    $pdf->Cell(60, $cellHeight, $row['observaciones'], 1, 0, 'L');

    // Imagen
    if ($hasImage) {
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->Cell(40, $cellHeight, '', 1, 0, 'C'); // Espacio reservado para la imagen
        if (file_exists($imagePath)) {
            $pdf->Image($imagePath, $x + 5, $y + ($cellHeight - $imgHeight) / 2, $imgWidth, $imgHeight);
        } else {
            $pdf->Cell(40, $cellHeight, 'No encontrada', 1, 0, 'C');
        }
    } else {
        $pdf->Cell(40, $cellHeight, 'Sin imagen', 1, 0, 'C');
    }

    $pdf->Ln(); // Salto de línea para la siguiente fila
}

ob_end_clean(); // Limpia el buffer de salida

$pdf->Output(); // Genera el PDF
?>
