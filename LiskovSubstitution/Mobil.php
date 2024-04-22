<?php

include_once ("KendaraanBBM.php");

class Mobil extends KendaraanBBM {
    public function menggunakanBBM(): void
    {
        echo " Mobil menggunakan bahan bakar bensin atau solar.\n";
    }
}