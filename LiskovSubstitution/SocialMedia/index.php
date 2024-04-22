<?php 
include_once "Instagram.php";
include_once "WhatsApp.php";

echo "===instagram===<br>";
$instagram = new Instagram();
$instagram->chat();
$instagram->publishPost();
$instagram->sendPhotosAndVideos();

echo "\n";
echo "===whatsapp===<br>";
$whatsapp = new WhatsApp();
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();