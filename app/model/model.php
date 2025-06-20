<?php 
require_once "Db.php";

class Model extends Db{


    public function sginup($firstname,$fathername,$email,$password){
       $connection = $this->connect();
        $sql = "insert into user(firstname,fathername,email,password) VALUES(?,?,?,?)";
        $sql1 = "select * from user where email = ? ";
        if($connection){
            $stmtcheck = $connection->prepare($sql1);
            $stmtcheck->bind_param("s",$email);
            $stmtcheck->execute();
            $result = $stmtcheck->get_result();
            if($result->num_rows > 0){
                $stmtcheck->close();
                $connection->close();
                return false;
            }

            $hashedpassword = password_hash($password,PASSWORD_BCRYPT);
            $stmt = $connection->prepare($sql);
            $stmt->bind_param("ssss",$firstname,$fathername,$email,$hashedpassword);
            if($stmt->execute()){
                $stmt->close();
                $connection->close();
                return true;
            }
            else{
                $stmt->close();
                $connection->close();
                return false;
            }
        }

    }


    public function logIn($username,$password){
       $connection = $this->connect();
        $sql= "select * from user where email = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            $passwordcheck = password_verify($password,$row['password']);
            if($passwordcheck){
                session_start();
                $_SESSION['user']=$row['user_id'];
                $_SESSION["email"] = $row['email'];
                $stmt->close();
                $connection->close();
                return true;
            }
        }
        $stmt->close();
        $connection->close();
        return false;
    }

    public function isLogedIn(){
        session_start();
        if(isset($_SESSION['user'])){
            return true;
        }
        else {
            return false;
        }
    
    }

    public function logOut(){
        session_start();
        session_unset();
        session_destroy();
    }
}











?>