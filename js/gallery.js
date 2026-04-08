//base folder path and element where images will be appended
const basePath = "img/gallery/";
const container = document.getElementById("masonry-gallery");
//kreativny bod
//appending every image from the selected folder to the masonry-gallery
function loadFolder(folderName) {
    const images = folders[folderName]; // from generated_gallery.js
    container.innerHTML = ""; // clear previous images

    images.forEach(filename => {
        const wrapper = document.createElement("div");
        wrapper.className = "masonry-item"; // adds css class for styling to the images

        const img = document.createElement("img");
        img.src = `${basePath}${folderName}/${filename}`;
        img.alt = filename;

        wrapper.appendChild(img);
        container.appendChild(wrapper);
    });
}

//add event listeners for buttons to select folder
document.querySelectorAll("[data-folder]").forEach(btn => {
    btn.addEventListener("click", () => {
        loadFolder(btn.dataset.folder);
    });
});

//load default folder when page is loaded
loadFolder("events");

//get elements for lightbox to work with
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightbox-img");
const lightboxClose = document.getElementById("lightbox-close");
//kreativny  bod
//open lightbox by removing the d-none class
function openLightbox(src) {
    lightboxImg.src = src;
    lightbox.classList.remove("d-none");
}

//adding back d-none to close lightbox
function closeLightbox() {
    lightbox.classList.add("d-none");
    lightboxImg.src = "";
}

//add listener to X button
lightboxClose.addEventListener("click", closeLightbox);

//lightbox closes when clicked outside of the image
lightbox.addEventListener("click", (e) => {
    if (e.target === lightbox) closeLightbox();
});

//add click listeners to dynamically generated images
function attachLightbox() {
    document.querySelectorAll(".masonry-item img").forEach(img => {
        img.addEventListener("click", () => openLightbox(img.src));
    });
}
//call function so default folder has lightboxes
attachLightbox();
//function for attaching lightboxes after changing folders, called after a folder changes
loadFolder = (function(original) {
    return function(folderName) {
        original(folderName);  //original loadFolder function
        attachLightbox();      //attach lightbox to new images
    };
})(loadFolder);
