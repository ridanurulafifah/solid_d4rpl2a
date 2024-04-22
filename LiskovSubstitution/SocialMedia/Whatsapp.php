<?php 
include_once "VideoGrupManager.php";

class WhatsApp implements VideoGrupManager{
    public function chat(): void{
        echo "chat<br>";
    }
    public function sendPhotosAndVideos(): void{
        echo "poto dan video terkirim<br>";
    }
    public function callGroupVideo(): void{
        echo "call<br>";
    }
}