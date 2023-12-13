<?php
include ('../config/dbconfig.php');

class usersignup{
    public function __construct(){
        $db = new Database;
        $this-> conn = $db-> conn;
    }
    public function createUser($name,$email,$location,$phone,$pwd){
        $query = "INSERT INTO users(name,email,location,phone,password) VALUES ('$name','$email','$location','$phone','$pwd')";
        $result = $this->conn -> query($query);
        return $result;
    }
}
?>