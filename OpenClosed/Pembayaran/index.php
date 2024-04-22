<?php 
include_once "PembayaranCostumer.php";
include_once "Kredit.php";
include_once "Debit.php";
include_once "Cash.php";

$pembayaran = new PembayaranCostumer();
$pembayaran->menerimaPembayaran(new Kredit());
$pembayaran->menerimaPembayaran(new Debit());
$pembayaran->menerimaPembayaran(new Cash());