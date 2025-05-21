<?php
include("../../conexionPDO.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listas de Cables</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function confirmDelete() {
            return confirm("¿Desea eliminar el registro?");
        }
        function alertActualizacion() {
            alert("Cable actualizado con éxito!");
        }
    </script>
    <link rel="stylesheet" type="text/css" href="../js/pluggins/dist/sweetalert2.min.css">
</head>
<header>
    <div class="contenedor-principal">
        <nav class="navbar navbar-expand-lg " style="background:#39A900;">
            <a href="http://localhost/Inventario/InicioSesion/Usuarios/Aprendiz/index.php">
                <img src="../../img/logosena.PNG">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <div class="menunavegacion">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Nodos</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../Nodos/lista_nodos.php?vista=user_new">Lista</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Categorías</a>
                        <div class="dropdown-menu">
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
            <center><h1>Lista de Cables</h1></center>
        </div>
        <div class="container-fluid">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input class="form-control" type="search" placeholder="Buscador" name="buscar"> 
                <br>
                <a href="listas_cables.php"> <button class="btn btn-outline-info" type="submit">Mostrar todos los datos</button></a>
                <br><br>
            </form>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de Cable</th>
                        <th>Categoría</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_POST['enviar'])) {
                        $buscador = $_POST['buscar'];
                        $sql = "SELECT * FROM cables WHERE TIPO_CABLE LIKE '%$buscador%' OR CATEGORIA_NOMBRE LIKE '%$buscador%' OR CANTIDAD LIKE '%$buscador%'";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<tr>
                                    <td>{$row['ID_CABLE']}</td>
                                    <td>{$row['TIPO_CABLE']}</td>
                                    <td>{$row['CATEGORIA_NOMBRE']}</td>
                                    <td>{$row['CANTIDAD']}</td>
                                  </tr>";
                        }
                    } else {
                        $sql = "SELECT * FROM cables";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<tr>
                                    <td>{$row['ID_CABLE']}</td>
                                    <td>{$row['TIPO_CABLE']}</td>
                                    <td>{$row['CATEGORIA_NOMBRE']}</td>
                                    <td>{$row['CANTIDAD']}</td>
                                  </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>