<?php
session_start();
include '../../conexionPDO.php';
// GENERA CONSULTA PARA MODIFICAR LOS DATOS
$id=$_GET['id'];
$sql="SELECT * FROM cables WHERE ID_CABLE='".$id."'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($query);

if (isset($_POST['modificar'])) {
	//RECUPERAR LOS DATOS QUE ESTAN EN EL FORMULARIO.
	$id = $_POST['ID_CABLE'];
	$tipo_cable = $_POST['TIPO_CABLE'];
	$categoria_cable = $_POST['CATEGORIA_NOMBRE'];
	$cantidad_cable = $_POST['CANTIDAD'];

	//REALIZAR LA CONSULTA PARA MODIFICAR LOS DATOS.
	$sql="UPDATE cables SET  TIPO_CABLE='$tipo_cable',CATEGORIA_NOMBRE='$categoria_cable',CANTIDAD='$cantidad_cable' WHERE ID_CABLE= '$id'";
   	$query=mysqli_query($con,$sql);
   	if ($query) {
   		?>
    <script>
            alert('Cable actualizado correctamente ...');
            window.location.href='listas_cables.php';
    </script>
    <?php
   	}else{
        ?>
    <script>
            alert('No se pudo actualizar el cable porque ya existe, intente nuevamente.');
            window.location.href='';
    </script>
    <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Actualizar Cable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>

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
<br>
<div class="container">
  <div class="page-header">
    <h1 class="h3">Actualizar Cables <a class="btn btn-secondary" href="listas_cables.php"> <span class="glyphicon glyphicon-eye-open"></span>Mostrar todo </a></h1>
  </div>
  <form method="post" enctype="multipart/form-data" class="form-horizontal">
    <table class="table table-bordered table-responsive">
        <input class="cer0" type="hidden" name="ID_CABLE" value="<?php echo $row['ID_CABLE']?>">
      <tr>
        <td><label class="control-label">Descripcion:</label></td>
        <td><input class="form-control " type="text"  placeholder="Tipo de Cable" name="TIPO_CABLE" value="<?php echo $row['TIPO_CABLE']  ?>" required ></td>
      </tr>
      <tr>
      <label type="text" class="CATEGORIA" name="CATEGORIA_NOMBRE" required >Categoria:
        <br> 
        <select class="CATEGORIA" name="CATEGORIA_NOMBRE" required>
          <option value="<?php echo $row['CATEGORIA_NOMBRE'] ?> " ><?php echo $row['CATEGORIA_NOMBRE'] ?> </option>
        </select>
      </label>
      </tr>
      <br> 
      <tr>
      <label class="Cantidad">Cantidad de (1-100):
        <input type="number" id="tentacles" name="CANTIDAD" required min="1" max="100" value="<?php echo $row['CANTIDAD']?>">
      </label>
      <br> 
      <br> 
      </tr>
      <tr>
        <td colspan="2"><input type="submit" class="btn btn-primary" value="Actualizar" name="modificar"></td>
      </tr>
    </table>
  </form>

<script src="bootstrap/js/bootstrap.min.js"></script>
<footer class="main-footerART" align="center">
    <strong class="escrito1">Copyright &copy; 2025 <a class="escrito" href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
</footer> 
</body>
</html>
