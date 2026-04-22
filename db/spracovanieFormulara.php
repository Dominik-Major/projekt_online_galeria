<?php

$config = require __DIR__ . "/../config.php";

require_once __DIR__ . "/connection.php";

$conn = getPDO($config['db']);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $message = trim($_POST["message"] ?? '');

    // validácia emailu
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Neplatný email");
    }

    // jednoduchá validácia prázdnych polí
    if ($name === '' || $message === '') {
        die("Vyplň všetky polia");
    }

    $sql = "INSERT INTO form (name, email, message)
            VALUES (:name, :email, :message)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':message' => $message
    ]);

    header("Location: http://localhost/projekt_online_galeria/thankyou.php");
    exit;
}