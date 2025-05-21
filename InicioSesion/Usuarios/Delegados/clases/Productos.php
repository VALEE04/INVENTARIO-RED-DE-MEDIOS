<?php

class Productos{
    private $con;
    public function __construct($con){
        $this->con=$con;
    }

    // Funciones Registro

    public function registrar($producto_codigo ,$producto_nombre, $producto_precio, $producto_stock, $destino){
        $productospro=$this->insertar($producto_codigo ,$producto_nombre, $producto_precio, $producto_stock, $destino);
        if($productospro){
            return true;
        }else{
            return false;
        }

    }

    private function insertar($cod,$prod, $propre, $stoc, $dest){

        $query=$this->con->prepare("INSERT INTO producto (Producto_codigo, Producto_nombre, Producto_precio, Producto_stock,foto) VALUES (:producto_codigo, :producto_nombre, :producto_precio, :producto_stock, :destino) "); 
        $query->bindParam(":producto_codigo", $cod);
        $query->bindParam(":producto_nombre", $prod);
        $query->bindParam(":producto_precio", $propre);
        $query->bindParam(":producto_stock", $stoc);
        $query->bindParam(":destino", $dest);
        
            return $query->execute();
           
    }

    
    

}
?>