const elementoButao = document.getElementById("saber-mais");
const elementoTexto = document.getElementById('texto-escondido');

elementoButao.addEventListener('click', function() {
  if (elementoTexto.style.display === "none") {

    elementoTexto.style.display = "block";

  } else {

    elementoTexto.style.display = "none";

  }

});