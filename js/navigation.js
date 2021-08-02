const hamburger = document.getElementById('mobile-nav-control');
const nav = document.querySelector('nav#mobile-nav');
const hamburger_line = hamburger.getElementsByClassName('hamburger-icon');

hamburger.addEventListener('click', () => {
    nav.classList.toggle('open');
    hamburger_line[0].classList.toggle('top');
    hamburger_line[1].classList.toggle('middle');
    hamburger_line[2].classList.toggle('bottom');
});
