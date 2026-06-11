<?php

session_start();

$config = require __DIR__ . "/../config.php";

require_once __DIR__ . "/../db/Database.php";
require_once __DIR__ . "/../db/auth.php";

$db = new Database($config["db"]);
$auth = new Auth($db);

if (!isset($_SESSION["user"]) || $_SESSION["role"] !== "admin") {
    header("Location: " . BASE_URL . "/index.php");
    exit;
}