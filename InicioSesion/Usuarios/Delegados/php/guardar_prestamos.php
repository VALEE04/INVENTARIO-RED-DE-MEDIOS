<?php 
include '../conexionPDO.php';

$ID_FECHA = $_POST['ID_FECHA'];
$ID_ALMACENADO = $_POST['ID_ALMACENADO']; 
$FECHA_ENTREGA = $_POST['FECHA_ENTREGA'];
$ESTADO_ENTREGA = $_POST['ESTADO_ENTREGA'];
$FECHA_SALIDA = $_POST['FECHA_SALIDA'];
$ESTADO_SALIDA = $_POST['ESTADO_SALIDA'];
$NOMBRE_ENCARGADO = $_POST['NOMBRE_ENCARGADO'];
$ROL = $_POST['ROL'];
$nodo = $_POST['Nodos'];

// ✅ BUSCAR EL NOMBRE DEL ARTÍCULO EN LA TABLA ALMACENADO
$buscarArticuloSQL = "SELECT NOMBRE_ALMACENADO FROM almacenado WHERE ID_ALMACENADO = '$ID_ALMACENADO'";
$buscarArticuloQuery = mysqli_query($con, $buscarArticuloSQL);
$ARTICULO_PRESTAMO = '';

if ($fila = mysqli_fetch_assoc($buscarArticuloQuery)) {
    $ARTICULO_PRESTAMO = $fila['NOMBRE_ALMACENADO']; // Se obtiene el nombre correcto
} else {
    die("Error: No se encontró el artículo con ID_ALMACENADO: $ID_ALMACENADO");
}

// ✅ Verificar si el artículo ya está en préstamo
if (buscarPrestamo($ARTICULO_PRESTAMO, $con) == 1) {
    echo 2;
} else { 
    // ✅ Insertar préstamo en la base de datos
    $sql = "INSERT INTO prestamo 
    (ID_FECHA, ID_ALMACENADO, NOMBRE_ALMACENADO, FECHA_ENTREGA, ESTADO_ENTREGA, FECHA_SALIDA, ESTADO_SALIDA, NOMBRE_ENCARGADO, ROL, nodo) 
    VALUES 
    ('$ID_FECHA', '$ID_ALMACENADO', '$ARTICULO_PRESTAMO', '$FECHA_ENTREGA', '$ESTADO_ENTREGA', '$FECHA_SALIDA', '$ESTADO_SALIDA', '$NOMBRE_ENCARGADO', '$ROL', '$nodo')";

    $query = mysqli_query($con, $sql);
    
    if (!$query) {
        die("Error en la consulta: " . mysqli_error($con)); // ✅ Mostrar el error real
    }

    ?>
    <script>
        alert('Artículo prestado correctamente.');
        window.location.href = '../vistas/Prestamos/listas_prestamos.php';
    </script>
    <?php
}

function buscarPrestamo($prestamo, $con) {
    $sql2 = "SELECT * FROM prestamo WHERE NOMBRE_ALMACENADO='$prestamo'";
    $query2 = mysqli_query($con, $sql2);
    return mysqli_num_rows($query2) > 0 ? 1 : 0;
}
?>
