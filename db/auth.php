<?php

class Auth
{
    public function login(array $users, string $username, string $password): bool
{
    foreach ($users["users"] as $user) {

        if (
            $username === $user["username"] &&
            password_verify($password, $user["password"])
        ) {
            session_regenerate_id(true);

            $_SESSION["user"] = $username;

            return true;
        }
    }

    return false;
}

    public function check(): bool
    {
        return isset($_SESSION["user"]);
    }

    public function logout(): void
    {
        $_SESSION = [];

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        session_destroy();
}
}