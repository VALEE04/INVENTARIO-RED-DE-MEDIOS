<?php
session_start();
include '../../conexionPDO.php';
// GENERA CONSULTA PARA MODIFICAR LOS DATOS
$id=$_GET['id'];
$sql="SELECT * FROM encargados WHERE ID_ENCARGADO='".$id."'";
$query=mysqli_query($con,$sql);
			
$row=mysqli_fetch_assoc($query);

if (isset($_POST['modificar'])) {
	//RECUPERAR LOS DATOS QUE ESTAN EN EL FORMULARIO.
$ID_ENCARGADO=$_POST['ID_ENCARGADO'];
$NOMBRE_ENCARGADO=$_POST['NOMBRE_ENCARGADO'];
$ROL=$_POST['ROL'];
$email=$_POST['email'];
$numero_documento=$_POST['numero_documento'];
$tipo_documento=$_POST['tipo_documento'];
$lugar_sede=$_POST['lugar_sede'];
$telefono=$_POST['telefono'];

	//REALIZAR LA CONSULTA PARA MODIFICAR LOS DATOS.
		$sql="UPDATE encargados SET NOMBRE_ENCARGADO='$NOMBRE_ENCARGADO',ROL='$ROL',email='$email',numero_documento='$numero_documento',tipo_documento='$tipo_documento',lugar_sede='$lugar_sede',telefono='$telefono' WHERE ID_ENCARGADO='$ID_ENCARGADO'";
		$query=mysqli_query($con,$sql);
		if ($query) {
			?>
    <script>
            alert('Encargado actualizado correctamente ...');
            window.location.href='listas_encargados.php';
            </script>
    <?php
		}else{
			?>
    <script>
            alert('No se puede actualizar el encargado por que algun dato ya existe, intente nuevamente.');
            window.location.href='';
            </script>
    <?php
		}
 }

?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Actualizar Encargado</title>
<!-- Required meta tags -->
<!-- Required meta tags -->
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="../css/style.css">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listas</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="../vistas/Categoria/cate_nuevo.php?vista=user_list">Categoria</a>
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
	<body>

<div class="container">
  <div class="page-header">
  	<br>
    <h1 class="h3">Actualizar Encargados <a class="btn btn-secondary" href="listas_encargados.php"><bt><span class="glyphicon glyphicon-eye-open"></span>Mostrar todo </a></h1>
  </div>
  
  <form method="post" enctype="multipart/form-data" class="form-horizontal">
    <table class="table table-bordered table-responsive">
	<input class="cer0" type="hidden" name="ID_ENCARGADO" readonly value="<?php echo $row['ID_ENCARGADO']  ?>">
      <tr>
        <td><label class="control-label">Nombre Completo:</label></td>
        <td><input class="form-control" type="text"  placeholder="Nombres Encargado" name="NOMBRE_ENCARGADO"  value="<?php echo $row['NOMBRE_ENCARGADO']  ?>" required ></td>
      </tr>
  
	  <tr>
	  <td><label class="control-label">Rol:</label></td>
	  <td><select class="form-control" type="text" align="center" placeholder="Rol" name="ROL">
			<option value="<?php echo $row['ROL']  ?>"><?php echo $row['ROL']  ?></option>
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql1="SELECT * FROM rol";
			$query1=mysqli_query($con,$sql1);
			while ($row1=mysqli_fetch_array($query1)) {
				echo '<option value="'.$row1['ROL'].'">'.$row1['ROL'].'</option>' ;
			}
			?>				
			</select></td> 
	  </tr>

	  
	  <tr>
        <td><label class="control-label">Correo Electronico:</label></td>
        <td><input class="form-control" type="email"  placeholder="Correo Electronico" name="email"  value="<?php echo $row['email']  ?>" required ></td>
      </tr>

	  <tr>
	  <td><label class="control-label">Tipo de Documento:</label></td>
	  <td><select class="form-control" type="text" align="center" placeholder="Tipo Docuemento" name="tipo_documento">
			<option value="<?php echo $row['tipo_documento']?>"><?php echo $row['tipo_documento']?></option>
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql2="SELECT * FROM documentotipo";
			$query2=mysqli_query($con,$sql2);
			while ($row2=mysqli_fetch_array($query2)) {
				echo '<option value="'.$row2['tipo_documento'].'">'.$row2['tipo_documento'].'</option>' ;
			}
			?>				
			</select></td>
	  </tr>
			<br>     

      <tr>
        <td><label class="control-label">Numero de Documento:</label></td>
        <td><input class="form-control" type="text"  placeholder="Numero de Documento" name="numero_documento" value="<?php echo $row['numero_documento']  ?>" required ></td>
      </tr>

      <tr>
        <td><label class="control-label">Lugar de Sede:</label></td>
        <td><input class="form-control" type="text"  placeholder="Lugar de Sede" name="lugar_sede" value="<?php echo $row['lugar_sede']  ?>" required ></td>
      </tr>

      <tr>
        <td><label class="control-label">Telefono:</label></td>
        <td><input class="form-control" type="text" placeholder="Telefono" name="telefono" value="<?php echo $row['telefono']  ?>" required ></td>
      </tr>



      <tr>
        <td colspan="2"><input type="submit" class="btn btn-primary" value="Actualizar" name="modificar" ></td>

        
      </tr>
      
    </table>
  </form>


		
</div>

	<footer class="main-footer">
		<strong >Copyright &copy; 2025 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer>
	
</body>

<!-------------------------------------------------------------------------------------->



</html>