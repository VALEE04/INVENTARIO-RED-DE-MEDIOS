<?php
try{
        
    $con = new PDO('mysql:host=localhost; dbname=inventario','root', '' );

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $con->exec("SET CHARACTER SET UTF8");
    echo "conectado!!";
} catch(PDOException $th){ 
    die('Error en la conexion' . $th->getMessage());
}
?>

<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli = new mysqli("localhost","root","","inventario"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>