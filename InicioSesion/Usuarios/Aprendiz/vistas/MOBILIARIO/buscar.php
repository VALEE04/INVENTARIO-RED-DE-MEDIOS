<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobiliario Lista</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="/Inventario/vistas/articulos/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
    <!--esilos bootstrap -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- nuestros estilos -->
    <link rel="stylesheet" href="style.css">
</head>
		<header>
    <div class="contenedor-principal">
        <nav class="navbar navbar-expand-lg " style="background:#39A900;">
            <a href="http://localhost/Inventario/InicioSesion/Usuarios/Aprendiz/index.php">
            <img src="../../img/logosena.PNG">
            </a>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            
                            

            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nodos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Nodos/lista_nodods.php?vista=user_list">Lista</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listas</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="../Categoria/cate_nuevo.php?vista=user_list">Categoria</a>
                                <a class="dropdown-item" href="../Almacenados/listas_almacenados.php?vista=user_new">Almacenado</a>
                                <a class="dropdown-item" href="../Cables/listas_cables.php?vista=user_list">Cables</a>
                                <a class="dropdown-item" href="../MOBILIARIO/index.php?vista=user_list">Mobiliario</a>
                                <a class="dropdown-item" href="../Articulo/listas_articulos.php?vista=user_list">Articulos</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prestamos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Prestamos/listas_prestamos.php?vista=user_list">Prestamos</a>
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
<body>

<?php
// Archivo de conexión con la base de datos
require_once 'Conexion.php';

// Condicional para validar el borrado de la imagen
if (isset($_GET['delete_id'])) {
    // Selecciona imagen a borrar
    $stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM mobiliario WHERE Imagen_ID = :uid');
    $stmt_select->execute(array(':uid' => $_GET['delete_id']));
    $imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);
    // Ruta de la imagen
    unlink("imagenes/" . $imgRow['Imagen_Img']);

    // Consulta para eliminar el registro de la base de datos
    $stmt_delete = $DB_con->prepare('DELETE FROM mobiliario WHERE Imagen_ID = :uid');
    $stmt_delete->bindParam(':uid', $_GET['delete_id']);
    $stmt_delete->execute();
    // Redirecciona al inicio
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes" />
    <title>Buscar Mobiliario</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
</head>

<body>
<div class="container">
    <div class="page-header">
        <h1 class="h2">Lista de Mobiliario</h1>
        <div class="container-fluid">
            <form method="POST">
                <input class="form-control me-2" type="search" placeholder="Buscador" name="buscar"> <br>
                <button class="btn btn-outline-info" type="submit" name="enviar">Buscar</button>
                <a href="index.php" class="btn btn-outline-info">Mostrar todos los datos</a>
            </form>
        </div>
    </div>
    <br />

    <?php
    // Declaración de variables para búsqueda
    if (!isset($_POST['buscar'])) {
        $_POST['buscar'] = '';
    }

    if (!empty($_POST)) {
        // Función para resaltar resultados
        function resaltar_frase($string, $frase, $taga = '<b>', $tagb = '</b>')
        {
            return ($string !== '' && $frase !== '')
                ? preg_replace('/(' . preg_quote($frase, '/') . ')/i', $taga . '\\1' . $tagb, $string)
                : $string;
        }

        $laBusqueda = explode(" ", $_POST['buscar']);
        $query = "SELECT * FROM mobiliario WHERE descripcion LIKE LOWER('%" . $laBusqueda[0] . "%') 
                  OR cantidad LIKE LOWER('%" . $laBusqueda[0] . "%') 
                  OR estado LIKE LOWER('%" . $laBusqueda[0] . "%') 
                  OR observaciones LIKE LOWER('%" . $laBusqueda[0] . "%') 
                  OR categoria_nombre LIKE LOWER('%" . $laBusqueda[0] . "%')";

        for ($i = 1; $i < count($laBusqueda); $i++) {
            if (!empty($laBusqueda[$i])) {
                $query .= " OR cantidad LIKE LOWER('%" . $laBusqueda[$i] . "%') 
                            OR estado LIKE LOWER('%" . $laBusqueda[$i] . "%')";
            }
        }

        $result = $con->query($query);
        $numero = mysqli_num_rows($result);

        if ($numero > 0 && $_POST['buscar'] != '') {
            $row_count = 0;
            echo "<br>Resultados encontrados:<br> " . $numero . "<br>";
            echo "<br><br><table class='table table-striped'>";
            ?>
            <div class="row m-0 justify-content-center mt-5">
                <table class="table col-auto w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descripcion</th>
                            <th>Categoria nombre</th>
                            <th>Cantidad</th>
                            <th>Estado</th>
                            <th>Asignado a</th> <!-- Nueva columna -->
                            <th>Observaciones</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            $row_count++;
                            echo "<tr><td>" . $row_count . " </td><td>" . resaltar_frase($row['descripcion'], $_POST['buscar']) . "</td><td>" .
                                resaltar_frase($row['categoria_nombre'], $_POST['buscar']) . "</td><td>" . resaltar_frase($row['cantidad'], $_POST['buscar']) . "</td><td>" .
                                resaltar_frase($row['estado'], $_POST['buscar']) . "</td><td>" . resaltar_frase($row['asignado_a'], $_POST['buscar']) . "</td><td>" .
                                resaltar_frase($row['observaciones'], $_POST['buscar']) . "</td>";
                            ?>
                            <td><img src="imagenes/<?php echo $row['imagen_Img']; ?>" class="img-rounded" width="50px" height="50px" /></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
        } else {
            ?>
            <div class="col-xs-12">
                <div class="alert alert-warning"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ... </div>
            </div>
            <?php
        }
    }
    ?>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
