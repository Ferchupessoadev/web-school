import driversNavBtns from './drivers/navBtns.js'



const btnPrimary = document.querySelector(".nav__h1-responsive");
btnPrimary.addEventListener("click", () => {
	window.location.reload()
});

driversNavBtns();
// parte para manejar el nav en reponsive
const btnNav = document.querySelector(".nav-responsive__nav-btn");
const navResponsive = document.querySelector(".nav-responsive");
btnNav.addEventListener("click", () => {
	const navBar = navResponsive.children[2]
	navBar.classList.toggle("toogle-nav");
	navBar.style.transition = "transform 0.5s ease-in-out";
});
