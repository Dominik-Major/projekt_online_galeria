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
$file = $_FILES["image"] ?? null;

if (!$file || $category === '') {
    die("Invalid input");
}

$fileName = $uploader->upload($file, $category);

$galleryRepo->addImage($category, $fileName);

header("Location: dashboard.php");
exit;