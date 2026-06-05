<?php

require "auth.php";

$config = require __DIR__ . "/../config.php";

require_once __DIR__ . "/../db/Database.php";
require_once __DIR__ . "/../db/GalleryRepository.php";
require_once __DIR__ . "/../db/FileUploader.php";

$db = new Database($config["db"]);
$galleryRepo = new GalleryRepository($db);
$uploader = new FileUploader($config["upload"]);

$category = $_POST["category"] ?? '';
$image = $_POST["image"] ?? '';

if ($category === '' || $image === '') {
    die("Invalid request");
}

$filePath = $config["upload"]["upload_path"] . $category . "/" . $image;
$uploader->delete($filePath);

$galleryRepo->deleteImage($category, $image);

header("Location: dashboard.php");
exit;