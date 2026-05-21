<?php

class GearRepository
{
    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAllGroupedByCategory(): array
    {
        $rows = $this->db->fetchAll(
            "SELECT * FROM gear_items ORDER BY category"
        );

        $gear = [];

        foreach ($rows as $row) {
            $gear[$row['category']][] = $row;
        }

        return $gear;
    }
}