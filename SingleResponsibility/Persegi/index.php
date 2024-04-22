<?php 
include_once "PenghitungPersegi.php";

$kotak = new persegi(4);
$penghitung = new PenghitungPersegi();
echo $penghitung->hitungLuas($kotak);