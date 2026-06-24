const hamburger = document.querySelector('.header__hamburger');
const nav = document.querySelector('.navigation');
hamburger.addEventListener('click', function() {
  if (nav.style.display === 'flex') {
  nav.style.display = 'none';
} else {
  nav.style.display = 'flex';
}
});

// Liczniki animowane
const liczniki = document.querySelectorAll('.o-mnie__liczba-wartosc');

const animujLicznik = (el) => {
    const cel = parseInt(el.getAttribute('data-target'));
    const czas = 1000;
    const krok = cel / (czas / 16);
    let aktualna = 0;

    const timer = setInterval(() => {
        aktualna += krok;
        if (aktualna >= cel) {
            el.textContent = cel;
            clearInterval(timer);
        } else {
            el.textContent = Math.floor(aktualna);
        }
    }, 16);
};

const obserwator = new IntersectionObserver((wpisy) => {
    wpisy.forEach((wpis) => {
        if (wpis.isIntersecting) {
            animujLicznik(wpis.target);
            obserwator.unobserve(wpis.target);
        }
    });
});

liczniki.forEach((licznik) => obserwator.observe(licznik));