<?php 
include_once "Lampu.php";
include_once "KipasAngin.php";
include_once "Saklar.php";

$lampu = New Lampu();
$lampu->beroperasi();
$lampu->berhenti();

$Kipasangin = new KipasAngin();
$Kipasangin->beroperasi();
$Kipasangin->berhenti();