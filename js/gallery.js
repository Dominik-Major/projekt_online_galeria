document.addEventListener("DOMContentLoaded", () => {

    // LIGHTBOX
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const lightboxClose = document.getElementById("lightbox-close");

    function openLightbox(src) {
        lightboxImg.src = src;
        lightbox.classList.remove("d-none");
    }

    function closeLightbox() {
        lightbox.classList.add("d-none");
        lightboxImg.src = "";
    }

    lightboxClose.addEventListener("click", closeLightbox);

    lightbox.addEventListener("click", (e) => {
        if (e.target === lightbox) closeLightbox();
    });

    // IMAGE CLICK
    document.querySelectorAll(".gallery-item").forEach(img => {
        img.addEventListener("click", () => {
            openLightbox(img.src);
        });
    });

    // FILTER BUTTONS
    document.querySelectorAll("[data-category]").forEach(btn => {
        btn.addEventListener("click", () => {

            const category = btn.dataset.category;

            document.querySelectorAll(".masonry-item").forEach(item => {
                const match =
                    category === "all" ||
                    item.dataset.category === category;

                item.style.display = match ? "block" : "none";
            });

        });
    });

});