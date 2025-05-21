<?php
include '../conexionPDO.php';

// Sanitizar entradas para evitar SQL Injection
$nombreAlmacenado = mysqli_real_escape_string($con, $_POST['NOMBRE_ALMACENADO']);
$categoriaAlmacenado = mysqli_real_escape_string($con, $_POST['CATEGORIA_NOMBRE']);
$serialAlmacenado = mysqli_real_escape_string($con, $_POST['SERIAL_ALMACENADO']);
$cantidadAlmacenado = isset($_POST['CANTIDAD_ALMACENADO']) ? $_POST['CANTIDAD_ALMACENADO'] : 0;
$observacionAlmacenado = mysqli_real_escape_string($con, $_POST['OBSERV_ALMACENADO']);
$estadoAlmacenado = mysqli_real_escape_string($con, $_POST['ESTADO']);
$nodo = mysqli_real_escape_string($con, $_POST['Nodos']);

// Validar cantidad entre 1 y 100
if ($cantidadAlmacenado < 1 || $cantidadAlmacenado > 100) {
    echo "<script>
        alert('La cantidad debe estar entre 1 y 100.');
        window.location.href='../vistas/Almacenados/registrar_almacenados.php';
    </script>";
    exit();
}

// Verificar si el serial ya existe
if (buscarSerial($serialAlmacenado, $con) == 1) {
    echo "<script>
        alert('Ya se está usando un artículo con este serial, intente nuevamente.');
        window.location.href='../vistas/Almacenados/registrar_almacenados.php';
    </script>";
    exit();
}



// Insertar datos en la base de datos
$sql = "INSERT INTO almacenado (ID_ALMACENADO, NOMBRE_ALMACENADO, CATEGORIA_NOMBRE, SERIAL_ALMACENADO, CANTIDAD_ALMACENADO, OBSERV_ALMACENADO, ESTADO, Nodos) 
        VALUES ('$id', '$nombreAlmacenado', '$categoriaAlmacenado', '$serialAlmacenado', '$cantidadAlmacenado', '$observacionAlmacenado', '$estadoAlmacenado', '$nodo')";

$query = mysqli_query($con, $sql);

if ($query) {
    echo "<script>
        alert('Artículo almacenado correctamente.');
        window.location.href='../vistas/Almacenados/listas_almacenados.php';
    </script>";
}

// Función para verificar si el serial ya existe
function buscarSerial($serial, $con) {
    $sql2 = "SELECT * FROM almacenado WHERE SERIAL_ALMACENADO='$serial'";
    $query2 = mysqli_query($con, $sql2);

    return (mysqli_num_rows($query2) > 0) ? 1 : 0;
}

// Función para verificar si el nombre ya existe
function buscarNombre($nombre, $con) {
    $sql3 = "SELECT * FROM almacenado WHERE NOMBRE_ALMACENADO='$nombre'";
    $query3 = mysqli_query($con, $sql3);

    return (mysqli_num_rows($query3) > 0) ? 1 : 0;
}
?>
