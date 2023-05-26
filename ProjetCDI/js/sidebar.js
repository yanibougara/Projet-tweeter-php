

// Sélectionner l'icône pour ouvrir la sidenav
const openNav  = document.querySelector(".open-nav" )

// Sélectionner la sidenav
const sideNav = document.querySelector(".overlay-sidebar");

// Sélectionner l'icône pour fermer la sidenav
const closeNav = document.querySelector(".close-nav");

// Ouvrir la sidenav lorsque l'icône est cliqué
openNav.addEventListener("click", () => {
  sideNav.classList.add("active");
});

// Fermer la sidenav lorsque l'icône est cliqué
closeNav.addEventListener("click", () => {
  sideNav.classList.remove("active");
});

