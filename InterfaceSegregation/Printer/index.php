<?php 
include_once "PrinterFlagsip.php";
include_once "PrinterEntryLevel.php";
include_once "PrinterMidRange.php";

$printerflagsip = new PrinterFlagsip();
$printerflagsip->cetakKertas();
$printerflagsip->terimaFax();
$printerflagsip->scanKertas();

$printerentrylevel = new PrinterEntryLevel();
$printerentrylevel->cetakKertas();

$printermidrange = new PrinterMidRange();
$printermidrange->cetakKertas();
$printermidrange->scanKertas();