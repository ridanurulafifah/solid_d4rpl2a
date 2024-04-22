<?php

class Lampu implements BarangElektronik{
    public function beroperasi(): void
    {
        echo "Lampu dinyalakan.\n";
    }

    public function berhenti(): void{
        echo "Lampu dimatikan.\n";
    }
    
}

