let navLinks = document.querySelectorAll('.link-nav');
let previous = null;

navLinks.forEach(el => {
  el.addEventListener('click', function(event) {
    if(!el.classList.contains('active')) {
      event.preventDefault();

      if (previous != null && previous !== el) {
        previous.style.color = '#fff';
        previous.classList.remove('active');
      }

      el.style.color = '#854DFF'; // Alterar a cor do clique
      el.classList.add('active');

      previous = el;

      const targetId = el.getAttribute('href');
      console.log(targetId);
      const targetSection = document.querySelector(targetId);
      console.log(targetSection);
      const offset = targetSection.offsetTop - 70; // 120 is the height of the navbar

      if (targetSection) {
        window.scrollTo({
          top: offset,
          behavior: 'smooth'
        });
      }
    }
  })
})
