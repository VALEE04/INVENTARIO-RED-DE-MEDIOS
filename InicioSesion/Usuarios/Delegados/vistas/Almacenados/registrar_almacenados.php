<!DOCTYPE html>
<html lang="en">

<head>
<title>Crear Dato Almacenado</title>
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

</head>
<!-- También puede utilizar dropdowns en su barra de navegación. Los dropdowns requieren un elemento de ajuste para el 
			posicionamiento, así que asegúrese de usar elementos separados y anidados para .nav-item y .nav-link como se muestra 
			a continuación. 
		-->
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
<!--------------------------------------------------------------------------------- -->
<body>
<br>
<div class="container">
  <div class="page-header">
    <h1 class="h3">Nuevo Articulo <a class="btn btn-secondary" href="listas_almacenados.php"> <span class="glyphicon glyphicon-eye-open"></span>Mostrar todo </a></h1>
  </div>
  <form action="../../php/guardar_almacenados.php"  method="post" enctype="multipart/form-data" class="form-horizontal">
    <table class="table table-bordered table-responsive">
    	<input type="hidden" name="ID_ALMACENADO">
      <tr>
        <td><label class="control-label">Articulo Nuevo:</label></td>
        <td><input class="form-control" type="text" align="center" placeholder="Nombre Articulo" name="NOMBRE_ALMACENADO" required ></td>
      </tr>
      <tr>
	  <label  type="text" class="CATEGORIA" name="CATEGORIA_NOMBRE" required >Categoria:
            <br> 
<select class="CATEGORIA" placeholder="Categoria" name="CATEGORIA_NOMBRE" required>
<option >Almacenado </option >
</select>
</label>

      </tr>
	  <br> 
	
      <tr>
	  <label  class="Cantidad">Cantidad de (1-100):


<input type="number" id="tentacles" name="CANTIDAD_ALMACENADO"  required
       min="1" max="100">
       </label>
	   <br> 
	 
	   <br> 
	   </tr>

	  <tr>
	  <td><label class="control-label">Serial:</label></td>
	  <td><input class="form-control" type="text" align="center" placeholder="Serial" name="SERIAL_ALMACENADO" maxlength="20" required ></td>
	  </tr>

	  
	  <tr>
        <td><label class="control-label">Observaciones:</label></td>
        <td><input class="form-control" type="text" align="center" placeholder="Observacion"name="OBSERV_ALMACENADO" maxlength="70" required ></td>
      </tr>

	  <tr>
	  <td><label class="control-label">Ingrese el Estado:</label></td>
	  <td><select class="form-control" type="text" align="center" placeholder="Estado" name="ESTADO">
			<option value="0">Seleccione el Estado</option>
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql="SELECT * FROM estados";
			$query=mysqli_query($con,$sql);
			while ($row=mysqli_fetch_array($query)) {
				echo '<option value="'.$row['ESTADOS'].'">'.$row['ESTADOS'].'</option>' ;
			}
			?>				
			</select></td>
	  </tr>
			<br>     

      
      <tr>
      <td><label class="control-label">Ingrese el Nodo o persona:</label></td>
      <td><select class="form-control" type="text" align="center" placeholder="Nodo" name="Nodos">
            <option value="0">Seleccione el nodo o persona</option>
            <?php
            include '../../conexionPDO.php';
            // GENERA CONSULTA PARA  MOSTRAR DATOS
            $sql="SELECT * FROM nodo";
            $query=mysqli_query($con,$sql);
            while ($row2=mysqli_fetch_array($query)) {
                echo '<option value="'.$row2['nodos'].'">'.$row2['nodos'].'</option>' ;
            }
            ?>              
            </select></td>
      </tr>
      <tr>

        <td colspan="2"><button type="submit" class="btn btn-primary">Guardar </button></td>
      </tr>
    </table>
  </form>
</body>
</html>
	
<footer class="main-footer">
		<strong >Copyright &copy; 2025 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer>
	
</body>

</html>