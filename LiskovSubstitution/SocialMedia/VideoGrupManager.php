<?php 
include_once "SocialMedia.php";

interface VideoGrupManager extends SocialMedia{
    public function callGroupVideo(): void;
}