const hamburger = document.querySelector('.hamburger-menu');
const navMenu = document.querySelector('.nav-menu-mobile');
hamburger.addEventListener('click', () => {
	navMenu.classList.toggle('show');
});