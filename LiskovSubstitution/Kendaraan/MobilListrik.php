<?php

include_once ("KendaraanListrik.php");

class Mobil extends KendaraanListrik {
    public function menggunakanBaterai(): void
    {
        echo " Mobil menggunakan bahan bakar Listrik.\n";
    }
}