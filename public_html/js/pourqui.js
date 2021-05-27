const nourrisson = document.getElementById("nourrisson");
const enfants = document.getElementById("enfants");
const adultes = document.getElementById("adultes");
const seniors = document.getElementById("seniors");
const enceintes = document.getElementById("enceintes");
const sportifs = document.getElementById("sportifs");

/* initialisation des articles de la section Pour qui prendre RDV afin d'être sur que le contenu de la bulle change au premier clic */

changeTexte("nourrissonVitrine", "nourrissonTexte");
changeTexte("enfantsVitrine", "enfantsTexte");
changeTexte("adultesVitrine", "adultesTexte");
changeTexte("seniorsVitrine", "seniorsTexte");
changeTexte("enceintesVitrine", "enceintesTexte");
changeTexte("sportifsVitrine", "sportifsTexte");

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
