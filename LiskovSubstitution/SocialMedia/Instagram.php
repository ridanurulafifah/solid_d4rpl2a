<?php 
include_once "PostMediaManager.php";

class Instagram implements PostMediaManager{
    public function chat(): void{
        echo "chat<br>";
    }
    public function publishPost(): void{
        echo "poto dan video terpublish<br>";
    }
    public function sendPhotosAndVideos(): void{
        echo "call<br>";
    }
}