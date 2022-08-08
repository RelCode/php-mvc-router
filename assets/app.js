const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const container = document.querySelector(".header");
let navHeight = container.clientHeight;
document.querySelector(".container").style.height = 'calc(100% - '+navHeight+'px)'