<?php

session_start();

require_once __DIR__ . "/../db/Auth.php";

$auth = new Auth();

if (!$auth->check()) {

    header("Location: login.php");
    exit;
}