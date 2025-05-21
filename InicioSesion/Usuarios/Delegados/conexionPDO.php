<?php
$host="localhost";
$dbname="inventario";
$user="root";
$password="";
try {
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $dbh = new PDO($dsn, $user, $password);
    echo "";
} catch (PDOException $e){
    echo $e->getMessage();
}
{
    $con=mysqli_connect($host,$user,$password);

    mysqli_select_db($con,$dbname);

    return $con;
}
?>





