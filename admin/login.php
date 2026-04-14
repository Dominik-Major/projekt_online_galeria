<?php
session_start();

$config = require __DIR__ . "/../config.php";
require_once __DIR__ . "/../parts/functions.php";
$users = json_decode(file_get_contents($config["users_file"]), true);

$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $inputUser = $_POST["username"];
    $inputPass = $_POST["password"];

    foreach ($users["users"] as $user) {

        if (
            $inputUser === $user["username"] &&
            password_verify($inputPass, $user["password"])
        ) {
            $_SESSION["user"] = $inputUser;
            header("Location: dashboard.php");
            exit;
        }
    }

    $error = "Invalid login";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2>Admin Login</h2>

<form method="POST" class="w-25">

    <input class="form-control mb-2" name="username" placeholder="Username">
    <input class="form-control mb-2" type="password" name="password" placeholder="Password">

    <button class="btn btn-dark w-100">Login</button>
</form>

<a href="<?= BASE_URL ?>/index.php" class="btn btn-outline-secondary mt-3 w-25">
    Back to website
</a>

<?php if ($error) echo "<p class='text-danger'>$error</p>"; ?>

</body>
</html>