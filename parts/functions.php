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

function renderMasonryGallery($jsonPath, $category = null) {

    $data = json_decode(file_get_contents($jsonPath), true);

    echo '<div id="masonry-gallery">';

    foreach ($data as $catName => $images) {

        // filter category
        if ($category && $category !== $catName) {
            continue;
        }

        foreach ($images as $img) {

            $src = "img/gallery/$catName/$img";
            $version = file_exists($src) ? filemtime($src) : time();

            echo '<div class="masonry-item" data-category="' . $catName . '">
                    <img 
                        src="' . $src . '?v=' . $version . '" 
                        class="gallery-item"
                        loading="lazy"
                        alt="' . $img . '"
                    >
                  </div>';
        }
    }

    echo '</div>';
}