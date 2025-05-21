<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Mobiliario</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="/Inventario/vistas/articulos/style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Scripts Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Header / Navbar -->
<header>
    <nav class="navbar navbar-expand-lg" style="background:#39A900;">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/Inventario/InicioSesion/Usuarios/Delegados/index.php">
                <img src="../../img/logosena.PNG" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Nodos</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../Nodos/lista_nodos.php?vista=user_new">Lista</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Categorías</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../Categoria/cate_nuevo.php?vista=user_list">Categoría</a>
                            <a class="dropdown-item" href="../Almacenados/listas_almacenados.php?vista=user_new">Almacenado</a>
                            <a class="dropdown-item" href="../Cables/listas_cables.php?vista=user_list">Cables</a>
                            <a class="dropdown-item" href="../MOBILIARIO/index.php?vista=user_list">Mobiliario</a>
                            <a class="dropdown-item" href="../Articulo/listas_articulos.php?vista=user_list">Artículos</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Préstamos</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../Prestamos/listas_prestamos.php?vista=user_list">Préstamos</a>
                            <a class="dropdown-item" href="../Encargados/listas_encargados.php?vista=user_list">Encargados</a>
                        </div>
                    </li>

                </ul>
                <a href="../../../../../index.php" class="btn btn-secondary ms-auto">Cerrar sesión</a>
            </div>
        </div>
    </nav>
</header>

<!-- PHP Lógica Backend -->
<?php
error_reporting(~E_NOTICE);
require_once 'Conexion.php';

// Verificar si se recibió un ID para editar
if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT descripcion, categoria_nombre, cantidad, estado, observaciones, Imagen_Img, asignado_a FROM mobiliario WHERE Imagen_ID = :uid');
    $stmt_edit->execute([':uid' => $id]);
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
} else {
    header("Location: index.php");
}

// Procesar la actualización
if (isset($_POST['btn_save_updates'])) {
    $descripcion = $_POST['descripcion'];
    $categoria_nombre = $_POST['categoria_nombre'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];
    $observaciones = $_POST['observaciones'];
    $asignado_a = $_POST['asignado']; // Cambiado a asignado_a
    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];

    if ($imgFile) {
        $upload_dir = 'imagenes/';
        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
        $valid_extensions = ['jpeg', 'jpg', 'png', 'gif'];
        $userpic = rand(1000, 1000000) . "." . $imgExt;

        if (in_array($imgExt, $valid_extensions)) {
            if ($imgSize < 1000000) {
                unlink($upload_dir . $edit_row['Imagen_Img']);
                move_uploaded_file($tmp_dir, $upload_dir . $userpic);
            } else {
                $errMSG = "El archivo es demasiado grande (mayor a 1MB).";
            }
        } else {
            $errMSG = "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
        }
    } else {
        $userpic = $edit_row['Imagen_Img'];
    }

    if (!isset($errMSG)) {
        $stmt = $DB_con->prepare('UPDATE mobiliario 
                                  SET descripcion=:descripcion, 
                                      categoria_nombre=:categoria_nombre, 
                                      cantidad=:cantidad, 
                                      estado=:estado, 
                                      observaciones=:observaciones, 
                                      asignado_a=:asignado_a, 
                                      Imagen_Img=:upic 
                                  WHERE Imagen_ID=:uid');
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':categoria_nombre', $categoria_nombre);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':observaciones', $observaciones);
        $stmt->bindParam(':asignado_a', $asignado_a); // Cambiado a asignado_a
        $stmt->bindParam(':upic', $userpic);
        $stmt->bindParam(':uid', $id);

        if ($stmt->execute()) {
            echo "<script>alert('Archivo editado correctamente.'); window.location.href='index.php';</script>";
        } else {
            $errMSG = "Los datos no fueron actualizados.";
        }
    }
}

// Consulta para obtener los nodos disponibles
$stmt_nodos = $DB_con->prepare('SELECT id_nodo, nodos FROM nodo');
$stmt_nodos->execute();
?>

<!-- Formulario Actualización -->
<div class="container">
    <div class="page-header mt-4">
        <h2>Actualizar Mobiliario <a class="btn btn-secondary" href="index.php">Mostrar todos los modelos</a></h2>
    </div>

    <?php if (isset($errMSG)): ?>
        <div class="alert alert-danger"><?= $errMSG; ?></div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data" class="form-horizontal">
        <table class="table table-bordered">
            <tr>
                <td>Descripción:</td>
                <td><input type="text" name="descripcion" class="form-control" value="<?= $descripcion; ?>" required></td>
            </tr>
            <tr>
                <td>Categoría:</td>
                <td>
                    <select class="form-control" name="categoria_nombre" required>
                        <option value="<?= $categoria_nombre; ?>"><?= $categoria_nombre; ?></option>
                        <option value="Mobiliario">Mobiliario</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Cantidad:</td>
                <td><input type="number" name="cantidad" class="form-control" value="<?= $cantidad; ?>" min="1" max="100" required></td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td>
                    <select class="form-control" name="estado" required>
                        <option value="<?= $estado; ?>"><?= $estado; ?></option>
                        <?php
                        include '../../conexionPDO.php';
                        $sql = "SELECT * FROM estados";
                        $query = mysqli_query($con, $sql);
                        while ($row1 = mysqli_fetch_array($query)) {
                            echo '<option value="' . $row1['ESTADOS'] . '">' . $row1['ESTADOS'] . '</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Asignado a:</td>
                <td>
                    <select class="form-control" name="asignado" required>
                        <option value="">Seleccione un nodo</option>
                        <?php while ($row = $stmt_nodos->fetch(PDO::FETCH_ASSOC)) { ?>
                            <option value="<?= htmlspecialchars($row['nodos']); ?>" <?= ($row['nodos'] == $asignado_a) ? 'selected' : ''; ?>>
                                <?= htmlspecialchars($row['nodos']); ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Observaciones:</td>
                <td><input type="text" name="observaciones" class="form-control" value="<?= $observaciones; ?>" required></td>
            </tr>
            <tr>
                <td>Imagen actual:</td>
                <td>
                    <img src="imagenes/<?= $Imagen_Img; ?>" height="50" width="50" alt="Imagen actual">
                    <input type="file" name="user_image" class="form-control mt-2" accept="image/*">
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">Actualizar</button></td>
            </tr>
        </table>
    </form>
</div>

<!-- Footer -->
<footer class="text-center mt-4">
    <strong>&copy; 2025 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
</footer>

</body>
</html>
