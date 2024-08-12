<?php

require "database.php";

class Product extends Database{ 

    public function getAllProducts(){
        $sql = "SELECT * FROM Products";
        if($result = $this->conn -> query($sql)){
            return $result;
        }else{
            die("Error returning all users: " . $this->conn -> error);
        }
    }

    public function findProduct($id){
        $sql = "SELECT * FROM Products WHERE id = $id";
        
        if($result = $this->conn -> query($sql)){
            return $result -> fetch_assoc(); 
        }else{
            die("Error finding user: " . $this->conn -> error);
        }
    }

    public function addProduct($request){
        $sql = "INSERT INTO Products (product_name, price, quantity,detail) 
                VALUES ('".$request['product_name']."',".$request['price'].",".$request['quantity'].",'".$request['detail']."')";

        if($this->conn -> query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error adding product: " . $this->conn -> error);
        }
    }
        public function editProduct($request){
            $sql = "UPDATE Products 
                    SET product_name = '".$request['product_name']."',
                        price = ".$request['price'].",
                        quantity = ".$request['quantity'].",
                        detail = '".$request['detail']."'
                    WHERE id = ".$request['id'];
    
            if($this->conn -> query($sql)){ 
                session_start();
                if($request['id'] == $_SESSION['id']){
                    $_SESSION['product_name'] = $product['product_name'];
                    $_SESSION['price'] = $product['price'];
                    $_SESSION['quantity'] = $product['quantity'];
                    $_SESSION['detail'] = $product['detail'];
                } 
                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Error updating user: " . $this->conn -> error);
            }
        }
    
        public function deleteProduct($id){
            $sql = "DELETE FROM Products WHERE id = $id";
            
            if($this->conn -> query($sql)){
                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Error deleting user: " . $this->conn -> error);
            }
        }

        public function buyProduct($request){
            $sql = "UPDATE Products 
                    SET buy_quantity = ".$request['buy_quantity']."
                    WHERE id = ".$request['id'];
            if($this->conn -> query($sql)){
            header("location: ../views/payment.php?id=".$request['id']);
            exit;
            }else{
                die("Error updating user: " . $this->conn -> error);
            }
        }

        public function payForProduct($request){
            $total = 0;
            $total = $request['price'] * $request['buy_quantity'];

            if( $_POST['payment'] == $total ){
                $sql = "UPDATE Products 
                        SET quantity = quantity - ".$request['buy_quantity']."
                        WHERE id = ".$request['id'];

                if($this->conn -> query($sql)){
                    header("location: ../views/payment-success.php?id=".$request['id']);
                    exit;
                }else{
                    die("Error updating quantity: " . $this->conn -> error);
                }
            }else{
                header ("location: ../views/payment-fail.php?id=".$request['id']);
            }
        }

}
?>