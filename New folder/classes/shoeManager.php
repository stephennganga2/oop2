<?php
session_start();
class ShoeManager {
    private $dbConnection;

    public function __construct($dbConnection) {
        $this->dbConnection = $dbConnection;
    }

    public function addShoe($shoeName, $shoeBrand, $shoePrice, $shoeImage) {
        $sql = "INSERT INTO shoes (shoe_name, shoe_brand, shoe_price, shoe_image) VALUES (?, ?, ?, ?)";
        $stmt = $this->dbConnection->prepare($sql);
        $stmt->bind_param("ssss", $shoeName, $shoeBrand, $shoePrice, $shoeImage);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteShoe($shoeId) {
        $sql = "DELETE FROM shoes WHERE shoe_id = ?";
        $stmt = $this->dbConnection->prepare($sql);
        $stmt->bind_param("i", $shoeId);
        $stmt->execute();
        $stmt->close();
    }

    public function getAllShoes() {
        $shoes = [];
        $sql = "SELECT * FROM shoes";
        $result = $this->dbConnection->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $shoe = new Shoe($row['shoe_id'], $row['shoe_name'], $row['shoe_brand'], $row['shoe_price'], $row['shoe_image']);
                $shoes[] = $shoe;
            }
        }
        $result->close();
        return $shoes;
    }
}
