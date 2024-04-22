<?php 
include_once "Shape2Dimension.php";
include_once "Shape3Dimension.php";

class Kubus implements Shape2Dimension, Shape3Dimension {
    public function calculateArea(): void {
        echo "Menghitung luas Permukaan Kubus <br>";
    }

    public function calculateVolume(): void {
        echo "Menghitung volume Permukaan Kubus <br>";
    }

}