<?php

class FileUploader
{
    public function __construct(
        private array $config
    ) {}

    public function upload(array $file, string $category): string
    {
        // 1. validácia typu
        if (!in_array($file["type"], $this->config["allowed_types"])) {
            die("Invalid file type");
        }

        // 2. validácia veľkosti
        if ($file["size"] > $this->config["max_size"]) {
            die("File too large");
        }

        // 3. vytvorenie názvu súboru
        $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
        $fileName = uniqid("img_", true) . "." . $ext;

        // 4. cesta uloženia
        $targetDir = $this->config["upload_path"] . $category . "/";

        // 5. presun súboru
        move_uploaded_file(
            $file["tmp_name"],
            $targetDir . $fileName
        );

        return $fileName;
    }

    public function delete(string $path): void
    {
        if (file_exists($path)) {
            unlink($path);
        }
    }
}