<?php

include_once ("TipePembayaran.php");

class Kredit extends TipePembayaran {
    public function memprosesPembayaran(): void {
        echo " Pembayaran dengan metode kredit berhasil diproses.\n";
    }
}