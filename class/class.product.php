<?php
include_once 'class.Database.php';
class Product extends Database
{
        public function productdisplay(){
            
            $mysqli = new Database(); 

            $query = "SELECT product.c_id,product.id,category.cetegoryname,product.productname,product.productname,product.saleprice,product.mrp,product.description,product.quantity,product.status,product.image,product.brand,product.itemlenght,product.material,product.stoneshape,product.weight,product.stock,brand.brandname FROM product JOIN category ON product.c_id=category.id JOIN brand ON product.brand=brand.id WHERE product.id = ".$_GET['id']."";
        //     print_r($query);
        //     exit;
            $res = $mysqli->connection->query($query);
                
            return $row = $res->fetch_assoc();
        }
        public function product_display(){
            
                $mysqli = new Database(); 

                $query = "SELECT product.c_id,product.id,category.cetegoryname,product.productname,product.productname,product.saleprice,product.mrp,product.description,product.quantity,product.status,product.image,product.brand,product.itemlenght,product.material,product.stoneshape,product.weight,product.stock,brand.brandname FROM product JOIN category ON product.c_id=category.id JOIN brand ON product.brand=brand.id";
                
                $res = $mysqli->connection->query($query);
            //     print_r($res);
            //     exit;
                    return $row = $res->fetch_assoc();
            }
}
?>