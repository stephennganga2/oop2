<?php
include ('Database.php');

class usersclass{
    public function __construct(){
        $db = new Database;
        $this-> conn = $db-> conn;
    }
    public function createUser($name,$email,$location,$phone,$pwd){
        $query = "INSERT INTO users(name,email,location,phone,pwd) VALUES ('$name','$email','$location','$phone','$pwd')";
        $result = $this->conn -> query($query);
        return $result;
    }
    public function loginUser($email,$pwd){
        $query = "SELECT * FROM users WHERE email = '$email'AND pwd = '$pwd' LIMIT 1";
        $result = $this->conn -> query($query);
        return $result;

    }
}
?>