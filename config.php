<?php

define("BASE_URL", "/projekt_online_galeria");

return [
    "users_file" => __DIR__ . "/data/users.json",
    "gallery_file" => __DIR__ . "/data/gallery.json",
    "upload_path" => __DIR__ . "/img/gallery/",
    "allowed_types" => ["image/jpeg", "image/png", "image/webp"],
    "max_size" => 5 * 1024 * 1024
];