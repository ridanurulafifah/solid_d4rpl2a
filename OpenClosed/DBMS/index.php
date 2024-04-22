<?php 
include_once "MySQL.php";
include_once "MangoDB.php";

$dbms = new MySQL();
$dbms->createConnection();
$dbms = new MangoDB();
$dbms->createConnection();