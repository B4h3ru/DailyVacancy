<?php
class Db
{
    private $sereverName = "localhost"; //host name
    private $username = "root";
    private $password = "";
    private $dbname = "Dailyvacancy";
    protected $connection;

    protected function connect()
    {

        $this->connection = new mysqli($this->sereverName, $this->username, $this->password, $this->dbname);
        if ($this->connection->connect_error) {
            die("error : " . $this->connection->connect_error);
        }
    }

    protected function closeConnection()
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}
