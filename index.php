<?php
$config = require __DIR__ . "/config.php";
require_once __DIR__ . "/parts/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Photo Gallery">
    <title>Gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/common.css">
</head>

<body>

<?php include "parts/navbar.php"; ?>

<main>

    <?php renderCarousel("data/carousel.json"); ?>

    <h1 class="text-center mt-5">
        Events, Nature, Street Photography
    </h1>

    <div class="container py-5 w-50 text-center">
        <a href="gallery.php" class="btn btn-outline-dark">Full Gallery</a>
    </div>

    <?php renderHomeGallery("data/home_gallery.json"); ?>

</main>

<?php include "parts/footer.php"; ?>

<script src="js/common.js"></script>
<script src="js/index.js"></script>

</body>
</html>