const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".menu");
const navLink = document.querySelectorAll(".menu-link");

const boutonRDV =document.querySelector(".bttnRDV");

const nourrisson = document.getElementById("nourrisson");
const enfants = document.getElementById("enfants");
const adultes = document.getElementById("adultes");
const seniors = document.getElementById("seniors");
const enceintes = document.getElementById("enceintes");
const sportifs = document.getElementById("sportifs");

function mobileMenu() {
	hamburger.classList.toggle("active");
	navMenu.classList.toggle("active");
}

function closeMenu() {
	hamburger.classList.remove("active");
	navMenu.classList.remove("active");
}

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

function topFonction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

function pageRDV() {
	let choix= confirm("Vous allez quitter cette page pour rejoindre \nle service de prise de rendez-vous. \nVoulez-vous continuer?");
	if (choix==true)
		window.location.href='https://us.cloudamo.com/index.php/apps/appointments/pub/O6%2B%2Bil3TjvYevRxivClmyH_nfIdUuu8ijwfgbw%3D%3D/form';
	
}

	changeTexte("nourrissonVitrine", "nourrissonTexte");
	changeTexte("enfantsVitrine", "enfantsTexte");
	changeTexte("adultesVitrine", "adultesTexte");
	changeTexte("seniorsVitrine", "seniorsTexte");
	changeTexte("enceintesVitrine", "enceintesTexte");
	changeTexte("sportifsVitrine", "sportifsTexte");


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


nourrisson.addEventListener("keyup", function (event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.getElementById("nourrisson").click();
	}
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

adultes.addEventListener("keyup", function (event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.getElementById("adultes").click();
	}
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

enceintes.addEventListener("keyup", function (event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.getElementById("enceintes").click();
	}
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
