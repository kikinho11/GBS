let navLinks = document.querySelectorAll('.nav-link');
let previous = null;

navLinks.forEach(el => {
  el.addEventListener('click', function(event) {
    if(!el.classList.contains('active')) {
      event.preventDefault();

      if (previous != null && previous !== el) {
        previous.style.color = '#fff';
        previous.classList.remove('active');
      }

      el.style.color = '#854DFF';
      el.classList.add('active');

      previous = el;

      const targetId = el.getAttribute('href');
      const targetSection = document.querySelector(targetId);
      const offset = targetSection.offsetTop - 120; // 120 is the height of the navbar

      if (targetSection) {
        window.scrollTo({
          top: offset,
          behavior: 'smooth'
        });
      }
    }
  })
})
