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
    <link rel="stylesheet" href="css/gear.css">
</head>
<body>
  <?php include "parts/navbar.php" ?>
    <main>
        <h1 class="text-center fw-semibold mt-5">MY CAMERA KIT</h1>
        <!--container for the accordions. Adds padding and controllable width of the entire element-->
        <div class="container py-5">
          <p class="text-center fs-5 mb-5">This section is dedicated to my camera gear. 
          From my everyday carry, to my setup on special occasions, 
          every piece is mentioned including camera bodies, lenses, accessories and some extra items of use.</p>
          <!--accordion section-->
          <?php
          include "parts/functions.php";
          renderGearAccordion("data/gear.json");
          ?>
        </div>
    </main>
    <?php include "parts/footer.php" ?>
    <!--Links to js files-->
    <script src="js/common.js"></script>
    <script src="js/gear.js"></script>
</body>
</html>