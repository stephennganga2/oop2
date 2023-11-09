<?php

require_once '../config/db_config.php';

class Database{
    private $host;
    private $username;
    private $password;
    private $database;
    private $conn;
    // this is mainly used to refer to global variable
    public function_construct(){
        $this->host = DB_HOST;
        $this->username = DB_USER;
        $this->password = <PASSWORD>;
        $this->database = DB_NAME;
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if(!$this->conn){
            die("Connection failed: ". mysqli_connect_error());
        }
        public function query($sql)
    }
    
}
   
