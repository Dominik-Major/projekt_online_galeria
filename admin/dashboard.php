<?php

require "auth.php";

$config = require __DIR__ . "/../config.php";

require_once __DIR__ . "/../db/Database.php";
require_once __DIR__ . "/../db/GalleryRepository.php";

$db = new Database($config["db"]);
$galleryRepo = new GalleryRepository($db);
$data = $galleryRepo->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>

<?php include "../parts/navbar.php"; ?>

<main class="content-wrapper">

<div class="container py-5">

    <h1 class="text-center fw-semibold mt-5">ADMIN DASHBOARD</h1>

    <!-- UPLOAD -->
    <div class="card p-4 mb-5">

        <h3>Upload Image</h3>

        <form action="upload.php" method="POST" enctype="multipart/form-data">

            <select name="category" class="form-select mb-2">
                <option value="events">Events</option>
                <option value="nature">Nature</option>
                <option value="street">Street</option>
            </select>

            <input type="file" name="image" class="form-control mb-2">

            <button class="btn btn-dark">
                Upload
            </button>

        </form>
    </div>

    <!-- GALLERY -->
    <div class="card p-4">

        <h3>Manage Gallery</h3>

        <?php foreach ($data as $category => $images): ?>

            <h4 class="mt-4"><?= htmlspecialchars($category) ?></h4>

            <div class="d-flex flex-wrap">

                <?php foreach ($images as $img): ?>

                    <div class="m-2 text-center">

                        <img src="../img/gallery/<?= $category ?>/<?= $img ?>"
                             width="120"
                             class="rounded">

                        <form method="POST" action="delete.php">

                            <input type="hidden" name="category" value="<?= $category ?>">
                            <input type="hidden" name="image" value="<?= $img ?>">

                            <button class="btn btn-sm btn-danger mt-1">
                                Delete
                            </button>

                        </form>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endforeach; ?>

    </div>

</div>

</main>

<?php include "../parts/footer.php"; ?>

<script src="../js/common.js"></script>

</body>
</html>