<?php

class Database{
    public function __construct(){

        $conn = new mysqli(DBHOST, DBUSER, DBPWD, DBNAME);
        if($conn -> connect_error){
            die ('<h2></h2>connection unsuccesfully</h2>');
        }
        return $this->conn = $conn;
    }
}

?>