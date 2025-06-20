<?php 

class Model extends Db{


    public function sginup($firstname,$fathername,$email,$password){
        $this->connect();
        $sql = "insert into user(firstname,fathername,email,password) VALUES(?,?,?,?)";
        $sql1 = "slect * from user where email = ? ";
        if($this->connection){
            $stmtcheck = $this->connection->prepare($sql1);
            $stmtcheck->bind_param("s",$email);
            $stmtcheck->execute();
            $result = $stmtcheck->get_result();
            if($result->num_rows > 0){
                $stmtcheck->close();
                $this->closeConnection();
                return false;
            }
            $hashedpassword = password_hash($password,PASSWORD_BCRYPT);
            $stmt = $this->connection->prepare($sql);
            $stmt->bind_param("ssss",$firstname,$fathername,$email,$hashedpassword);
            if($stmt->execute()){
                $stmt->close();
                $this->closeConnection();
                return true;
            }
            else{
                $stmt->close();
                $this->closeConnection();
                return false;
            }
        }

    }

    public function logIn($username,$password){
        $this->connect();
        $sql= "select * from user where username = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        while($row = $stmt->fetch_assoc()){
            $passwordcheck = password_verify($password,$row['password']);
            if($passwordcheck){
                session_start();
                $_SESSION['userid']=$row['user_id'];
                $_SESSION["email"] = $row['email'];
                $stmt->close();
                $this->closeConnection();
                return true;
            }
        }
        $stmt->close();
        $this->closeConnection();
        return false;
    }

    public function isLogedIn(){
        if(isset($_SESSION['userid'])){
            return true;
        }
        return false;
    
    }

    public function logOut(){
        session_start();
        session_unset();
        session_destroy();
    }
}
?>