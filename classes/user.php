<?php

require "database.php";

class User extends Database{ 

    public function createUser($request){
        $password = password_hash($request['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO Users (first_name, last_name, username, `password`) 
                VALUES ('".$request['first_name']."','".$request['last_name']."','".$request['username']."','".$password."')";

        if($this->conn -> query($sql)){
            header("location: ../views");
            exit;
        }else{
            die("Error creating the user: " . $this->conn -> error);
        }
    }

    public function login($request){

        $sql = "SELECT * FROM Users WHERE username = '".$request['username']."'";

        $result = $this->conn -> query($sql);

        if($result -> num_rows == 1){ 
            $user = $result -> fetch_assoc();
            
            if(password_verify($request['password'], $user['password'])){ 
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['first_name']." ".$user['last_name'];

                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Password is incorrect.");
            }
        }else{
            die("User name not found.");
        }
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM users";
        if($result = $this->conn -> query($sql)){
            return $result;
        }else{
            die("Error returning all users: " . $this->conn -> error);
        }
    }

    public function findUser($id){
        $sql = "SELECT * FROM users WHERE id = $id";
        
        if($result = $this->conn -> query($sql)){
            return $result -> fetch_assoc(); 
        }else{
            die("Error finding user: " . $this->conn -> error);
        }
    }
    
    public function logout(){
        session_start();
        session_unset();
        session_destroy();

        header("location: ../views");
        exit;
    }


}
?>