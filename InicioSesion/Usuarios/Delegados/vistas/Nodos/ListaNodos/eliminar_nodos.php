<?php

include("../../../conexionPDO.php");

$nodos = $_GET['id'];

// Verificar si hay dependencias en la tabla almacenado
$sql_check_dependencies = "SELECT COUNT(*) AS count FROM almacenado WHERE nodos = '$nodos'";
$result = mysqli_query($con, $sql_check_dependencies);
$row = mysqli_fetch_assoc($result);

if ($row['count'] > 0) {
    // Si hay dependencias, redirigir con un mensaje de error
    echo "<script>
        alert('No se puede eliminar el nodo porque tiene registros relacionados en la tabla almacenado.');
        window.location.href = '../lista_nodos.php';
    </script>";
} else {
    // Si no hay dependencias, proceder con la eliminación
    $sql_delete_nodo = "DELETE FROM nodo WHERE nodos = '$nodos'";
    $query = mysqli_query($con, $sql_delete_nodo);

    if ($query) {
        echo "<script>
            alert('Nodo eliminado correctamente.');
            window.location.href = '../lista_nodos.php';
        </script>";
    } else {
        echo "<script>
            alert('Error al eliminar el nodo: " . mysqli_error($con) . "');
            window.location.href = '../lista_nodos.php';
        </script>";
    }
}
?>
