<?php
include '../conexionPDO.php'; // Asegúrate de que $con está definido aquí

// Validar que los datos fueron enviados
if (isset($_POST['TIPO_CABLE'], $_POST['CATEGORIA_NOMBRE'], $_POST['CANTIDAD'])) {
    
    $tipo_cable = mysqli_real_escape_string($con, $_POST['TIPO_CABLE']);
    $categoria_cable = mysqli_real_escape_string($con, $_POST['CATEGORIA_NOMBRE']);
    $cantidad_cable = (int)$_POST['CANTIDAD']; // Convertir a entero

    // Verificar si ya existe el cable
    if (buscarCable($tipo_cable, $con) == 1) {
        echo "<script>
                alert('Ya hay un cable con este nombre, intente nuevamente.');
                window.location.href='../vistas/Cables/registrar_cables.php';
              </script>";
    } else {
        // Insertar datos en la base de datos
        $sql = "INSERT INTO cables (TIPO_CABLE, CATEGORIA_NOMBRE, CANTIDAD) 
                VALUES ('$tipo_cable', '$categoria_cable', '$cantidad_cable')";
        $query = mysqli_query($con, $sql);

        if ($query) {
            echo "<script>
                    alert('Tipo de cable creado correctamente.');
                    window.location.href='../vistas/Cables/listas_cables.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Error al guardar el cable.');
                    window.history.back();
                  </script>";
        }
    }
} else {
    echo "<script>
            alert('Faltan datos en el formulario.');
            window.history.back();
          </script>";
}

// Función para buscar si el cable ya existe
function buscarCable($cable, $con) {
    $sql2 = "SELECT * FROM cables WHERE TIPO_CABLE = '$cable'";
    $query2 = mysqli_query($con, $sql2);
    return mysqli_num_rows($query2) > 0 ? 1 : 0;
}
?>
