<?php 
include_once "Mobil.php";
include_once "MobilListrik.php";

$mobil = new Mobil();
$mobil->menggunakanBBM();

$mobillistrik = new MobilListrik();
$mobillistrik->menggunakanBaterai();