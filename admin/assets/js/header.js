const navMenu = document.getElementById("navbar-menu");
const navToggle = document.getElementById("navbar-toggle");
const navClose = document.getElementById("navbar-close");

if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show");
  });
}

if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show");
  });
}
