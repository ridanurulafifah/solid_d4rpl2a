<?php

class KipasAngin implements BarangElektronik{
    public function beroperasi(): void
    {
        echo "Kipas angin Menyala <br>";
    }

    public function berhenti(): void{
        echo "Kipas Angin dimatikan ";
    }
    
}

