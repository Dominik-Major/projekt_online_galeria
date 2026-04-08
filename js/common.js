// hamburger button toggle. Adds open class to mobile navbar when clicked
const btn = document.getElementById('hamburgerBtn');
const menu = document.getElementById('mobileMenu');
btn.addEventListener('click', () => {
  menu.classList.toggle('open');
});