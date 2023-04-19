// Fait apparaître et disparaître la sidebar
document.querySelector("#hamburger").addEventListener("click", () => {
    const sidebar = document.querySelector(".overlay-sidebar");
    sidebar.classList.toggle("active");
});
// Récupération de l'id "cross" sur le burger menu
const cross = document.getElementById("cross");
const burger = document.getElementById("hamburger");

// Gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger
cross.addEventListener("click", () => {
    burger.classList.toggle("cross-it");
});
