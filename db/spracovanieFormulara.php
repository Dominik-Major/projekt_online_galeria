<?php

$config = require __DIR__ . "/../config.php";

require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/FormRepository.php";

$db = new Database($config['db']);
$formRepo = new FormRepository($db);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $message = trim($_POST["message"] ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Neplatný email");
    }

    if ($name === '' || $message === '') {
        die("Vyplň všetky polia");
    }

    // OOP insert
    $formRepo->insert($name, $email, $message);

    header("Location: " . BASE_URL . "/thankyou.php");
    exit;
}