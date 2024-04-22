<?php 
include_once "ViewMahasiswa.php";

$mahasiswa = new Mahasiswa(2205024, "Rida Nurul Afifah");
$mahasiswaview = new ViewMahasiswa();
echo "Nim : ".$mahasiswa->getNim()."<br>";
echo "Nama : ".$mahasiswa->getNama();  