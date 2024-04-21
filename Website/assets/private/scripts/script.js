const hamburger = document.querySelector('.hamburger-menu');
const navMenu = document.querySelector('.nav-menu-mobile');

const title = document.getElementById('title');
const titleButton = document.getElementById('title-button');

hamburger.addEventListener('click', () => {
navMenu.classList.toggle('show');
});

window.addEventListener('scroll', () => {
	console.log('scrolling');
	var scroll = window.scrollY;
	title.style.marginTop = scroll * 0.6 + 'px';
	titleButton.style.marginTop = scroll * 0.05 + 'px';

});

