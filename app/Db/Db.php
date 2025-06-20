<?php 
class Db{
   private $sereverName = "localhost";
   private $username = "root";
   private $password = "";
   private $dbname = "dailyvacancy";
//    protected $connection;

   protected function connect(){
    $connection = new mysqli($this->sereverName,$this->username,$this->password,$this->dbname);
    return $connection;
   }

//    protected function closeConnection(){
//     if($this->connection){
//         $this->connection->close();
//     }
//    }
}



?>