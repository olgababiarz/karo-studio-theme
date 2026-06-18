const hamburger = document.querySelector('.header__hamburger');
const nav = document.querySelector('.navigation');
hamburger.addEventListener('click', function() {
  if (nav.style.display === 'flex') {
  nav.style.display = 'none';
} else {
  nav.style.display = 'flex';
}
});