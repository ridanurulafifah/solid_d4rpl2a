<?php 
include_once "KendaraanBBM.php";

class Mobil implements KendaraanBBM{
    public function menggunakanBBM(): void{
        echo "Menggunakan BBM<br>";
    }
}