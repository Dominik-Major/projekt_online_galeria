<?php

session_start();

$config = require __DIR__ . "/../config.php";

require_once __DIR__ . "/../db/Database.php";
require_once __DIR__ . "/../db/auth.php";

$db = new Database($config["db"]);
$auth = new Auth($db);

$error = null;
$success = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');
    $action = $_POST["action"] ?? 'login';

    if ($action === "login") {

        if ($auth->login($username, $password)) {
            header("Location: dashboard.php");
            exit;
        }

        $error = "Invalid login";
    }

    if ($action === "register") {

        if ($auth->register($username, $password)) {
            $success = "Account created. You can login now.";
        } else {
            $error = "Username already exists";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width: 400px;">

    <h2 class="text-center mb-4">Admin Login</h2>

    <form method="POST">

        <input class="form-control mb-3" name="username" placeholder="Username" autocomplete="off">

        <input class="form-control mb-3" type="password" name="password" placeholder="Password">

        <button name="action" value="login" class="btn btn-dark w-100 mb-2">
            Login
        </button>

    </form>

    <a href="<?= BASE_URL ?>/register.php" class="btn btn-outline-dark w-100 mt-2">
        Create account
    </a>
    <a href="<?= BASE_URL ?>/index.php" class="btn btn-outline-secondary mt-3 w-100">
        Back to website
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