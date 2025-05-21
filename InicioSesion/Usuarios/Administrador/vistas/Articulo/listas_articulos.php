<?php
include("../../conexionPDO.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listas de Articulos</title>
  
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
<!-- También puede utilizar dropdowns en su barra de navegación. Los dropdowns requieren un elemento de ajuste para el 
			posicionamiento, así que asegúrese de usar elementos separados y anidados para .nav-item y .nav-link como se muestra 
			a continuación. 
		-->
		<header>
    <div class="contenedor-principal">
        <nav class="navbar navbar-expand-lg " style="background:#39A900;">
            <a href="http://localhost/Inventario/InicioSesion/Usuarios/Delegados/index.php">
            <img src="../../img/logosena.PNG">
            </a>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            
                            
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <div class="menunavegacion">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nodos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">    
                            <a class="dropdown-item" href="../Nodos/lista_nodos.php?vista=user_new">Lista</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
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

<body><br>
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
<center><h1>Lista de Articulos</h1></center>
<br>
<div class="container-fluid">

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input class="form-control" type="search" placeholder="Buscador" name="buscar"> <br>
        <input class="btn btn-outline-info" type="hidden" name="enviar">

                <a href="listas_articulos.php"> <button class="btn btn-outline-info" type="submit" name=""  >Mostrar todos los datos</button></a><br><br>
                <a href="../Articulo/pdf" <button class="btn btn-outline-info" type="submit"  name="" style=" margin-right:850px; ">Generar Reporte</button></a>
                            <a href="registrar_articulos.php"> <button type="button" class="btn btn-outline-info" style="  margin-right:-100px; "  >Añadir </button></a>


    </form>     
<br>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
  <tr>
                <th>#</th>
                <th>Serial</th>
                <th>Marca</th>                  
                <th>Categoria</th>
                <th>Placa</th>
                <th>Guaya</th>
                <th>Mouse</th>
                <th>Mousepad</th>
                <th>Memoria</th>
                <th>Lápiz</th>
                <th>Adaptador de poder</th>
                <th>Cable de poder</th>     
                <th>Cargador</th>
                <th>Bateria</th>
                <th>Estado</th>
                <th>Mantenimiento a realizar</th>
                <th>Observacion de estado</th>
                <th>Fecha</th>
                <th>Nombre del encargado</th>
                <th>Cargo</th>
                <th scope="col">Opciones</th>
            </tr>
  </thead>
  <tbody>

  	<?php
  	if (isset($_POST['enviar'])) {
        // Capturar el término de búsqueda
        $buscador = $_POST['buscar'];

  		// Consulta SQL con búsqueda
          $sql = "SELECT * FROM articulos WHERE REFERENCIASERIAL LIKE '%".$buscador."%' 
          OR NOMBRE_MARCA LIKE '%".$buscador."%' 
          OR FECHA_REVISION LIKE '%".$buscador."%' 
          OR NOMBRE_ENCARGADO LIKE '%".$buscador."%' 
          OR ROL LIKE '%".$buscador."%'";

  $query = mysqli_query($con, $sql);

  // Verificar si hay resultados
  if (mysqli_num_rows($query) > 0) {
      while ($row = mysqli_fetch_assoc($query)) {
        ?>
    <tr>
                <td><?php echo $row['ID_ARTICULOS']?></td>
                <td><?php echo $row['REFERENCIASERIAL']?></td>
                <td><?php echo $row['NOMBRE_MARCA']?></td>
                <td><?php echo $row['CATEGORIA_NOMBRE']?></td>
                <td><?php echo $row['PLACA']?></td>
                <td><?php echo $row['GUAYA']?></td>
                <td><?php echo $row['MOUSE']?></td>
                <td><?php echo $row['MOUSEPAD']?></td>
                <td><?php echo $row['MEMORIA']?></td>
                <td><?php echo $row['LAPIZ']?></td>
                <td><?php echo $row['ADAPTADOR_PODER']?></td>
                <td><?php echo $row['CABLE_PODER']?></td>
                <td><?php echo $row['CARGADOR']?></td>
                <td><?php echo $row['BATERIA']?></td>
                <td><?php echo $row['ESTADO']?></td>
                <td><?php echo $row['MANT_REALIZAR']?></td>
                <td><?php echo $row['OBSERV_ESTADO']?></td>
                <td><?php echo $row['FECHA_REVISION']?></td>
                <td><?php echo $row['NOMBRE_ENCARGADO']?></td>
                <td><?php echo $row['ROL']?></td>
                <td>
                    <a href="actualizar_articulos.php?id=<?php echo $row['ID_ARTICULOS']?>" class="btn btn-primary">Editar</a>
                    <a href="ListaArticulos/eliminar_articulos.php?id=<?php echo $row['ID_ARTICULOS']?>" class="btn btn-danger" onclick="return confirmDelete()">Eliminar</a>
                </td>
            </tr>
<?php
  }
} else {
    // Si no hay resultados, mostrar mensaje
    echo '<tr><td colspan="21" class="text-center text-danger">No se encontraron resultados</td></tr>';
}
} else {
// Código original para mostrar todos los registros
$sql = "SELECT * FROM articulos";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($query)) {
  			?>
 <tr>
            <td><?php echo $row['ID_ARTICULOS']?></td>
            <td><?php echo $row['REFERENCIASERIAL']?></td>
            <td><?php echo $row['NOMBRE_MARCA']?></td>
            <td><?php echo $row['CATEGORIA_NOMBRE']?></td>
            <td><?php echo $row['PLACA']?></td>
            <td><?php echo $row['GUAYA']?></td>
            <td><?php echo $row['MOUSE']?></td>
            <td><?php echo $row['MOUSEPAD']?></td>
            <td><?php echo $row['MEMORIA']?></td>
            <td><?php echo $row['LAPIZ']?></td>
            <td><?php echo $row['ADAPTADOR_PODER']?></td>
            <td><?php echo $row['CABLE_PODER']?></td>
            <td><?php echo $row['CARGADOR']?></td>
            <td><?php echo $row['BATERIA']?></td>
            <td><?php echo $row['ESTADO']?></td>
            <td><?php echo $row['MANT_REALIZAR']?></td>
            <td><?php echo $row['OBSERV_ESTADO']?></td>
            <td><?php echo $row['FECHA_REVISION']?></td>
            <td><?php echo $row['NOMBRE_ENCARGADO']?></td>
            <td><?php echo $row['ROL']?></td>
            <td style="display: flex; gap: 5px; justify-content: center;">
    <a href="actualizar_articulos.php?id=<?php echo $row['ID_ARTICULOS']?>" class="btn btn-primary">Editar</a>
    <a href="ListaArticulos/eliminar_articulos.php?id=<?php echo $row['ID_ARTICULOS']?>" class="btn btn-danger" onclick="return confirmDelete()">Eliminar</a>
</td>
        </tr>
    <?php
    }
    }
    ?>
    <?php
    if (isset($_GET['editar'])) {
    	include 'actualizar.php';
    }
    ?>
  </tbody>
</table>
</div>
</body>
</html>


