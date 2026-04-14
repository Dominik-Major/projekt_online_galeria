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
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Dominik Major">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
    <!--custom css after bootstrap to ovverwrite certain styles-->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/gallery.css">
</head>
<body>
  <?php include "parts/navbar.php" ?>
    <main>
        <h1 class="text-center fw-semibold mt-5">GALLERY</h1>
        <!--button group for selecting image 'folder' to display-->
        <div class="container py-4 text-center">
          <div class="btn-group mb-4" role="group">
            <button class="btn btn-outline-dark" data-category="events">Events</button>
            <button class="btn btn-outline-dark" data-category="nature">Nature</button>
            <button class="btn btn-outline-dark" data-category="street">Street Photography</button>
          </div>
          <!--container for generated images. img tags added here through gallery.js-->
          <?php
            $category = $_GET["category"] ?? null;
            renderMasonryGallery("data/gallery.json", $category);
          ?>
        <!--lightbox for viewing enlarged images. X button for closing lightbox-->
        <div id="lightbox" class="d-none">
          <span id="lightbox-close">&times;</span>
          <img id="lightbox-img" src="" alt="Full view">
        </div>
        </div>

    </main>
    <?php include "parts/footer.php" ?>
    <!--Links to js files-->
    <script src="js/common.js"></script>
    <script src="js/gallery.js"></script>
</body>
</html>