<?php

function renderCarousel($jsonPath) {
    if (!file_exists($jsonPath)) {
        echo "<p>Carousel data not found.</p>";
        return;
    }

    $json = file_get_contents($jsonPath);
    $images = json_decode($json, true);

    if (!$images) {
        echo "<p>Invalid JSON data.</p>";
        return;
    }

    echo '<div class="carousel-container">';
    echo '<h1 class="text-center fw-semibold title">MY GALLERY - PORTFOLIO</h1>';

    foreach ($images as $index => $img) {
        $activeClass = $index === 0 ? 'active' : '';

        echo '<div class="carousel-slide ' . $activeClass . '">';
        echo '<picture>';
        echo '<source srcset="' . $img["mobile"] . '" media="(max-width: 992px)">';
        echo '<img src="' . $img["desktop"] . '" class="' . $img["class"] . '" alt="' . $img["alt"] . '" loading="lazy">';
        echo '</picture>';
        echo '</div>';
    }

    echo '<button class="carousel-btn prev">❮</button>';
    echo '<button class="carousel-btn next">❯</button>';

    echo '</div>';
}

function renderHomeGallery($jsonPath) {

    if (!file_exists($jsonPath)) {
        echo "<p>Gallery data not found.</p>";
        return;
    }

    $images = json_decode(file_get_contents($jsonPath), true);

    echo '<div class="container py-5">';
    echo '<div class="gallery-grid">';

    foreach ($images as $img) {

        $spanClass = isset($img["span"]) ? 'span-' . $img["span"] : '';
        $version = file_exists($img["src"]) ? filemtime($img["src"]) : time();

        echo '<img 
                src="' . $img["src"] . '?v=' . $version . '" 
                class="' . $spanClass . '" 
                alt="' . $img["alt"] . '" 
                loading="lazy"
              >';
    }

    echo '</div>';
    echo '</div>';
}

function renderMasonryGallery($jsonPath) {

    if (!file_exists($jsonPath)) {
        echo "<p>Gallery JSON not found.</p>";
        return;
    }

    $data = json_decode(file_get_contents($jsonPath), true);

    if (!$data) {
        echo "<p>Invalid JSON data.</p>";
        return;
    }

    echo '<div id="masonry-gallery">';

    foreach ($data as $catName => $images) {

        foreach ($images as $img) {

            $src = "img/gallery/$catName/$img";
            $version = file_exists($src) ? filemtime($src) : time();

            echo '<div class="masonry-item" data-category="' . $catName . '">
                    <img 
                        src="' . $src . '?v=' . $version . '" 
                        class="gallery-item"
                        alt="' . $img . '"
                        loading="lazy"
                    >
                  </div>';
        }
    }

    echo '</div>';
}

function renderGearAccordion($jsonPath) {

    if (!file_exists($jsonPath)) {
        echo "<p>JSON not found</p>";
        return;
    }

    $data = json_decode(file_get_contents($jsonPath), true);

    echo '<div class="container w-50 py-5">';

    foreach ($data as $section) {

        echo '<div class="accordion border">';

        // TITLE
        echo '<div class="Q fs-3 fw-semibold">' . $section["title"] . '</div>';

        echo '<div class="A">';

        foreach ($section["items"] as $item) {

            echo '<div class="row align-items-center justify-content-center g-4">';

            // IMAGE
            echo '<div class="col-12 col-md-6 text-center">
                    <img src="' . $item["img"] . '" 
                         class="img-fluid rounded" 
                         loading="lazy">
                  </div>';

            // TEXT
            echo '<div class="col-12 col-md-6">
                    <h2>' . $item["name"] . '</h2>
                    <p>Release Date: ' . $item["release"] . '</p>
                    <p>' . $item["desc"] . '</p>
                    <p>Price: ' . $item["price"] . '</p>
                    <a href="' . $item["link"] . '" target="_blank" class="btn btn-dark">
                      Available link
                    </a>
                  </div>';

            echo '</div>';
        }

        echo '</div>'; // A
        echo '</div>'; // accordion
    }

    echo '</div>';
}