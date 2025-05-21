<?php
session_start();
include '../../conexionPDO.php';
// GENERA CONSULTA PARA MODIFICAR LOS DATOS
$id=$_GET['id'];
$sql="SELECT * FROM prestamo WHERE ID_FECHA='".$id."'";
$query=mysqli_query($con,$sql);
			
$row=mysqli_fetch_assoc($query);

if (isset($_POST['modificar'])) {
	//RECUPERAR LOS DATOS QUE ESTAN EN EL FORMULARIO.
$ID_FECHA = $_POST['ID_FECHA'];
$ARTICULO_PRESTAMO=$_POST['NOMBRE_ALMACENADO'];
$FECHA_ENTREGA=$_POST['FECHA_ENTREGA'];
$ESTADO_ENTREGA=$_POST['ESTADO_ENTREGA'];
$FECHA_SALIDA=$_POST['FECHA_SALIDA'];
$ESTADO_SALIDA=$_POST['ESTADO_SALIDA'];
$NOMBRE_ENCARGADO=$_POST['NOMBRE_ENCARGADO'];
$ROL=$_POST['ROL'];
$nodo=$_POST['Nodos'];

	//REALIZAR LA CONSULTA PARA MODIFICAR LOS DATOS.
		$sql="UPDATE prestamo SET NOMBRE_ALMACENADO='$ARTICULO_PRESTAMO',FECHA_ENTREGA='$FECHA_ENTREGA',ESTADO_ENTREGA='$ESTADO_ENTREGA',FECHA_SALIDA='$FECHA_SALIDA',ESTADO_SALIDA='$ESTADO_SALIDA',NOMBRE_ENCARGADO='$NOMBRE_ENCARGADO',ROL='$ROL', nodo = '$nodo' WHERE ID_FECHA='$ID_FECHA'";
		$query=mysqli_query($con,$sql);
		if ($query) {

			?>
	<script>
			alert('Prestamo actualizado correctamente');
			window.location.href='listas_prestamos.php';
			</script>
	<?php
		}else{
			?>
	<script>
			alert('El prestamo ya este hecho, intente nuevamente.');
			window.location.href='';
			</script>
	<?php
		}
 }

?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Actualizar Prestamo</title>
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
    <h1 class="h3">Actualizar Prestamo <a class="btn btn-secondary" href="listas_prestamos.php"><bt><span class="glyphicon glyphicon-eye-open"></span> &nbsp; Mostrar todo </a></h1>
  </div>
  
  <form method="post" enctype="multipart/form-data" class="form-horizontal">
    <table class="table table-bordered table-responsive">
    	<input type="hidden" name="ID_FECHA" value="<?php echo $row['ID_FECHA']  ?>">
      <tr>
        <td><label class="control-label">Articulo:</label></td>
        <td><select class="form-control" type="text" align="center" placeholder="Nombre Almacenado" name="NOMBRE_ALMACENADO">
			<option value="<?php echo $row['NOMBRE_ALMACENADO']  ?>"><?php echo $row['NOMBRE_ALMACENADO']?></option>
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql1="SELECT * FROM almacenado";
			$query1=mysqli_query($con,$sql1);
			while ($row1=mysqli_fetch_array($query1)) {
				echo '<option value="'.$row1['NOMBRE_ALMACENADO'].'">'.$row1['NOMBRE_ALMACENADO'].'</option>' ;
			}
			?>				
			</select></td>
      </tr>
      <tr>
        <td><label class="control-label">Ingrese el nodo:</label></td>
        <td><select class="form-control" type="text" align="center" placeholder="Nodo" name="Nodos">
            <option value="<?php echo $row['nodo']  ?>"><?php echo $row['nodo']  ?></option>
            <?php
            include '../../conexionPDO.php';
            // GENERA CONSULTA PARA  MOSTRAR DATOS
            $sql4="SELECT * FROM nodo";
            $query4=mysqli_query($con,$sql4);
            while ($row4=mysqli_fetch_array($query4)) {
                echo '<option value="'.$row4['nodos'].'">'.$row4['nodos'].'</option>' ;
            }
            ?>              
            </select></td>
      </tr>
	  <tr>
	  <td><label class="control-label">Fecha Entrega:</label></td>
	  <td><input class="form-control" type="date" align="center" placeholder="Fecha Entrega" name="FECHA_ENTREGA" value="<?php echo $row['FECHA_ENTREGA']  ?>"  required ></td> 
	  </tr>

	  
	  <tr>
        <td><label class="control-label">Estado Entrega:</label></td>
        <td><input class="form-control" type="text" align="center" placeholder="Estado Entrega" name="ESTADO_ENTREGA" value="<?php echo $row['ESTADO_ENTREGA']  ?>"  required ></td>
      </tr>

	  <tr>
	  <td><label class="control-label">Fecha Salida:</label></td>
	  <td><input class="form-control" type="date" align="center" placeholder="Fecha Salida" name="FECHA_SALIDA" value="<?php echo $row['FECHA_SALIDA']  ?>"  required ></td>
	  </tr>
			<br>     

      <tr>
        <td><label class="control-label">Estado Salida:</label></td>
        <td><input class="form-control" type="text" align="center" placeholder="Estado Salida" name="ESTADO_SALIDA" value="<?php echo $row['ESTADO_SALIDA']  ?>"  required ></td>
      </tr>

      <tr>
        <td><label class="control-label">Nombre Encargado:</label></td>
        <td><select class="form-control" type="text" align="center" placeholder="Nombre Encargado" name="NOMBRE_ENCARGADO">
			<option value="<?php echo $row['NOMBRE_ENCARGADO']?>"><?php echo $row['NOMBRE_ENCARGADO']?></option>
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql2="SELECT * FROM encargados";
			$query2=mysqli_query($con,$sql2);
			while ($row2=mysqli_fetch_array($query2)) {
				echo '<option value="'.$row2['NOMBRE_ENCARGADO'].'">'.$row2['NOMBRE_ENCARGADO'].'</option>' ;
			}
			?>				
			</select></td>
      </tr>

      <tr>
        <td><label class="control-label">Cargo:</label></td>
        <td><select class="form-control" type="text" align="center" placeholder="Rol" name="ROL">
			<option value="<?php echo $row['ROL']?>"><?php echo $row['ROL']?></option>
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql3="SELECT * FROM rol";
			$query3=mysqli_query($con,$sql3);
			while ($row3=mysqli_fetch_array($query3)) {
				echo '<option value="'.$row3['ROL'].'">'.$row3['ROL'].'</option>' ;
			}
			?>				
			</select></td>
      </tr>



      <tr>
        <td colspan="2"><button type="submit" value="Actualizar" name="modificar" class="btn btn-primary">Actualizar</button></td>

        
      </tr>
      
    </table>
  </form>


<!-- Latest compiled and minified JavaScript --> 
<script src="bootstrap/js/bootstrap.min.js"></script>

<footer class="main-footerART" align="center">
		<strong class="escrito1" >Copyright &copy; 2025 <a class="escrito" href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer> 
</body>

			
			</form>
			



</html>