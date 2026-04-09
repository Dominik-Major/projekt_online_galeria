<!--Vertical navbar for large screen. Logo & links-->
<nav class="left-vertical-navbar d-none d-lg-flex flex-column align-items-center p-3">
    <a href="index.php">
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
        <a href="index.php">
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