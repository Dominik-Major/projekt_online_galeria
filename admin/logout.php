<?php

session_start();

$config = require __DIR__ . "/../config.php";

require_once __DIR__ . "/../db/Database.php";
require_once __DIR__ . "/../db/auth.php";

$db = new Database($config["db"]);
$auth = new Auth($db);

$auth->logout();

$_SESSION = [];

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

session_destroy();

header("Location: login.php");
exit;