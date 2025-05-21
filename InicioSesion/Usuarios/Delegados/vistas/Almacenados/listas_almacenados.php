<?php
include("../../conexionPDO.php");
$nodos_resultado = mysqli_query($con, "SELECT DISTINCT nodos FROM almacenado WHERE nodos IS NOT NULL AND nodos != ''");

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
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function confirmDelete() {
            return confirm("¿Desea eliminar el registro?");
        }
    </script>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Categoria/cate_nuevo.php?vista=user_list">Categoría</a>
                            <a class="dropdown-item" href="../Almacenados/listas_almacenados.php?vista=user_new">Almacenado</a>
                            <a class="dropdown-item" href="../Cables/listas_cables.php?vista=user_list">Cables</a>
                            <a class="dropdown-item" href="../MOBILIARIO/index.php?vista=user_list">Mobiliario</a>
                            <a class="dropdown-item" href="../Articulo/listas_articulos.php?vista=user_list">Artículos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Préstamos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Prestamos/listas_prestamos.php?vista=user_list">Préstamos</a>
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

<body>
    <div class="container">
        <div class="page-header">
            <center><br><h1>Lista de Almacenados</h1><br></center>
        </div>

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
        <?php while ($nodo = mysqli_fetch_assoc($nodos_resultado)): ?>
            <option value="<?= urlencode($nodo['nodos']) ?>"><?= htmlspecialchars($nodo['nodos']) ?></option>
        <?php endwhile; ?>
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
<br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Nodo o persona</th>
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
                    $buscador = $_POST['buscar'];
                    $sql = "SELECT * FROM almacenado WHERE 
        NOMBRE_ALMACENADO LIKE '%$buscador%' OR 
        SERIAL_ALMACENADO LIKE '%$buscador%' OR 
        CANTIDAD_ALMACENADO LIKE '%$buscador%' OR 
        nodos LIKE '%$buscador%' OR 
        OBSERV_ALMACENADO LIKE '%$buscador%'";

                } else {
                    $sql = "SELECT * FROM almacenado";
                }

                $query = mysqli_query($con, $sql);

                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td><?php echo isset($row['ID_ALMACENADO']) ? $row['ID_ALMACENADO'] : 'N/A'; ?></td>
                            <td><?php echo isset($row['NOMBRE_ALMACENADO']) ? $row['NOMBRE_ALMACENADO'] : 'N/A'; ?></td>
                            <td><?php echo isset($row['CATEGORIA_NOMBRE']) ? $row['CATEGORIA_NOMBRE'] : 'N/A'; ?></td>
                            <td><?php echo isset($row['nodos']) ? $row['nodos'] : 'N/A'; ?></td>
                            <td><?php echo isset($row['SERIAL_ALMACENADO']) ? $row['SERIAL_ALMACENADO'] : 'N/A'; ?></td>
                            <td><?php echo isset($row['CANTIDAD_ALMACENADO']) ? $row['CANTIDAD_ALMACENADO'] : 'N/A'; ?></td>
                            <td><?php echo isset($row['OBSERV_ALMACENADO']) ? $row['OBSERV_ALMACENADO'] : 'N/A'; ?></td>
                            <td><?php echo isset($row['ESTADO']) ? $row['ESTADO'] : 'N/A'; ?></td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="actualizar_almacenados.php?id=<?php echo $row['ID_ALMACENADO']; ?>" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="ListaAlmacenados/eliminar_almacenados.php?id=<?php echo $row['ID_ALMACENADO']; ?>" class="btn btn-danger btn-sm" onclick="return confirmDelete()">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    // Mensaje cuando no hay resultados
                    echo "<tr><td colspan='9' class='text-center text-danger'><strong>No se encontraron resultados.</strong></td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>