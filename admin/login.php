<?php

session_start();

$config = require __DIR__ . "/../config.php";

require_once __DIR__ . "/../parts/functions.php";
require_once __DIR__ . "/../db/auth.php";

$users = json_decode(
    file_get_contents($config["files"]["users_file"]),
    true
);

$auth = new Auth();

$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');

    if ($auth->login($users, $username, $password)) {

        header("Location: dashboard.php");
        exit;
    }

    $error = "Invalid login";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width: 400px;">

    <h2 class="text-center mb-4">Admin Login</h2>

    <form method="POST">

        <input
            class="form-control mb-3"
            name="username"
            placeholder="Username"
            autocomplete="off"
        >

        <input
            class="form-control mb-3"
            type="password"
            name="password"
            placeholder="Password"
        >

        <button class="btn btn-dark w-100">
            Login
        </button>

    </form>

    <a href="<?= BASE_URL ?>/index.php"
       class="btn btn-outline-secondary mt-3 w-100">

        Back to website

    </a>

    <?php if ($error): ?>

        <p class="text-danger mt-3 text-center">
            <?= $error ?>
        </p>

    <?php endif; ?>

</div>

</body>
</html>