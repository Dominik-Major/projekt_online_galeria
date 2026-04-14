<?php
// ak session ešte nie je spustená
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="left-vertical-navbar d-none d-lg-flex flex-column align-items-center p-3">

    <a href="<?= BASE_URL ?>/index.php">
        <img src="<?= BASE_URL ?>/img/logo.png" alt="Logo">
    </a>

    <div class="d-flex flex-column align-items-center justify-content-between w-100 mt-4">

        <a href="<?= BASE_URL ?>/index.php" class="nav-link-custom">Home</a>
        <a href="<?= BASE_URL ?>/gallery.php" class="nav-link-custom">Gallery</a>
        <a href="<?= BASE_URL ?>/gear.php" class="nav-link-custom">My Gear</a>
        <a href="<?= BASE_URL ?>/contact.php" class="nav-link-custom">Contact</a>

    <?php if (isset($_SESSION["user"])): ?>
        <a class="nav-link-custom text-warning" href="<?= BASE_URL ?>/admin/dashboard.php">
            Admin
        </a>
        <a class="nav-link-custom text-danger" href="<?= BASE_URL ?>/admin/logout.php">
            Logout
        </a>
    <?php else: ?>
        <a class="nav-link-custom text-primary" href="<?= BASE_URL ?>/admin/login.php">
            Login
        </a>
    <?php endif; ?>
    </div>
</nav>

<!-- MOBILE -->
<nav class="mobile-navbar d-lg-none d-flex justify-content-between align-items-center p-3 fixed-top">

    <a href="/index.php">
        <img src="/img/logo.png" alt="Logo" class="img-fluid">
    </a>

    <button class="hamburger-btn" id="hamburgerBtn">
        <span></span><span></span><span></span>
    </button>
</nav>

<div class="mobile-menu d-lg-none" id="mobileMenu">

    <a href="<?= BASE_URL ?>/index.php" class="nav-link-custom" >Home</a>
    <a href="<?= BASE_URL ?>/gallery.php" class="nav-link-custom">Gallery</a>
    <a href="<?= BASE_URL ?>/gear.php" class="nav-link-custom">My Gear</a>
    <a href="<?= BASE_URL ?>/contact.php" class="nav-link-custom">Contact</a>

    <?php if (isset($_SESSION["user"])): ?>
        <a class="nav-link-custom text-warning" href="<?= BASE_URL ?>/admin/dashboard.php">
            Admin
        </a>
    <?php endif; ?>

</div>