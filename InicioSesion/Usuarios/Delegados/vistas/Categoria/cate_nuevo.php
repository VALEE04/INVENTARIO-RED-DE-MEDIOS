<!DOCTYPE html>
<html lang="en">

<head>

		<title>Registrar Categorias</title>
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

                </ul>
            </div>
            
            <a href="../../../../../index.php"><button type="button" class="btn btn-secondary" style=" margin-top:-5px; margin-right:100px; ">Cerrar sesi&oacute;n</button> </a>
    </div>
    </div>
    </div>
    </div>
    </nav>
</header>

<!------------------------------------------------------------------------------------>


<body>

<div class="container">
  <div class="page-header">
  	<br>	
    <h1 class="h3">Nuevas Categorias 
  </div>
  <form action="" method="post" >
    <table class="table table-bordered table-responsive">
    	<input type="hidden" name="ID_CATEGORIA">
      <tr>
        <td><label class="control-label">Nombre de la categoria:</label></td>
        <td><input class="form-control" type="text" name="CATEGORIA_NOMBRE" align="center" placeholder="Nombre de la Categoria" required></td>
      </tr>

      <tr>
        <td><label class="control-label">Grupo:</label></td>
        <td><input class="form-control" type="text" name="NODO" align="center" placeholder="Grupo" required> </td>
      </tr>
	  <tr>
        <td><label class="control-label">Area de texto:</label></td>
        <td><textarea class="form-control"  name="DESCRIPCION" rows="3" placeholder="Descripcion"></textarea> </td>
      </tr>
      <tr>
        <td><label class="control-label">Cantidad:</label></td>
        <td><input class="form-control"  type="number"  name="CANTIDAD" align="center"  placeholder="Cantidad"required> </td>
      </tr>

      <tr>
        <td colspan="2"><button type="submit" name="register" class="btn btn-primary" >Guardar </button>
		</td>
      </tr>
    </table>
  </form>


<!-- Latest compiled and minified JavaScript --> 



</body>





<footer class="main-footer">
		<strong >Copyright &copy; 2025 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer>



</html>


<!-- <input class="cuatro" type="email" align="center" placeholder="Categoria">  -->
<br> <br>
			<!-- <div class="casilla">
    <label class="label" for=""></label>
    <img src="{{ asset('imagesproducto/')}}" alt="">
    <input class="espacio" type="file" name="imagen"required>
</div> -->
<?php
include '../../conexionPDO.php';

if (isset($_POST['register'])) {
    if (strlen($_POST['CATEGORIA_NOMBRE']) >= 1 && strlen($_POST['NODO']) >=1 &&  strlen($_POST['DESCRIPCION']) >=1 && strlen($_POST['CANTIDAD'])){ 

        $CATEGORIA_NOMBRE = trim($_POST['CATEGORIA_NOMBRE']);
        $NODO = trim($_POST['NODO']);
        $DESCRIPCION = trim($_POST['DESCRIPCION']);
        $CANTIDAD = trim($_POST['CANTIDAD']);

        // Verificar si la categoría ya existe
        $check_query = "SELECT * FROM categoria WHERE CATEGORIA_NOMBRE='$CATEGORIA_NOMBRE'";
        $check_result = mysqli_query($con, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            echo '<script type="text/javascript"> alert("La categoría ya existe, por favor elija otro nombre.")</script>';
        } else {
            $consulta = "INSERT INTO categoria (CATEGORIA_NOMBRE,NODO,DESCRIPCION,CANTIDAD) VALUES ('$CATEGORIA_NOMBRE','$NODO','$DESCRIPCION','$CANTIDAD')";
            $resultado = mysqli_query($con,$consulta);

            if ($resultado) { 
                echo '<script type="text/javascript"> alert("SE REGISTRO LA CATEGORIA CON EXITO!")</script>';
                echo "<script> window.location.href = 'cate_nuevo.php';</script>";
            } else {
                echo '<script type="text/javascript"> alert("NO SE REGISTRO LA CATEGORIA")</script>';
                echo "<script> window.location.href = 'cate_nuevo.php';</script>";
            }
        }
    } else {
        echo '<h3 class="bad">Complete los campos</h3>';
    }
}
?>


