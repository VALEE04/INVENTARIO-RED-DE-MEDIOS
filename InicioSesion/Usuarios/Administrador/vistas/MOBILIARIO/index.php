<?php
ob_start();
include("../../conexionPDO.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lista Mobiliario</title>
  
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
        <nav class="navbar navbar-expand-lg " style="background:#39A900;">
            <a href="http://localhost/Inventario/InicioSesion/Usuarios/Administrador/index.php">
            <img src="../../img/logosena.PNG">
            </a>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            
                            
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Usuarios/registrar.php?vista=user_new">Nuevo</a>
                            <a class="dropdown-item" href="../Usuarios/listas.php?vista=user_list">Lista</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nodos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Nodos/lista_nodos.php?vista=user_list">Lista</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listas</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="../Categoria/cate_nuevo.php?vista=user_list">Categoría</a>
                                <a class="dropdown-item" href="../Almacenados/listas_almacenados.php?vista=user_new">Almacenado</a>
                                <a class="dropdown-item" href="../Cables/listas_cables.php?vista=user_list">Cables</a>
                                <a class="dropdown-item" href="../MOBILIARIO/index.php?vista=user_list">Mobiliario</a>
                                <a class="dropdown-item" href="../Articulo/listas_articulos.php?vista=user_list">Artículos</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Préstamos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Prestamos/listas_prestamos.php?vista=user_list">Préstamos</a>
                            <a class="dropdown-item" href="../Encargados/listas_encargados.php?vista=user_list">Encargados</a>
                        </div>

                    </li>
                     </li>

                </ul>
            </div>
            
            <a href="../../../../../index.php"><button type="button" class="btn btn-secondary" style=" margin-top:-5px; margin-right:100px; ">Cerrar sesi&oacute;n</button> </a>
    </div>
    </div>
    </div>
    </div>
    </nav>
</header>

<?php
// Archivo de conexión con la base de datos
require_once 'Conexion.php';

// Condicional para validar el borrado de la imagen
if (isset($_GET['delete_id'])) {
    $stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM mobiliario WHERE Imagen_ID = :uid');
    $stmt_select->execute([':uid' => $_GET['delete_id']]);
    $imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);

    if ($imgRow && !empty($imgRow['Imagen_Img'])) {
        $ruta = "imagenes/" . $imgRow['Imagen_Img'];
        if (is_file($ruta)) {
            unlink($ruta);
        }
    }

    $stmt_delete = $DB_con->prepare('DELETE FROM mobiliario WHERE Imagen_ID = :uid');
    $stmt_delete->execute([':uid' => $_GET['delete_id']]);

    header("Location: index.php");
    exit;
}
?>

<div class="container">
    <div class="page-header">
        <br />
        <h1 class="h2">Lista de Mobiliario</h1>
        <div class="container-fluid">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input class="form-control" type="search" placeholder="Buscador" name="buscar"> <br>
                <button class="btn btn-outline-info" type="submit" name="enviar">Mostrar todos los datos</button>
                <a href="../MOBILIARIO/pdf" class="btn btn-outline-info" target="_blank">Generar Reporte</a>
                <a href="AgregarNuevo.php" class="btn btn-outline-info" style="margin-right:-100px;">Añadir</a>
            </form>
        </div>
    </div>
        <div class="row m-0 justify-content-center mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Descripcion</th>
                        <th>Categoria nombre</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Observaciones</th>
                        <th>Asignado a</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
    <?php
if (isset($_POST['enviar']) && !empty($_POST['buscar'])) {
    $buscar = "%" . $_POST['buscar'] . "%";
    $stmt = $DB_con->prepare("SELECT Imagen_ID, descripcion, categoria_nombre, cantidad, estado, observaciones, asignado_a, Imagen_Img 
                              FROM mobiliario 
                              WHERE descripcion LIKE :busqueda OR categoria_nombre LIKE :busqueda
                              ORDER BY Imagen_ID DESC");
    $stmt->bindParam(':busqueda', $buscar);
} else {
    $stmt = $DB_con->prepare("SELECT Imagen_ID, descripcion, categoria_nombre, cantidad, estado, observaciones, asignado_a, Imagen_Img 
                              FROM mobiliario 
                              ORDER BY Imagen_ID DESC");
}
$stmt->execute();

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?= $row['Imagen_ID']; ?></td>
            <td><?= $row['descripcion']; ?></td>
            <td><?= $row['categoria_nombre']; ?></td>
            <td><?= $row['cantidad']; ?></td>
            <td><?= $row['estado']; ?></td>
            <td><?= $row['observaciones']; ?></td>
            <td><?= $row['asignado_a']; ?></td>
            <td>
                <?php if (!empty($row['Imagen_Img'])): ?>
                    <img src="http://localhost/Inventario/InicioSesion/Usuarios/Delegados/vistas/MOBILIARIO/imagenes/<?= $row['Imagen_Img']; ?>" width="50" height="50">
                <?php else: ?>
                    <span class="text-muted">Sin imagen</span>
                <?php endif; ?>
            </td>
            <td>
                <div class="d-flex gap-2">
                    <a class="btn btn-info" href="EditarImagen.php?edit_id=<?= $row['Imagen_ID']; ?>" title="Editar" onclick="return confirm('¿Está seguro de editar el archivo?')">Editar</a>
                    <a class="btn btn-danger" href="index.php?delete_id=<?= $row['Imagen_ID']; ?>" title="Eliminar" onclick="return confirm('¿Está seguro de eliminar el archivo?')">Borrar</a>
                </div>
            </td>
        </tr>
        <?php
    }
} else {
    echo "<tr><td colspan='9' class='text-center'><strong>No se encontraron resultados.</strong></td></tr>";
}
?>
</tbody>

        </table>
    </div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

