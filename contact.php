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
    <link rel="stylesheet" href="css/contact.css">
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
      <h1 class="text-center fw-semibold mt-5">CONTACT</h1>
      <!--container for initial text and links-->
      <div class="container w-50 py-5">
        <p class="text-center fs-5 mb-3">For any inquiries, make sure to fill out the following form or 
          contact me through my socials listed below.
        </p>
        <p class="text-center fs-5 mb-3">E-mail: <a href="mailto:dominik.major@student.ukf.sk">dominik.major@student.ukf.sk</a></p>
        <p class="text-center fs-5 mb-3">Phone: <a href="tel:+4733378901">+47 333 78 901</a></p>
      </div>
      <!--container for the form that centers the elements.-->
      <div class="container mt-5">
        <form id="contactForm" novalidate class="mt-4">
            <!--name input-->
            <div class="mb-3">
                <label for="name" class="form-label">*Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
                <div class="text-danger small" id="nameError"></div>
            </div>
            <!--e-mail input-->
            <div class="mb-3">
                <label for="email" class="form-label">*Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <div class="text-danger small" id="emailError"></div>
            </div>
            <!--optional text area-->
            <div class="mb-3">
                <label for="message" class="form-label">Message (optional)</label>
                <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
                <div class="text-danger small" id="messageError"></div>
            </div>
            <!--checkbox-->
            <div class="form-check mb-3">
                <input type="checkbox" id="consent" name="consent" class="form-check-input">
                <label for="consent" class="form-check-label">*I agree to the terms and conditions.</label>
                <div class="text-danger small" id="consentError"></div>
            </div>
            <!--submit button-->
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
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
    <script src="js/common.js"></script>
    <script src="js/contact.js"></script>
</body>
</html>