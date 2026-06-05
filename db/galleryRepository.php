<?php

class GalleryRepository
{
    public function __construct(
        private Database $db
    ) {}

    public function getAll(): array
    {
        $rows = $this->db->fetchAll(
            "SELECT * FROM images ORDER BY category"
        );

        $result = [];

        foreach ($rows as $row) {
            $result[$row["category"]][] = $row["filename"];
        }

        return $result;
    }

    public function addImage(string $category, string $filename): void
    {
        $this->db->query(
            "INSERT INTO images (category, filename) VALUES (?, ?)",
            [$category, $filename]
        );
    }

    public function deleteImage(string $category, string $filename): void
    {
        $this->db->query(
            "DELETE FROM images WHERE category = ? AND filename = ?",
            [$category, $filename]
        );
    }

    public function getImageUrl(string $category, string $filename): string
    {
        return BASE_URL . "/img/gallery/$category/$filename";
    }
}