<?php

if (!defined('BASE_URL')) {
    define("BASE_URL", "/projekt_online_galeria");
}

return [
    'db' => [
        'host' => 'localhost',
        'user' => 'root',
        'port' => '3307',
        'pass' => '',
        'name' => 'projekt_sj'
    ],

    'files' => [
        "users_file" => __DIR__ . "/data/users.json"
    ],

    'upload' => [
        "allowed_types" => ["image/jpeg", "image/png", "image/webp"],
        "max_size" => 5 * 1024 * 1024,
        "upload_path" => __DIR__ . "/img/gallery/"
    ]
];