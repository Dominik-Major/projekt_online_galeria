<?php

define("BASE_URL", "/projekt_online_galeria");

return [
    'db' => [
        'host' => 'localhost',
        'user' => 'root',
        'port' => '3307',
        'pass' => '',
        'name' => 'projekt_sj'
    ],

    'files' => [
        "users_file" => __DIR__ . "/data/users.json",
        "gallery_file" => __DIR__ . "/data/gallery.json",
        "upload_path" => __DIR__ . "/img/gallery/",
    ],

    'upload' => [
        "allowed_types" => ["image/jpeg", "image/png", "image/webp"],
        "max_size" => 5 * 1024 * 1024
    ]
];