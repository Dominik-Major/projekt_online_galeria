<?php

function getPDO(array $db): PDO {
    try {
        return new PDO(
            "mysql:host={$db['host']};dbname={$db['name']};port={$db['port']}",
            $db['user'],
            $db['pass'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    } catch (PDOException $e) {
        die("DB error: " . $e->getMessage());
    }
}