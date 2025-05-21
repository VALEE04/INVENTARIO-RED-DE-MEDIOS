<?php
ob_start();
include("../../conexionPDO.php");
require_once 'Conexion.php';

// Borrar imagen y registro
if (isset($_GET['delete_id'])) {
    $stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM mobiliario WHERE Imagen_ID = :uid');
    $stmt_select->execute([':uid' => $_GET['delete_id']]);
    $imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);

    if ($imgRow && file_exists("imagenes/" . $imgRow['Imagen_Img'])) {
        unlink("imagenes/" . $imgRow['Imagen_Img']);
    }

    $stmt_delete = $DB_con->prepare('DELETE FROM mobiliario WHERE Imagen_ID = :uid');
    $stmt_delete->bindParam(':uid', $_GET['delete_id']);
    $stmt_delete->execute();

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lista de mobiliario</title>
  
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<script type="text/javascript">
		
	</script>
	 <!-- PLUGINS ALERTA -->
	 <link rel="stylesheet" type="text/css" href="../js/pluggins/dist/sweetalert2.min.css">
</head>
<!-- También puede utilizar dropdowns en su barra de navegación. Los dropdowns requieren un elemento de ajuste para el 
			posicionamiento, así que asegúrese de usar elementos separados y anidados para .nav-item y .nav-link como se muestra 
			a continuación. 
		-->

<body>
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

<div class="container">
    <div class="page-header">
        <br />
        <h1 class="h2">Lista de Mobiliario</h1>
        <div class="container-fluid">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input class="form-control" type="search" placeholder="Buscador" name="buscar"> <br>
                <button class="btn btn-outline-info" type="submit" name="enviar">Buscar</button>
                <a href="index.php" class="btn btn-outline-info">Mostrar todos los datos</a>
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
                </tr>
            </thead>
            <tbody>
                <?php
                // Verificar si se ha enviado el formulario de búsqueda
                if (isset($_POST['enviar']) && !empty($_POST['buscar'])) {
                    $buscar = "%" . $_POST['buscar'] . "%";
                    $stmt = $DB_con->prepare("SELECT * FROM mobiliario WHERE 
                        descripcion LIKE :buscar OR 
                        categoria_nombre LIKE :buscar OR 
                        cantidad LIKE :buscar OR 
                        estado LIKE :buscar OR 
                        observaciones LIKE :buscar OR 
                        asignado_a LIKE :buscar
                        ORDER BY imagen_ID DESC");
                    $stmt->bindParam(':buscar', $buscar);
                } else {
                    // Mostrar todos los datos si no se realiza una búsqueda
                    $stmt = $DB_con->prepare("SELECT * FROM mobiliario ORDER BY imagen_ID DESC");
                }

                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $imgPath = "http://localhost/Inventario/InicioSesion/Usuarios/Delegados/vistas/MOBILIARIO/imagenes/" . $row['imagen_Img'];
                        echo "<tr>
                            <td>{$row['imagen_ID']}</td>
                            <td>{$row['descripcion']}</td>
                            <td>{$row['categoria_nombre']}</td>
                            <td>{$row['cantidad']}</td>
                            <td>{$row['estado']}</td>
                            <td>{$row['asignado_a']}</td>
                            <td>{$row['observaciones']}</td>";
                        echo "<td>";
                        if (!empty($row['imagen_Img'])) {
                            $fullPath = "C:/xampp/htdocs/Inventario/InicioSesion/Usuarios/Delegados/vistas/MOBILIARIO/imagenes/" . $row['imagen_Img'];
                            if (file_exists($fullPath)) {
                                echo "<img src='{$imgPath}' width='50' height='50'>";
                            } else {
                                echo "<span class='text-danger'>Archivo no encontrado: {$fullPath}</span>";
                            }
                        } else {
                            echo "<span class='text-muted'>Sin imagen</span>";
                        }
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'><strong>No se encontraron resultados.</strong></td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<footer class="main-footerART text-center py-3 bg-light">
    <strong>&copy; 2025 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
</footer>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
