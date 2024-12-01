function openNav() {
    let nav = document.getElementById("navbar-list");
    let hamburger = document.getElementById("hamburger");
    let x = document.getElementById("x");

    nav.style.display = "flex";
    hamburger.style.display = "none";
    x.style.display = "flex";
}

function closeNav() {
    let nav = document.getElementById("navbar-list");
    let hamburger = document.getElementById("hamburger");
    let x = document.getElementById("x");

    nav.style.display = "none";
    hamburger.style.display = "flex";
    x.style.display = "none";
}