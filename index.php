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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <?php require_once "parts/functions.php"; ?>
    <main>
      <!--Slideshow with title. Rotating after a few seconds or controlled with carousel-btn buttons-->
        <?php renderCarousel("data/carousel.json"); ?>
        <h1 class="text-center fw-semibol0d mt-5">Events, Nature, Street Photography</h1>
        <div class="container py-5 w-50 text-center title-cont">
          <a href="gallery.php" class="btn btn-outline-dark">Full Gallery</a>
        </div>
        <!--Container for photo grid with three collumns. Horizontal images take up 2 collumns on large screens-->
        <?php renderHomeGallery("data/home_gallery.json"); ?>
    </main>
    <?php include "parts/footer.php" ?>
    <!--Links to js files-->
    <script src="js/common.js"></script>
    <script src="js/index.js"></script>
</body>
</html>