<?php
session_start();
include '../../conexionPDO.php';
// GENERA CONSULTA PARA MODIFICAR LOS DATOS
$id=$_GET['id'];
$sql="SELECT * FROM usuarios WHERE nombreUsuario='".$id."'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($query);

if (isset($_POST['modificar'])) {
	// RECUPERAR LOS DATOS DEL FORMULARIO
	$idUsuario=$_POST['idUsuario'];
	$nombreUsuario=$_POST['nombreUsuario'];
	$apellidoUsuario=$_POST['apellidoUsuario'];
	$ID_CARGO=$_POST['ID_CARGO'];
	$emailUsuario=$_POST['emailUsuario'];
	$usuarioUsuario=$_POST['usuarioUsuario'];
	$usuarioClave=$_POST['usuarioClave'];
	$usuarioClave2=$_POST['usuarioClave2'];

	if ($usuarioClave == $usuarioClave2) {
		$sql="UPDATE usuarios SET nombreUsuario='$nombreUsuario',apellidoUsuario='$apellidoUsuario',ID_CARGO='$ID_CARGO',emailUsuario='$emailUsuario', usuarioUsuario='$usuarioUsuario',usuarioClave='$usuarioClave',usuarioClave2='$usuarioClave2' WHERE idUsuario='$idUsuario'";
		$query=mysqli_query($con,$sql);
		if ($query) {
			?>
			<script>
				alert('Usuario actualizado correctamente ...');
				window.location.href='../Usuarios/listas.php';
			</script>
	<?php
		}else{
			?>
			<script>
				alert('El usuario no se puede actualizar, puede que los datos ingresados ya esten creados, intente nuevamente.');
				window.location.href='';
			</script>
	<?php
		}
	}else{
		?>
			<script>
				alert('El usuario no se pudo actualizar, verifique que las contraseñas sean iguales.');
				window.location.href='../Usuarios/listas.php';
			</script>
	<?php
	}
}
?>
<html lang="en">

<head>
<title>Actualizar Usuario</title>
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
<body>
	<div class="container">
  <div class="page-header">
  	<br>
  	<br>
    <h1 class="h3">Actualizar Usuario <a class="btn btn-secondary" href="listas.php"> <span class="glyphicon glyphicon-eye-open"> </span> Mostrar todo </a></h1>
  </div>
	<p class="sign fw-bold fs-4 text-center pt-3"></p>
		<form action="" method="POST" class="FormularioAjax" autocomplete="off" >
		<table class="table table-bordered table-responsive">
			<input class="uno1" type="hidden" name="idUsuario" value="<?php echo $row['idUsuario']  ?>">
		<tr>
			<td><label class="control-label">Nombre Completo:</label></td>
			<td><input class="form-control" type="text" placeholder="Nombres" name="nombreUsuario" value="<?php echo $row['nombreUsuario']  ?>"  required ></td>
		</tr>

		<tr>
			<td><label class="control-label">Apellido Completo:</label></td>
			<td><input class="form-control" type="text" align="center" placeholder="Apellidos"name="apellidoUsuario" value="<?php echo $row['apellidoUsuario']  ?>" required ></td>
		</tr>
		<tr>
			<td><label class="control-label">Email:</label></td>
			<td><input class="form-control" type="email" align="center" placeholder="Email"name="emailUsuario" value="<?php echo $row['emailUsuario']  ?>" required ></td>
		</tr>
		<tr>
			<td><label class="control-label">Cargo:</label></td>
			<td><select class="form-control" type="text" align="center" placeholder="Cargo" name="ID_CARGO">
			<option value="<?php echo $row['ID_CARGO']?>"><?php echo $row['ID_CARGO']?></option>
			<?php
			session_start();
			include '../../conexionPDO.php';
			// GENERA CONSULTA PARA  MOSTRAR DATOS
			$sql="SELECT * FROM cargo";
			$query=mysqli_query($con,$sql);
			while ($row1=mysqli_fetch_array($query)) {
				echo '<option value="'.$row1['ID_CARGO'].'">'.$row1['ID_CARGO'].'</option>' ;
			}
			?>
			</select></td>
		</tr>
		</table>
	<div class="main" style="width: 700px; height: 450px ;">
			<br>
		
			<label class="seis">Nombre de Usuario:</label>
			<input class="seis" type="text" align="center" placeholder="Usuario" name="usuarioUsuario" value="<?php echo $row['usuarioUsuario']  ?>"  required >
			<label class="seis">Contraseña:</label>
			<input class="seis"id="passInput" type="password" align="center" placeholder="Clave" name="usuarioClave" value="<?php echo $row['usuarioClave']  ?>" required >

		
			<svg id=clickme width=20 height=20 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"id="showPass"/></svg>

			<br>
			<label class="seis">Repetir Contraseña:</label><br>
			<input class="seis"id="passInput2" type="password" align="center" placeholder="Repetir Clave" name="usuarioClave2" value="<?php echo $row['usuarioClave2']  ?>"  required >

			<svg id=clickme width=20 height=20 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"id="showPass2"/></svg>

                 
			<button type="submit" class="btn btn-primary" name="modificar" style="margin-top:30px; margin-left:120px;">  Actualizar </button>

			
		</form>
		<button type="reset" value="Borrar" class="btn btn-secondary" style="margin-top:30px; margin-left:20px;">Borrar </button>
	</div>
</div>
</body>
</html>