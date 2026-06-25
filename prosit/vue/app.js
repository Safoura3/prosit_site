/* Script partage par toutes les pages :
   - ouverture/fermeture du menu sur mobile (burger)
   - bouton "retour en haut" qui apparait au defilement */

document.addEventListener("DOMContentLoaded", function () {
  // --- Menu responsive ---
  var toggle = document.querySelector(".nav-toggle");
  var nav = document.querySelector(".site-nav");
  if (toggle && nav) {
    toggle.addEventListener("click", function () {
      var ouvert = nav.classList.toggle("is-open");
      toggle.setAttribute("aria-expanded", ouvert ? "true" : "false");
    });
  }

  // --- Bouton retour en haut ---
  var bouton = document.createElement("button");
  bouton.className = "back-to-top";
  bouton.setAttribute("aria-label", "Retour en haut");
  bouton.innerHTML = "↑";
  document.body.appendChild(bouton);

  bouton.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  window.addEventListener("scroll", function () {
    if (window.pageYOffset > 300) {
      bouton.classList.add("show");
    } else {
      bouton.classList.remove("show");
    }
  });
});
