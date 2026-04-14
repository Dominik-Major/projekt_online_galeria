<?php require "auth.php";

$config = require __DIR__ . "/../config.php";
require_once __DIR__ . "/../parts/functions.php";

$category = $_POST["category"];
$file = $_FILES["image"];

if (!in_array($file["type"], $config["allowed_types"])) {
    die("Invalid file type");
}

if ($file["size"] > $config["max_size"]) {
    die("File too large");
}

$ext = pathinfo($file["name"], PATHINFO_EXTENSION);
$fileName = uniqid("img_", true) . "." . $ext;

$targetDir = $config["upload_path"] . $category . "/";
$targetFile = $targetDir . $fileName;

move_uploaded_file($file["tmp_name"], $targetFile);

// update JSON
$data = json_decode(file_get_contents($config["gallery_file"]), true);
$data[$category][] = $fileName;

file_put_contents(
    $config["gallery_file"],
    json_encode($data, JSON_PRETTY_PRINT)
);

header("Location: dashboard.php");