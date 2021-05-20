const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".menu");


const nourrisson = document.getElementById("nourrisson");

function mobileMenu() {
   hamburger.classList.toggle("active");
   navMenu.classList.toggle("active");
}
function changeTexte(id1,id2) {
   d1=document.getElementById(id1);
   d2=document.getElementById(id2);
   if(d2.style.display == "none") {
      d1.style.display = "none";
      d2.style.display = "block";
      }
      else {
         d1.style.display = "block";
         d2.style.display = "none";
      } 
};


function topFonction() {
	document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
}

hamburger.addEventListener("click", mobileMenu);










