<?php
class db
{
    public $conn;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "todo-mvc";
    function db()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->dbname);
        mysqli_query($this->conn, "SET NAMES 'utf8'");
    }
}