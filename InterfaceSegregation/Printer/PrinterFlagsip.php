<?php  
include_once "FiturFax.php";
include_once "FiturCetak.php";
include_once "FiturScan.php";

class PrinterFlagsip implements FiturFax, FiturCetak, FiturScan {
    public function cetakKertas(): void {
        echo "Mencetak Kertas <br>";
    }

    public function terimaFax(): void
    {
        echo "Menerima Fax <br>";
    }

    public function scanKertas(): void
    {
        echo "Menggunakan fitur <br>\n";
    }
}