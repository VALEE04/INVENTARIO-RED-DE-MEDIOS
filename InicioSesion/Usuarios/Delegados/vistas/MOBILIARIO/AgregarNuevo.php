<?php
include("../../conexionPDO.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- PLUGINS ALERTA -->
    <link rel="stylesheet" type="text/css" href="../js/pluggins/dist/sweetalert2.min.css">
</head>

<header>
    <div class="contenedor-principal">
        <nav class="navbar navbar-expand-lg" style="background:#39A900;">
            <a href="http://localhost/Inventario/InicioSesion/Usuarios/Delegados/index.php">
                <img src="../../img/logosena.PNG" alt="Logo SENA">
            </a>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nodos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">    
                            <a class="dropdown-item" href="../Nodos/lista_nodos.php?vista=user_new">Lista</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Categoria/cate_nuevo.php?vista=user_list">Categoria</a>
                            <a class="dropdown-item" href="../Almacenados/listas_almacenados.php?vista=user_new">Almacenado</a>
                            <a class="dropdown-item" href="../Cables/listas_cables.php?vista=user_list">Cables</a>
                            <a class="dropdown-item" href="../MOBILIARIO/index.php?vista=user_list">Mobiliario</a>
                            <a class="dropdown-item" href="../Articulo/listas_articulos.php?vista=user_list">Articulos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prestamos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Prestamos/listas_prestamos.php?vista=user_list">Prestamos</a>
                            <a class="dropdown-item" href="../Encargados/listas_encargados.php?vista=user_list">Encargados</a>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="../../../../../index.php">
                <button type="button" class="btn btn-secondary" style="margin-top:-5px; margin-right:100px;">Cerrar sesión</button>
            </a>
        </nav>
    </div>
</header>


<?php
error_reporting(~E_NOTICE);
require_once 'Conexion.php';

$stmt_nodos = $DB_con->prepare("SELECT * FROM nodo ORDER BY nodos ASC");
$stmt_nodos->execute();

if (isset($_POST['btnsave'])) {
    $descripcion = htmlspecialchars($_POST['descripcion']);
    $categoria_nombre = htmlspecialchars($_POST['categoria_nombre']);
    $cantidad = intval($_POST['cantidad']);
    $estado = htmlspecialchars($_POST['estado']);
    $asignado = htmlspecialchars($_POST['asignado']);
    $observaciones = htmlspecialchars($_POST['observaciones']);

    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];
    
    $upload_dir = 'imagenes/'; // <-- AGREGAR ESTA LÍNEA AQUÍ
    
    if (empty($descripcion) || empty($categoria_nombre) || empty($cantidad) || empty($estado) || empty($observaciones) || empty($imgFile)) {
        $errMSG = "Todos los campos son obligatorios.";
    } else {
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
    
        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
        $valid_extensions = ['jpeg', 'jpg', 'png', 'gif'];
        $userpic = rand(1000, 1000000) . "." . $imgExt;
    
        if (in_array($imgExt, $valid_extensions)) {
            if ($imgSize < 1000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $userpic);
            } else {
                $errMSG = "La imagen es demasiado grande (máximo 1MB).";
            }
        } else {
            $errMSG = "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
        }
    }

    if (!isset($errMSG)) {
        // Verificar si ya existe un registro con la misma descripción
        $stmt_check = $DB_con->prepare('SELECT COUNT(*) FROM mobiliario WHERE descripcion = :descripcion');
        $stmt_check->bindParam(':descripcion', $descripcion);
        $stmt_check->execute();
        $exists = $stmt_check->fetchColumn();

        if ($exists > 0) {
            $errMSG = "Ya existe un registro con la misma descripción.";
        } else {
            // Si no existe, realiza la inserción
            $stmt = $DB_con->prepare('INSERT INTO mobiliario (descripcion, categoria_nombre, cantidad, estado, observaciones, asignado_a, Imagen_Img)
            VALUES (:descripcion, :categoria_nombre, :cantidad, :estado, :observaciones, :asignado, :upic)');

            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':categoria_nombre', $categoria_nombre);
            $stmt->bindParam(':cantidad', $cantidad);
            $stmt->bindParam(':estado', $estado);
            $stmt->bindParam(':asignado', $asignado);
            $stmt->bindParam(':observaciones', $observaciones);
            $stmt->bindParam(':upic', $userpic);

            if ($stmt->execute()) {
                $successMSG = "Registro insertado correctamente.";
                header("Location: index.php");
                exit;
            } else {
                $errMSG = "Error al guardar en la base de datos.";
            }
        }
    }
}
?>


<div class="container">
    <br>
    <h2 class="mb-4">Registrar nuevo mobiliario</h2>

    <?php if (isset($errMSG)): ?>
        <div class="alert alert-danger"><?php echo $errMSG; ?></div>
    <?php elseif (isset($successMSG)): ?>
        <div class="alert alert-success"><?php echo $successMSG; ?></div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data" class="row g-3">

        <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" required>
        </div>

        <div class="col-md-6">
            <label for="categoria_nombre" class="form-label">Categoría</label>
            <select class="form-select" name="categoria_nombre" required>
                <option value="Mobiliario">Mobiliario</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" min="1" max="100" required>
        </div>

        <div class="col-md-6">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" name="estado" required>
                <option value="">Seleccione estado</option>



                <?php
                include '../../conexionPDO.php';
                $sql = "SELECT * FROM estados";
                $query = mysqli_query($con, $sql);
                while ($row1 = mysqli_fetch_array($query)) {
                    echo '<option value="' . $row1['ESTADOS'] . '">' . $row1['ESTADOS'] . '</option>';
                }
                mysqli_close($con);
                ?>
            </select>
        </div>

        <div class="col-md-6">
    <label for="asignado" class="form-label">Asignado a</label>
    <select class="form-select" name="asignado" required>
        <option value="">Seleccione un nodo</option>
        <?php while ($row = $stmt_nodos->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?= $row['nodos']; ?>"><?= $row['nodos']; ?></option>
        <?php } ?>
    </select>
</div>


        <div class="col-md-12">
            <label for="observaciones" class="form-label">Observaciones</label>
            <input type="text" class="form-control" name="observaciones" required>
        </div>

        <div class="col-md-12">
            <label for="user_image" class="form-label">Imagen</label>
            <input class="form-control" type="file" name="user_image" accept="image/*" required>
        </div>

        <div class="col-12">
            <button type="submit" name="btnsave"  class="btn btn-success" style="background:#39A900; border:none;">Guardar</button>
        </div>
    </form>
</div>

<footer class="mt-5 bg-light text-center py-3">
    <strong>&copy; 2025 <a href="https://comunicaciongraficasena.blogspot.com" target="_blank">Cenigraf</a></strong>. Todos los derechos reservados.
</footer>

<!-- Bootstrap 5.2.1 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
