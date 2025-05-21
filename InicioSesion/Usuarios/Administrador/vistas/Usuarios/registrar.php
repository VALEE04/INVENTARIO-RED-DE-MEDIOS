<!DOCTYPE html>
<html lang="en">

<head>
<title>Crear cuenta</title>
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
                            <a class="dropdown-item" href="registrar.php?vista=user_new">Nuevo</a>
                            <a class="dropdown-item" href="listas.php?vista=user_list">Lista</a>
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










<script>
	
	$(document).ready(function(){
	 
	 $('#showPass').on('click', function(){
		var passInput=$("#passInput");
		if(passInput.attr('type')==='password')
		  {
			passInput.attr('type','text');
		}else{
		   passInput.attr('type','password');
		}
	})
   })
   </script>
   
   <script>
	$(document).ready(function(){
	 
	 $('#showPass2').on('click', function(){
		var passInput=$("#passInput2");
		if(passInput.attr('type')==='password')
		  {
			passInput.attr('type','text');
		}else{
		   passInput.attr('type','password');
		}
	})
   })
   </script>
   

<!--------------------------------------------------------------------------------------->


<body>
<br>
<div class="container">
  <div class="page-header">
    <h1 class="h3">Nuevo Usuario <a class="btn btn-secondary" href="listas.php"> <span class="glyphicon glyphicon-eye-open"></span>Mostrar todo </a></h1>
  </div>
    <?php
	if(isset($errMSG)){
			?>
  <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong> </div>
  <?php
	}
	else if(isset($successMSG)){
		?>
	<div class="alert alert-success"> <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong> </div>
  <?php
	}
	?>
  <form action="../../php/guardar_usuario.php" method="post" enctype="multipart/form-data" class="form-horizontal">
    <table class="table table-bordered table-responsive">
    	<input class="form-control" type="hidden" align="center" placeholder="Nombres" name="idUsuario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40"  >
      <tr>
        <td><label class="control-label">Nombres:</label></td>
        <td><input class="form-control" type="text" align="center" placeholder="Nombres" name="nombreUsuario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" ></td>
      </tr>
  
	  <tr>
	  <td><label class="control-label">Apellidos:</label></td>
	  <td><input class="form-control" type="text" align="center" placeholder="Apellidos"name="apellidoUsuario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required ></td>
	  </tr>

	  
	  <tr>
        <td><label class="control-label">Correo Electronico:</label></td>
        <td><input class="form-control" type="email" align="center" placeholder="Email"name="emailUsuario" maxlength="70" required ></td>
      </tr>

	  <tr>
	  <td><label class="control-label">Cargo:</label></td>
	  <td><select class="form-control" type="text" align="center" placeholder="Cargo" name="ID_CARGO">
			<option value="0">Seleccione Cargo</option>
			<?php
			session_start();
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql="SELECT * FROM cargo";
			$query=mysqli_query($con,$sql);
			while ($row=mysqli_fetch_array($query)) {
				echo '<option value="'.$row['ID_CARGO'].'">'.$row['ID_CARGO'].'</option>' ;
			}
			?>				
			</select></td>
	  </tr>
			<br>     

      <tr>
        <td><label class="control-label">Usuario:</label></td>
        <td><input class="form-control" type="text" align="center" placeholder="Usuario" name="usuarioUsuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required ></td>
      </tr>


      <tr>
        <td><label class="control-label">Contraseña:</label><br><br>
        <label class="control-label">Repetir Contraseña:</label></td>
        <td>
        	<input class="forget-password"id="passInput" type="password" align="center" placeholder="Clave" name="usuarioClave" maxlength="100" required >
		
			<svg id=clickme width=20 height=20 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"id="showPass"/></svg>

			<br><br>
			<input class="forget-password"id="passInput2" type="password" align="center" placeholder="Clave" name="usuarioClave2" maxlength="100" required >
			
		</td>
      </tr>
      <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-primary"> <span class="glyphicon glyphicon-save"></span>Guardar  </button></td>
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



