
<?php
include 'conexionPDO.php';
$sql="SELECT * FROM usuarios;";
$usuarioUsuario = $_POST['usuarioUsuario'];
$usuarioClave = $_POST['usuarioClave'];
session_start();
$_SESSION['usuarioUsuario'] = $usuarioUsuario;

$sql1="SELECT * FROM usuarios WHERE usuarioUsuario='$usuarioUsuario' and usuarioClave='$usuarioClave' and ID_CARGO =1";
$query1=mysqli_query($con,$sql1);

$row1=mysqli_fetch_array($query1);

$sql2="SELECT * FROM usuarios WHERE usuarioUsuario='$usuarioUsuario' and usuarioClave='$usuarioClave' and ID_CARGO =2";
$query2=mysqli_query($con,$sql2);

$row2=mysqli_fetch_array($query2);

$sql3="SELECT * FROM usuarios WHERE usuarioUsuario='$usuarioUsuario' and usuarioClave='$usuarioClave' and ID_CARGO =3";
$query3=mysqli_query($con,$sql3);

$row3=mysqli_fetch_array($query3);

if ($row1 && $sql1) {
    ?>
    <script>
            alert('Bienvenido Administrador.');
            window.location.href='Usuarios/Administrador/index.php';
            </script>
    <?php 
    
} elseif ($row2 && $sql2) {
    ?>
    <script>
            alert('Bienvenido Delegado.');
            window.location.href='Usuarios/Delegados/index.php';
            </script>
    <?php 
} elseif ($row3 && $sql3) {
    ?>
    <script>
            alert('Bienvenido Aprendiz.');
            window.location.href='Usuarios/Aprendiz/index.php';
            </script>
    <?php 
}
else{
    ?>
    <script>
            alert('Usuario y contraseña incorrectos.');
            window.location.href='../index.php';
            </script>
    <?php   
    ?>
   
<?php
}
mysqli_free_result($query1);
mysqli_free_result($query2);
mysqli_free_result($query3);
mysqli_close($con);
?>