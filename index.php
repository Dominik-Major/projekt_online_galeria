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
    <main>
      <!--Slideshow with title. Rotating after a few seconds or controlled with carousel-btn buttons-->
        <div class="carousel-container">
          <h1 class="text-center fw-semibold title">MY GALLERY - PORTFOLIO</h1>
          <!--carousel-slide: individual element of the slideshow. Active showing on page-->
            <div class="carousel-slide active">
              <picture>
                <!--different images based on screen size for fit-->
                <source srcset="img/home/2.jpg" media="(max-width: 992px)">
                <img src="img/carousel/1.JPEG" class="c_1" alt="carousel_picture_1">
              </picture>
            </div>
            <div class="carousel-slide">
              <picture>
                <source srcset="img/home/3.JPEG" media="(max-width: 992px)">
                <img src="img/carousel/2.JPEG" class="c_2" alt="carousel_picture_2">
              </picture>
            </div>
            <div class="carousel-slide">
              <picture>
                <source srcset="img/home/6.jpg" media="(max-width: 992px)">
                <img src="img/carousel/3.JPEG" class="c_3" alt="carousel_picture_3">
              </picture>
            </div>
            <div class="carousel-slide">
              <picture>
                <source srcset="img/home/7.jpg" media="(max-width: 992px)">
                <img src="img/carousel/4.JPEG" class="c_4" alt="carousel_picture_4">
              </picture>
            </div>
            <div class="carousel-slide">
              <picture>
                <source srcset="img/home/8.JPEG" media="(max-width: 992px)">
                <img src="img/carousel/5.JPEG" class="c_5" alt="carousel_picture_5">
              </picture>
            </div>
            <!--Left, right buttons for controlling the slideshow.-->
            <button class="carousel-btn prev">❮</button>
            <button class="carousel-btn next">❯</button>
        </div>
        <h1 class="text-center fw-semibol0d mt-5">Events, Nature, Street Photography</h1>
        <div class="container py-5 w-50 text-center title-cont">
          <a href="gallery.php" class="btn btn-outline-dark">Full Gallery</a>
        </div>
        <!--Container for photo grid with three collumns. Horizontal images take up 2 collumns on large screens-->
        <div class="container py-5">
          <div class="gallery-grid">
            <img src="img/home/1.JPG" class="span-2" alt="home_picture_1">
            <img src="img/home/2.jpg" alt="home_picture_2">
            <img src="img/home/3.JPEG" alt="home_picture_3">
            <img src="img/home/4.jpg" class="span-2" alt="home_picture_4">
            <img src="img/home/5.jpg" class="span-2" alt="home_picture_5">
            <img src="img/home/6.jpg" alt="home_picture_6">
          </div>
        </div>
    </main>
    <?php include "parts/footer.php" ?>
    <!--Links to js files-->
    <script src="js/common.js"></script>
    <script src="js/index.js"></script>
</body>
</html>