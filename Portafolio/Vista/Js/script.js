let btn = document.querySelector("#btn");
let barra = document.querySelector(".barra");

btn.onclick = function() {
	barra.classList.toggle("active");
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