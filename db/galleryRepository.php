<?php

class GalleryRepository
{
    public function __construct(
        private string $filePath
    ) {}

    public function getAll(): array
    {
        return json_decode(file_get_contents($this->filePath), true);
    }

    public function save(array $data): void
    {
        file_put_contents(
            $this->filePath,
            json_encode($data, JSON_PRETTY_PRINT)
        );
    }

    public function addImage(string $category, string $fileName): void
    {
        $data = $this->getAll();
        $data[$category][] = $fileName;
        $this->save($data);
    }

    public function deleteImage(string $category, string $fileName): void
    {
        $data = $this->getAll();

        $data[$category] = array_values(array_filter(
            $data[$category],
            fn($img) => $img !== $fileName
        ));

        $this->save($data);
    }
}