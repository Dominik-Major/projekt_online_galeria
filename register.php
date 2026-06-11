<?php

session_start();

$config = require __DIR__ . "/config.php";

require_once __DIR__ . "/db/Database.php";
require_once __DIR__ . "/db/auth.php";

$db = new Database($config["db"]);
$auth = new Auth($db);

$error = null;
$success = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');

    if ($username === '' || $password === '') {
        $error = "Fill all fields";
    } else {

        if ($auth->register($username, $password)) {
            $success = "Account created. You can now login.";
        } else {
            $error = "Username already exists";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width: 400px;">

    <h2 class="text-center mb-4">Register</h2>

    <form method="POST">

        <input class="form-control mb-3"
               name="username"
               placeholder="Username"
               autocomplete="off">

        <input class="form-control mb-3"
               type="password"
               name="password"
               placeholder="Password">

        <button class="btn btn-dark w-100">
            Register
        </button>

    </form>

    <a href="<?= BASE_URL ?>/admin/login.php" class="btn btn-outline-secondary mt-3 w-100">
        Back to login
    </a>
    
    <?php if ($error): ?>
        <p class="text-danger mt-3 text-center"><?= $error ?></p>
    <?php endif; ?>

    <?php if ($success): ?>
        <p class="text-success mt-3 text-center"><?= $success ?></p>
    <?php endif; ?>

</div>

</body>
</html>