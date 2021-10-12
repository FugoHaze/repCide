let btn = document.querySelector("#btn");
let barra = document.querySelector(".barra");

btn.onclick = function() {
	barra.classList.toggle("active");
}
//Funciones para ocultar y mostrar el código

//1. Código 1, Fracciones
function codigo1M(){
	document.getElementById("cod1").style.display = "inline";
}function codigo1O(){
	document.getElementById("cod1").style.display = "none";
}
function codigo2M(){
	document.getElementById("cod2").style.display = "inline";
}function codigo2O(){
	document.getElementById("cod2").style.display = "none";
}
function codigo3M(){
	document.getElementById("cod3").style.display = "inline";
}function codigo3O(){
	document.getElementById("cod3").style.display = "none";
}



function typewriter(element, text, delay = 100) {
	for (let i = 0; i < text.length; i++) {
	  setTimeout(() => {
		element.innerHTML += text[i];
	  }, delay * i);
	}
  }
  const le = document.getElementsByClassName("prueba");
  const el = document.getElementById("typewriter");
  typewriter(el, "Mi Portafolio de Programador");