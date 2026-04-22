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
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
  <?php include "parts/navbar.php" ?>
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
        <form id="contactForm" class="mt-4" method="post" action="db/spracovanieFormulara.php">
            <!--name input-->
            <div class="mb-3">
                <label for="name" class="form-label">*Name</label>
                <input type="text" id="name" name="name" class="form-control" novalidate>
                <div class="text-danger small" id="nameError"></div>
            </div>
            <!--e-mail input-->
            <div class="mb-3">
                <label for="email" class="form-label">*Email</label>
                <input type="email" id="email" name="email" class="form-control" novalidate>
                <div class="text-danger small" id="emailError"></div>
            </div>
            <!--optional text area-->
            <div class="mb-3">
                <label for="message" class="form-label">Message (optional)</label>
                <textarea id="message" name="message" rows="5" class="form-control" novalidate></textarea>
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
    <?php include "parts/footer.php" ?>
    <!--Links to js files-->
    <script src="js/common.js"></script>
    <script src="js/contact.js"></script>
</body>
</html>