const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".menu");
const navLink = document.querySelectorAll(".menu-link");

const boutonMenuRDV = document.getElementById("bttnMenuRDV");
const boutonContactRDV = document.getElementById("bttnContactRDV");
const boutonPourQuoiTop = document.getElementById("pourquoiTopBttn");
const boutonPourQuiTop = document.getElementById("pourQuiTopBttn");




/* Fonction faisant marcher le bouton pour aller sur le service de rdv */
function pageRDV() {
	let choix = confirm(
		"Vous allez quitter cette page pour rejoindre la page professionnelle Facebook du cabinet. \n\nVoulez-vous continuer?"
	);
	if (choix == true)
		window.location.href =
			"https://www.facebook.com/Osteopathemions";
}

/* Fonctions pour faire s'afficher ou se fermer le menu hamburger */

function mobileMenu() {
	hamburger.classList.toggle("active");
	navMenu.classList.toggle("active");
}

function closeMenu() {
	hamburger.classList.remove("active");
	navMenu.classList.remove("active");
}

/* Fonction pour remplacer le tirtre et logo des articles de la section Pour qui prendre RDv par le contenu de l'article et vice-versa */
function changeTexte(id1, id2) {
	d1 = document.getElementById(id1);
	d2 = document.getElementById(id2);
	if (d2.style.display == "none") {
		d1.style.display = "none";
		d2.style.display = "block";
	} else {
		d1.style.display = "block";
		d2.style.display = "none";
	}
}

/* Fonction du bouton de retour en haut de page */
function topFonction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}



/* Écoute des événements pour le menu hamburger */
hamburger.addEventListener("click", mobileMenu);

navLink.forEach((n) => n.addEventListener("click", closeMenu));

hamburger.addEventListener("keyup", function (event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.querySelector(".hamburger").click();
	}
});

/* Écoute des évenements des boutons Prendre RDV (l'élément <bouton></bouton> automatiquement associe l'évenement keypress enter à l'événement click =) */
boutonMenuRDV.addEventListener("click", pageRDV);
boutonContactRDV.addEventListener("click", pageRDV);

/* Écoute des événements sur les boutons de retour en haut de page */
boutonPourQuoiTop.addEventListener("click", topFonction);
boutonPourQuiTop.addEventListener("click",topFonction);

