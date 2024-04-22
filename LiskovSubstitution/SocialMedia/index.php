
<?php 
include_once "Instagram.php";
include_once "WhatsApp.php";
echo "-------------------------------<br>";
echo "           Instagram           <br>";
echo "-------------------------------<br>";
$instagram = new Instagram();
$instagram->chat();
$instagram->publishPost();
$instagram->sendPhotosAndVideos();

echo "\n";
echo "-------------------------------<br>";
echo "           WhatsApp            <br>";
echo "-------------------------------<br>";
$whatsapp = new WhatsApp();
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();
