<!DOCTYPE html>
<html lang="en">

<head>
<title>Nuevo Articulo</title>
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

<!-------------------------------------------------------------------------------------------->







<body>
<br>
<div class="container">
  <div class="page-header">
    <h1 class="h3">Nuevo Articulo: <a class="btn btn-secondary" href="listas_articulos.php"> <span class="glyphicon glyphicon-eye-open"></span>  Mostrar todo</a></h1>
  </div>
  <form action="../../php/guardar_articulos.php" method="post" enctype="multipart/form-data" class="form-horizontal">
    <table class="table table-bordered table-responsive">
    	<input type="hidden" name="ID_ARTICULOS">
      <tr>
        <td><label class="control-label">Serial:</label></td>
        <td><input class="form-control" type="text" align="center" placeholder="Serial" name="REFERENCIASERIAL"  required ></td>
      </tr>
      <tr>
	  <label  type="text" class="CATEGORIA" name="CATEGORIA_NOMBRE" required >Categoria:
            <br> 
<select class="CATEGORIA" placeholder="Categoria" name="CATEGORIA_NOMBRE" required>
<option >Articulos </option >
</select>
<br>
</label>

      </tr>
	  <br>
	  <tr>
	  <td><label class="control-label">Marca:</label></td>
	  <td><input class="form-control" type="text" align="center" placeholder="Marca" name="NOMBRE_MARCA"  required ></td>
	  </tr>

	  <tr>
	  <td><label class="control-label">Placa:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese la Placa" name="PLACA" >
	  <option value="no aplica"> ¿Tiene Placa?:  </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql1="SELECT * FROM desicion";
			$query1=mysqli_query($con,$sql1);
			while ($row1=mysqli_fetch_array($query1)) {
				echo '<option value="'.$row1['respuesta'].'">'.$row1['respuesta'].'</option>' ;
			}
			?>				
			</select>
	  </tr>

	  
	  <tr>
	  <td><label class="control-label">Guaya:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese la Guaya" name="GUAYA">
	  <option value="no aplica"> ¿Tiene Guaya?:  </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql2="SELECT * FROM desicion";
			$query2=mysqli_query($con,$sql2);
			while ($row2=mysqli_fetch_array($query2)) {
				echo '<option value="'.$row2['respuesta'].'">'.$row2['respuesta'].'</option>' ;
			}
			?>				
			</select>
	  </tr>

	 
	  <tr>
	  <td><label class="control-label">Mouse:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese el Mouse" name="MOUSE">
	  <option value="no aplica"> ¿Tiene Mouse?:  </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql3="SELECT * FROM desicion";
			$query3=mysqli_query($con,$sql3);
			while ($row3=mysqli_fetch_array($query3)) {
				echo '<option value="'.$row3['respuesta'].'">'.$row3['respuesta'].'</option>' ;
			}
			?>				
			</select>
	  </tr>


	  <tr>
	  <td><label class="control-label">Mousepad:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese el Mouse" name="MOUSEPAD">
	  <option value="no aplica"> ¿Tiene MousePad?:  </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql4="SELECT * FROM desicion";
			$query4=mysqli_query($con,$sql4);
			while ($row4=mysqli_fetch_array($query4)) {
				echo '<option value="'.$row4['respuesta'].'">'.$row4['respuesta'].'</option>' ;
			}
			?>				
			</select>
	  </tr>


	  <tr>
	  <td><label class="control-label">Memoria:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese la Memoria" name="MEMORIA">
	  <option value="no aplica"> ¿Tiene Memoria?: </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql5="SELECT * FROM desicion";
			$query5=mysqli_query($con,$sql5);
			while ($row5=mysqli_fetch_array($query5)) {
				echo '<option value="'.$row5['respuesta'].'">'.$row5['respuesta'].'</option>' ;
			}
			?>				
			</select>
	  </tr>


	  <tr>
	  <td><label class="control-label">lápiz:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese el LAPIZ" name="LAPIZ">
			<option value="no aplica"> ¿Tiene Lapiz?:  </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql6="SELECT * FROM desicion";
			$query6=mysqli_query($con,$sql6);
			while ($row6=mysqli_fetch_array($query6)) {
				echo '<option value="'.$row6['respuesta'].'">'.$row6['respuesta'].'</option>' ;
			}
			?>				
			</select>
	  </tr>
	 
	  <tr>
	  <td><label class="control-label">Adaptador de poder:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese el Adaptador de poder" name="ADAPTADOR_PODER">
	  <option value="no aplica"> ¿Tiene Adaptador?: </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql7="SELECT * FROM desicion";
			$query7=mysqli_query($con,$sql7);
			while ($row7=mysqli_fetch_array($query7)) {
				echo '<option value="'.$row7['respuesta'].'">'.$row7['respuesta'].'</option>' ;
			}
			?>				
			</select>
	  </tr>
	 

	  <tr>
	  <td><label class="control-label">Cable de poder:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese el Cable de poder" name="CABLE_PODER">
	  <option value="no aplica"> ¿Tiene Cable?:  </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql8="SELECT * FROM desicion";
			$query8=mysqli_query($con,$sql8);
			while ($row8=mysqli_fetch_array($query8)) {
				echo '<option value="'.$row8['respuesta'].'">'.$row8['respuesta'].'</option>' ;
			}
			?>				
			</select>
	  </tr>
	 

	  <tr>
	  <td><label class="control-label">Cargador:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese el Cargador" name="CARGADOR">
	  <option value="no aplica">¿Tiene Cargador?:</option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql9="SELECT * FROM desicion";
			$query9=mysqli_query($con,$sql9);
			while ($row9=mysqli_fetch_array($query9)) {
				echo '<option value="'.$row9['respuesta'].'">'.$row9['respuesta'].'</option>' ;
			}
			?>				
			</select>
	  </tr>

	  <tr>
	  <td><label class="control-label">Bateria:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese la Bateria" name="BATERIA">
	  <option value="no aplica"> ¿Tiene Bateria?: </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql10="SELECT * FROM desicion";
			$query10=mysqli_query($con,$sql10);
			while ($row10=mysqli_fetch_array($query10)) {
				echo '<option value="'.$row10['respuesta'].'">'.$row10['respuesta'].'</option>' ;
			}
			?>				
			</select>
	  </tr>



	  <tr>
	  <td><label class="control-label">Estado:</label></td >
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese el estado" name="ESTADO" required>
			<option value="no aplica"> Estado: </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql11="SELECT * FROM estados";
			$query11=mysqli_query($con,$sql11);
			while ($row11=mysqli_fetch_array($query11)) {
				echo '<option value="'.$row11['ESTADOS'].'">'.$row11['ESTADOS'].'</option>' ;
			}
			?>				
			</select>
	  </tr>

	  <tr>
	  <td><label class="control-label">Mantenimiento a realizar:</label></td required>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese el estado" name="MANT_REALIZAR" required>
			<option value="no aplica"> Mantenimiento: </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql12="SELECT * FROM mantenimiento";
			$query12=mysqli_query($con,$sql12);
			while ($row12=mysqli_fetch_array($query12)) {
				echo '<option value="'.$row12['tipo_mantenimiento'].'">'.$row12['tipo_mantenimiento'].'</option>' ;
			}
			?>				
			</select>
	  </tr>
	  
	  <tr>
        <td><label class="control-label">Observaciones:</label></td>
        <td><input class="form-control" type="text" name="OBSERV_ESTADO" placeholder="Ingrese las observaciones "required></td>
      </tr>
      <tr>


	<!-- <tr>nombre del encargado -->
	<td><label class="control-label">Nombre del encargado:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="Ingrese el nombre del encargado" name="NOMBRE_ENCARGADO" required>>
	  <option value="no aplica">Encargado: </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql13="SELECT * FROM encargados";
			$query13=mysqli_query($con,$sql13);
			while ($row13=mysqli_fetch_array($query13)) {
				echo '<option value="'.$row13['NOMBRE_ENCARGADO'].'">'.$row13['NOMBRE_ENCARGADO'].'</option>' ;
			}
			?>				
			</select>
	  </tr>

	   <!-- <tr>CARGO -->
	   <tr>
	   <td><label class="control-label">Cargo:</label></td>
	  <td> <select class="form-control" type="text" align="center" placeholder="ingrese el Cargo" name="ROL" required>>
	  <option value="no aplica"> Cargo: </option>   
			<?php
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql14="SELECT * FROM rol";
			$query14=mysqli_query($con,$sql14);
			while ($row14=mysqli_fetch_array($query14)) {
				echo '<option value="'.$row14['ROL'].'">'.$row14['ROL'].'</option>' ;
			}
			?>				
			</select></td>
	  </tr>

	  <tr>
	  <td><label class="control-label">Ingrese la fecha:</label></td>
	  <td><input class="form-control" type="date" align="center" placeholder="Ingrese la Fecha de revision"name="FECHA_REVISION" maxlength="70" required ></td>
	  </tr>

      <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary" >Guardar </button></td>
      </tr>
    </table>
  </form>


<!-- Latest compiled and minified JavaScript --> 
<script src="bootstrap/js/bootstrap.min.js"></script>

<footer class="main-footerART" align="center">
		<strong class="escrito1" >Copyright &copy; 2025<a class="escrito" href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer> 

</body>

</html>



