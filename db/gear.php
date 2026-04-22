<?php

function getGearData(PDO $conn): array {
    $stmt = $conn->query("SELECT * FROM gear_items ORDER BY category");
    $rows = $stmt->fetchAll();

    $gear = [];

    foreach ($rows as $row) {
        $gear[$row['category']][] = $row;
    }

    return $gear;
}