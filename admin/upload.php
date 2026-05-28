<?php

require "auth.php";

$config = require __DIR__ . "/../config.php";

require_once __DIR__ . "/../db/galleryRepository.php";
require_once __DIR__ . "/../db/fileUploader.php";

$galleryRepo = new GalleryRepository(
    $config["files"]["gallery_file"]
);
$uploader = new FileUploader($config["upload"]);

$category = $_POST["category"];

$fileName = $uploader->upload($_FILES["image"], $category);

// uloženie do JSON
$galleryRepo->addImage($category, $fileName);

header("Location: dashboard.php");
exit;