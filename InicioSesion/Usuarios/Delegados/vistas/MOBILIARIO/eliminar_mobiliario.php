<?php

include("Conexion.php");

$imagen_ID = $_GET['id'];

// Selecciona imagen a borrar
$stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM mobiliario WHERE Imagen_ID = :uid');
$stmt_select->execute([':uid' => $imagen_ID]);
$imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);

// Ruta de la imagen
if (!empty($imgRow['Imagen_Img']) && file_exists("imagenes/" . $imgRow['Imagen_Img'])) {
    unlink("imagenes/" . $imgRow['Imagen_Img']);
}

// Consulta para eliminar el registro de la base de datos
$sql = "DELETE FROM mobiliario WHERE Imagen_ID = :uid";
$stmt_delete = $DB_con->prepare($sql);
$stmt_delete->execute([':uid' => $imagen_ID]);

if ($stmt_delete) {
    header("Location: index.php");
    exit; // Asegúrate de detener la ejecución después de redirigir
} else {
    echo "Error al eliminar el registro.";
}
?>