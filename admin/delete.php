<?php
require "auth.php";

$config = require __DIR__ . "/../config.php";

$category = $_POST["category"];
$image = $_POST["image"];

$filePath = $config["upload_path"] . "$category/$image";

if (file_exists($filePath)) {
    unlink($filePath);
}

// update JSON
$data = json_decode(file_get_contents($config["gallery_file"]), true);

$data[$category] = array_values(array_filter(
    $data[$category],
    fn($img) => $img !== $image
));

file_put_contents(
    $config["gallery_file"],
    json_encode($data, JSON_PRETTY_PRINT)
);

header("Location: dashboard.php");
exit;