const elementoButao = document.querySelector('saber-mais');

const elementoTexto = document.querySelector('texto-escondido');

elementoButao.addEventListener('click', function() {

  if(elementoTexto.style.display == "none") {

    elementoTexto.style.display == "block";

  } else {

    elementoTexto.style.display == "none";

  }

})