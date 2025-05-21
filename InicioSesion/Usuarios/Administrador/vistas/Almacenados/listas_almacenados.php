<?php
include("../../conexionPDO.php");

// Consulta para obtener los nodos
$sql_nodos = "SELECT DISTINCT nodos FROM almacenado";
$nodos_resultado = mysqli_query($con, $sql_nodos);

if (!$nodos_resultado) {
    die("Error al obtener los nodos: " . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listas Almacenados</title>
  
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
        function confirmDelete() {
            var respuesta=confirm("¿Desea eliminar el registro?");
            if (respuesta == true) {
                return true;
            } else{
                return false;
            }
        }
        function alertActualizacion() {
             var respuesta = alert("Registro actualizado con exito!");
                return;
            }
    </script>
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
                    
                    <li class="nav-item active">
                        <div class="menunavegacion">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">    
                            <a class="dropdown-item" href="../Usuarios/registrar.php?vista=user_new">Nuevo</a>
                            <a class="dropdown-item" href="../Usuarios/listas.php?vista=user_list">Lista</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <div class="menunavegacion">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nodos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">    
                            <a class="dropdown-item" href="../Nodos/lista_nodos.php?vista=user_new">Lista</a>
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prestamos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Prestamos/listas_prestamos.php?vista=user_list">Préstamos</a>
                            <a class="dropdown-item" href="../Encargados/listas_encargados.php?vista=user_list">Encargados</a>
                        </div>

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
    <!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes" />
<title></title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<script src="bootstrap/js/jquery.min.js"></script>
</head>
<body><br>
    <div class="container">
  <div class="page-header">
<center><br><h1>Lista de Almacenados</h1><br></center>

<div class="container-fluid">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input class="form-control" type="search" placeholder="Buscador" name="buscar"> <br>
                <button class="btn btn-outline-info" type="submit" name="enviar">Mostrar todos los datos</button>
</script>
                <a href="registrar_almacenados.php" class="btn btn-outline-info" style="margin-right:-100px;">Añadir</a>
            </form>     
        </div>
        <br>
        
        <div class="input-group mb-3" style="max-width: 500px;">
    <label class="input-group-text" for="selectNodo">Reporte por Nodo</label>
    <select class="form-select" id="selectNodo" onchange="generarReporte(this.value)">
        <option value="">Todos los nodos</option> <!-- Opción para informe general -->
        <?php
        if (mysqli_num_rows($nodos_resultado) > 0) {
            while ($nodo = mysqli_fetch_assoc($nodos_resultado)) {
                echo '<option value="' . urlencode($nodo['nodos']) . '">' . htmlspecialchars($nodo['nodos']) . '</option>';
            }
        } else {
            echo '<option value="">No hay nodos disponibles</option>';
        }
        ?>
    </select>
</div>

<script>
function generarReporte(nodo) {
    let url = "../Almacenados/pdf/index.php";
    if (nodo) {
        url += "?nodo=" + nodo;
    }
    window.open(url, "_blank");
}
</script>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Nodo</th>
                <th scope="col">Serial</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Observacion</th>
                <th scope="col">Estado</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['enviar'])) {
                // Buscador funcional
                $buscador = htmlspecialchars($_POST['buscar'], ENT_QUOTES, 'UTF-8'); // Evitar inyección XSS
                $sql = "SELECT * FROM almacenado WHERE 
                        NOMBRE_ALMACENADO LIKE '%$buscador%' OR 
                        CATEGORIA_NOMBRE LIKE '%$buscador%' OR 
                        SERIAL_ALMACENADO LIKE '%$buscador%' OR 
                        CANTIDAD_ALMACENADO LIKE '%$buscador%' OR 
                        nodos LIKE '%$buscador%'";
            } else {
                // Mostrar todos los resultados
                $sql = "SELECT * FROM almacenado";
            }

            $query = mysqli_query($con, $sql);

            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?= $row['ID_ALMACENADO'] ?></td>
                        <td><?= $row['NOMBRE_ALMACENADO'] ?></td>
                        <td><?= $row['CATEGORIA_NOMBRE'] ?></td>
                        <td><?= $row['nodos'] ?></td>
                        <td><?= $row['SERIAL_ALMACENADO'] ?></td>
                        <td><?= $row['CANTIDAD_ALMACENADO'] ?></td>
                        <td><?= $row['OBSERV_ALMACENADO'] ?></td>
                        <td><?= $row['ESTADO'] ?></td>
                        <td>
                            <div class="d-flex">
                                <a href="actualizar_almacenados.php?id=<?= $row['ID_ALMACENADO'] ?>" class="btn btn-primary btn-sm me-2">Editar</a>
                                <a href="ListaAlmacenados/eliminar_almacenados.php?id=<?= $row['ID_ALMACENADO'] ?>" class="btn btn-danger btn-sm" onclick="return confirmDelete()">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='9' class='text-center text-danger'><strong>No se encontraron resultados.</strong></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>


