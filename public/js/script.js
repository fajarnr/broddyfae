const toggle = document.querySelector('.menu-toggle');
const navbar = document.querySelector('.custom-navbar');
toggle.addEventListener('click', () => {
    navbar.classList.toggle('active');
});