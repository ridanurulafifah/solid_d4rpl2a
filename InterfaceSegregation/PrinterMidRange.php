<?php 

 class PrinterMidRange implements FiturCetak, FiturScan {
    public function cetakKertas(): void
    {
        echo "mencetak kertas...\n";
    }

    public function scanKertas(): void
    {
        echo "Menggunakan fitur scan untuk kertas...\n";
    }
 }