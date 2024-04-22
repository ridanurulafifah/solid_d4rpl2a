<?php
include_once "BarangElektronik.php";

class Lampu implements BarangElektronik{
    public function beroperasi(): void
    {
        echo "Lampu dinyalakan <br>";
    }

    public function berhenti(): void{
        echo "Lampu dimatikan <br>";
    }
    
}

