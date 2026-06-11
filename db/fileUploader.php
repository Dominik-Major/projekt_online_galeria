<?php

class FileUploader
{
    public function __construct(
        private array $config
    ) {}

    public function upload(array $file, string $category): string
    {

        if (!in_array($file["type"], $this->config["allowed_types"])) {
            die("Invalid file type");
        }

        if ($file["size"] > $this->config["max_size"]) {
            die("File too large");
        }

        $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
        $fileName = uniqid("img_", true) . "." . $ext;

        $targetDir = rtrim($this->config["upload_path"], "/") . "/" . $category . "/";

        if (!is_dir($targetDir)) {
            die("Upload folder does not exist: " . $targetDir);
        }

        $success = move_uploaded_file(
            $file["tmp_name"],
            $targetDir . $fileName
        );

        if (!$success) {
            die("Upload failed");
        }

        return $fileName;
    }

    public function delete(string $path): void
    {
        if (file_exists($path)) {
            unlink($path);
        }
    }
}