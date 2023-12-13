<?php
session_start();
class Shoe {
    private $shoeId;
    private $shoeName;
    private $shoeBrand;
    private $shoePrice;
    private $shoeImage;

    public function __construct($shoeId, $shoeName, $shoeBrand, $shoePrice, $shoeImage) {
        $this->shoeId = $shoeId;
        $this->shoeName = $shoeName;
        $this->shoeBrand = $shoeBrand;
        $this->shoePrice = $shoePrice;
        $this->shoeImage = $shoeImage;
    }

    public function getShoeId() {
        return $this->shoeId;
    }

    public function getShoeName() {
        return $this->shoeName;
    }

    public function getShoeBrand() {
        return $this->shoeBrand;
    }

    public function getShoePrice() {
        return $this->shoePrice;
    }

    public function getShoeImage() {
        return $this->shoeImage;
    }
}
