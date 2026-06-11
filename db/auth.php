<?php

class Auth
{
    public function __construct(private Database $db) {}

    public function login(string $username, string $password): bool
    {
        $user = $this->db->fetch(
            "SELECT * FROM users WHERE username = :username",
            ["username" => $username]
        );

        if (!$user) {
            return false;
        }

        if (!password_verify($password, $user["password"])) {
            return false;
        }

        session_regenerate_id(true);

        $_SESSION["user"] = $user["username"];
        $_SESSION["role"] = $user["role"];
        $_SESSION["user_id"] = $user["id"];

        return true;
    }

    public function register(string $username, string $password): bool
    {
        $exists = $this->db->fetch(
            "SELECT id FROM users WHERE username = :username",
            ["username" => $username]
        );

        if ($exists) {
            return false;
        }

        $hash = password_hash($password, PASSWORD_BCRYPT);

        $this->db->query(
            "INSERT INTO users (username, password, role)
             VALUES (:username, :password, 'user')",
            [
                "username" => $username,
                "password" => $hash
            ]
        );

        return true;
    }

    public function logout(): void
    {
        $_SESSION = [];
        session_destroy();
    }
}