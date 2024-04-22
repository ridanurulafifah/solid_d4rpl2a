<?php 
include_once "Kubus.php";
include_once "Persegi.php";

$kubus = new Kubus();
$kubus->calculateArea();
$kubus->calculateVolume();

$persegi = new Persegii();
$persegi->calculateArea();