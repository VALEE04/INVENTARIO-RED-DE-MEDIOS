<?php
include("../../conexionPDO.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listas Encargados</title>
  
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
<div class="container">
  <div class="page-header">
<body><br>
<center><h1>Lista de Encargados</h1></center>
<br>
<div class="container-fluid">

	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<input class="form-control" type="search" placeholder="Buscador" name="buscar" > <br>
		<input class="btn btn-outline-info" type="hidden" name="enviar">

				<a href="listas_encargados.php"> <button class="btn btn-outline-info" type="submit" name=""  >Mostrar todos los datos</button></a><br><br>
                <a href="../Encargados/pdf" <button class="btn btn-outline-info" type="submit"  name="" style=" margin-right:850px; ">Generar Reporte</button></a>
							<a href="registrar_encargados.php"> <button type="button" class="btn btn-outline-info" style="  margin-right:-100px; "  >Añadir </button></a>


	</form>
</div>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cargo</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Numero de Documento</th>
      <th scope="col">Tipo de Documento</th>
      <th scope="col">Lugar de Sede</th>
      <th scope="col">Telefono</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>

  	<?php
  	if (isset($_POST['enviar'])) {
      $buscador = $_POST['buscar'];
      $sql = "SELECT * FROM encargados WHERE NOMBRE_ENCARGADO LIKE '%$buscador%' OR ROL LIKE '%$buscador%' OR email LIKE '%$buscador%' OR numero_documento LIKE '%$buscador%' OR telefono LIKE '%$buscador%' ORDER BY ID_ENCARGADO ASC";
      $query = mysqli_query($con, $sql);
  
      if (mysqli_num_rows($query) > 0) {
          while ($row = mysqli_fetch_assoc($query)) {
  			?>
    <tr>
    <td>
     
      <?php echo $row['ID_ENCARGADO'] ?></td>
                <td><?php echo $row['NOMBRE_ENCARGADO'] ?></td>
                <td><?php echo $row['ROL'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['numero_documento'] ?></td>
                <td><?php echo $row['tipo_documento'] ?></td>
                <td><?php echo $row['lugar_sede'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td>
                    <a href="actualizar_encargados.php?id=<?php echo $row['ID_ENCARGADO'] ?>" class="btn btn-primary mb-5">Editar</a>
                    <a href="ListaEncargados/eliminar_encargados.php?id=<?php echo $row['ID_ENCARGADO'] ?>" class="btn btn-danger" onclick="return confirmDelete()">Eliminar</a>
                </td>
    </tr>
<?php
  }
} else {
    // Mensaje cuando no hay resultados
    echo "<tr><td colspan='9' class='text-center text-danger'><strong>No se encontraron resultados.</strong></td></tr>";
}
} else {
// Muestra todos los registros si no hay búsqueda
$sql = "SELECT * FROM encargados ORDER BY ID_ENCARGADO DESC";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($query)) {
  ?>
    <tr>
            <td><?php echo $row['ID_ENCARGADO'] ?></td>
            <td><?php echo $row['NOMBRE_ENCARGADO'] ?></td>
            <td><?php echo $row['ROL'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['numero_documento'] ?></td>
            <td><?php echo $row['tipo_documento'] ?></td>
            <td><?php echo $row['lugar_sede'] ?></td>
            <td><?php echo $row['telefono'] ?></td>
            <td>
    <div class="d-flex gap-2">
        <a href="actualizar_encargados.php?id=<?php echo $row['ID_ENCARGADO'] ?>" class="btn btn-primary">Editar</a>
        <a href="ListaEncargados/eliminar_encargados.php?id=<?php echo $row['ID_ENCARGADO'] ?>" class="btn btn-danger" onclick="return confirmDelete()">Eliminar</a>
    </div>
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
</body>
</html>


