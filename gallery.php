<?php

$config = require __DIR__ . "/config.php";

require_once __DIR__ . "/db/Database.php";
require_once __DIR__ . "/db/GalleryRepository.php";

$db = new Database($config["db"]);
$galleryRepo = new GalleryRepository($db);

$category = $_GET["category"] ?? null;

// vždy dostaneme rovnakú štruktúru: [category => [images]]
$all = $galleryRepo->getAll();

// filter
$images = $category ? [$category => ($all[$category] ?? [])] : $all;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/gallery.css">
</head>

<body>

<?php include "parts/navbar.php"; ?>

<main>

<h1 class="text-center fw-semibold mt-5">GALLERY</h1>

<div class="container py-4 text-center">

    <div class="btn-group mb-4">
        <a href="?category=events" class="btn btn-outline-dark">Events</a>
        <a href="?category=nature" class="btn btn-outline-dark">Nature</a>
        <a href="?category=street" class="btn btn-outline-dark">Street Photography</a>
        <a href="gallery.php" class="btn btn-outline-secondary">All</a>
    </div>

    <div id="masonry-gallery">

        <?php foreach ($images as $cat => $imgs): ?>
            <?php foreach ($imgs as $img): ?>
                <div class="masonry-item" data-category="<?= htmlspecialchars($cat) ?>">
                    <img
                        src="<?= htmlspecialchars($galleryRepo->getImageUrl($cat, $img)) ?>"
                        class="gallery-item"
                        alt="gallery image"
                    >
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

    <div id="lightbox" class="d-none">
        <span id="lightbox-close">&times;</span>
        <img id="lightbox-img" src="" alt="Full view">
    </div>

</div>

</main>

<?php include "parts/footer.php"; ?>

<script src="js/common.js"></script>
<script src="js/gallery.js"></script>

</body>
</html>