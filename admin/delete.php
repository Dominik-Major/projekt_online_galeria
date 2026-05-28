<?php

require "auth.php";

$config = require __DIR__ . "/../config.php";

require_once __DIR__ . "/../db/GalleryRepository.php";
require_once __DIR__ . "/../db/FileUploader.php";

$galleryRepo = new GalleryRepository(
    $config["files"]["gallery_file"]
);

$uploader = new FileUploader($config["upload"]);

$category = $_POST["category"] ?? '';
$image = $_POST["image"] ?? '';

// ochrana proti prázdnym dátam
if ($category === '' || $image === '') {
    die("Invalid request");
}

// 1. vymazanie súboru
$filePath = $config["upload"]["upload_path"] . $category . "/" . $image;
$uploader->delete($filePath);

// 2. vymazanie z JSON databázy
$galleryRepo->deleteImage($category, $image);

// 3. redirect späť
header("Location: dashboard.php");
exit;