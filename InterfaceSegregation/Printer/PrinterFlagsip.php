<?php  

interface FiturScan {
    public function scanKertas(): void;
}

class PrinterFlagsip implements FiturFax, FiturCetak, FiturScan {
    public function cetakKertas(): void {
        echo "Mencetak Kertas ...\n";
    }

    public function terimaFax(): void
    {
        echo "Menerima Fax ...\n";
    }

    public function scanKertas(): void
    {
        echo "Menggunakan fitur ...\n";
    }
}