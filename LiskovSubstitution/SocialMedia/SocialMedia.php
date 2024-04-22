<?php 

abstract class SocialMedia {
    abstract public function chat(): void;
    abstract public function sendPhotoAndVideo(): void;
}