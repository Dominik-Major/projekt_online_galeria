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
  <!--Vertical navbar for large screen. Logo & links-->
    <nav class="left-vertical-navbar d-none d-lg-flex flex-column align-items-center p-3">
      <a href="index.html">
        <img src="img/logo.png" alt="Logo" class="img-fluid">
      </a>
      <div class="d-flex flex-column align-items-center justify-content-between w-100 mt-4">
        <a class="nav-link-custom" href="index.php">Home</a>
        <a class="nav-link-custom" href="gallery.php">Gallery</a>
        <a class="nav-link-custom" href="gear.php">My Gear</a>
        <a class="nav-link-custom" href="contact.php">Contact</a> 
      </div>
    </nav>
    <!--Vertical navbar for mobile devices hidden until opened by hamburger button-->
    <nav class="mobile-navbar d-lg-none d-flex justify-content-between align-items-center p-3 fixed-top">
        <a href="index.html">
          <img src="img/logo.png" alt="Logo" class="img-fluid">
        </a>
        <!--Hamburger button-->
        <button class="hamburger-btn" id="hamburgerBtn">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>
    <!--Links for the mobile navbar-->
    <div class="mobile-menu d-lg-none" id="mobileMenu">
        <a class="nav-link-custom" href="index.php">Home</a>
        <a class="nav-link-custom" href="gallery.php">Gallery</a>
        <a class="nav-link-custom" href="gear.php">My Gear</a>
        <a class="nav-link-custom" href="contact.php">Contact</a>
    </div>
    <main>
        <h1 class="text-center fw-semibold mt-5">GALLERY</h1>
        <!--button group for selecting image 'folder' to display-->
        <div class="container py-4 text-center">
          <div class="btn-group mb-4" role="group">
            <button class="btn btn-outline-dark" data-folder="events">Events</button>
            <button class="btn btn-outline-dark" data-folder="nature">Nature</button>
            <button class="btn btn-outline-dark" data-folder="street">Street Photography</button>
          </div>
          <!--container for generated images. img tags added here through gallery.js-->
          <div id="masonry-gallery"></div>
        </div>
        <!--lightbox for viewing enlarged images. X button for closing lightbox-->
        <div id="lightbox" class="d-none">
          <span id="lightbox-close">&times;</span>
          <img id="lightbox-img" src="" alt="Full view">
        </div>

    </main>
    <footer>
       <!--footer containing info and copyright of page-->
      <div class="gallery-grid">
        <div class="contaiener text-center text-secondary mt-5">
          <p>Content:</p>
          <p class="mb-0">Image Portfolio</p>
          <p class="mb-0">General Information</p>
          <p>Contact Form</p>
        </div>
        <div class="contaiener text-center text-secondary mt-5">
          <p class="mb-0">Student Project</p>
          <p class="mb-0">Made by</p>
          <p>Dominik Major</p>
          <p class="mb-0">Every Image Owned by Author</p>
          <p>© 2025 Nitra Slovakia</p>
        </div>
        <div class="contaiener text-center text-secondary mt-5">
          <p>Web Page Created Using:</p>
          <p class="mb-0">HTML</p>
          <p class="mb-0">CSS</p>
          <p class="mb-0">CSS Bootstrap</p>
          <p>JavaScript</p>
        </div>
      </div>
    </footer>
    <!--Links to js files-->
    <script src="js/generated_gallery.js"></script>
    <script src="js/common.js"></script>
    <script src="js/gallery.js"></script>
</body>
</html>