<?php
session_start();
class Admin {
    private $dbConnection;

    public function __construct($dbConnection) {
        $this->dbConnection = $dbConnection;
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM admins WHERE username = ? AND password = ?";
        $stmt = $this->dbConnection->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function addShoe($shoeName, $shoeBrand, $shoePrice, $shoeImage) {
        $shoeManager = new ShoeManager($this->dbConnection);
        $shoeManager->addShoe($shoeName, $shoeBrand, $shoePrice, $shoeImage);
    }

    public function deleteShoe($shoeId) {
        $shoeManager = new ShoeManager($this->dbConnection);
        $shoeManager->deleteShoe($shoeId);
    }
}
