<?php 
include_once "PenghitungPersegi.php";

$persegi1 = new Persegi(4);
$penghitung = new PenghitungPersegi();
echo $penghitung->hitungLuas($persegi1);