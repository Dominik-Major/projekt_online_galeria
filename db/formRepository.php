<?php

class FormRepository
{
    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function insert(string $name, string $email, string $message): void
    {
        $this->db->query(
            "INSERT INTO form (name, email, message)
             VALUES (:name, :email, :message)",
            [
                ':name' => $name,
                ':email' => $email,
                ':message' => $message
            ]
        );
    }
}