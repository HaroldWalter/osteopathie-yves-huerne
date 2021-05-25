const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".menu");
const navLink = document.querySelectorAll(".menu-link");

const boutonMenuRDV = document.getElementById("bttnMenuRDV");
const boutonContactRDV = document.getElementById("bttnContactRDV");
const boutonPourQuoiTop = document.getElementById("pourquoiTopBttn");
const boutonPourQuiTop = document.getElementById("pourQuiTopBttn");

const nourrisson = document.getElementById("nourrisson");
const enfants = document.getElementById("enfants");
const adultes = document.getElementById("adultes");
const seniors = document.getElementById("seniors");
const enceintes = document.getElementById("enceintes");
const sportifs = document.getElementById("sportifs");

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

/* Fonction faisant marcher le bouton pour aller sur le service de rdv */
function pageRDV() {
	let choix = confirm(
		"Vous allez quitter cette page pour rejoindre \nle service de prise de rendez-vous. \nVoulez-vous continuer?"
	);
	if (choix == true)
		window.location.href =
			"https://us.cloudamo.com/index.php/apps/appointments/pub/O6%2B%2Bil3TjvYevRxivClmyH_nfIdUuu8ijwfgbw%3D%3D/form";
}

/* initialisation des articles de la section Pour qui prendre RDV afin d'être sur que le contenu de la bulle change au premier clic */
changeTexte("nourrissonVitrine", "nourrissonTexte");
changeTexte("enfantsVitrine", "enfantsTexte");
changeTexte("adultesVitrine", "adultesTexte");
changeTexte("seniorsVitrine", "seniorsTexte");
changeTexte("enceintesVitrine", "enceintesTexte");
changeTexte("sportifsVitrine", "sportifsTexte");

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

/* Écoute des évènements click et appuie sur entrée sur les articles de la section Pour Qui Prendre RDV */

nourrisson.addEventListener("click", function (event) {
	changeTexte("nourrissonVitrine", "nourrissonTexte");
});

nourrisson.addEventListener("keyup", function (event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.getElementById("nourrisson").click();
	}
});

enfants.addEventListener("click", function (event) {
	changeTexte("enfantsVitrine", "enfantsTexte");
});

enfants.addEventListener("keyup", function (event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.getElementById("enfants").click();
	}
});

adultes.addEventListener("click", function (event) {
	changeTexte("adultesVitrine", "adultesTexte");
});

adultes.addEventListener("keyup", function (event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.getElementById("adultes").click();
	}
});

seniors.addEventListener("click", function (event) {
	changeTexte("seniorsVitrine", "seniorsTexte");
});

seniors.addEventListener("keyup", function (event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.getElementById("seniors").click();
	}
});

enceintes.addEventListener("click", function (event) {
	changeTexte("enceintesVitrine", "enceintesTexte");
});

enceintes.addEventListener("keyup", function (event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.getElementById("enceintes").click();
	}
});

sportifs.addEventListener("click", function (event) {
	changeTexte("sportifsVitrine", "sportifsTexte");
});

sportifs.addEventListener("keyup", function (event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.getElementById("sportifs").click();
	}
});
