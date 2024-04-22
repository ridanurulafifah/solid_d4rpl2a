<?php

include_once ("VideoGroupManager.php");

class Whatsapp extends VideoGroupManager {
    public function chat(): void {
        echo "Chatting on WhatsApp...\n";
    }

    public function sendPhotoAndVideo(): void
    {
        echo "Sending Photo and Video on WhatsApp...\n";
    }

    public function callGroupVideo(): void
    {
        echo " Calling Group video on WhatsApp...\n";
    }
}