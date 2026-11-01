const word = document.getElementById('word');
const nav = document.getElementById('nav');
const menuButton = document.getElementById('menu');
const searchForm = document.getElementById('search');
const heroVideo = document.getElementById('heroVideo');
const loginLink = document.querySelector('.cta');

if (word) {
  const letters = [...word.textContent].map((character, index) => {
    const span = document.createElement('span');
    span.className = 'l';
    span.style.animationDelay = `${index * 80}ms`;
    span.textContent = character;
    return span;
  });

  word.textContent = '';
  letters.forEach((letter) => word.appendChild(letter));
}

if (menuButton && nav) {
  menuButton.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(isOpen));
  });
}

if (searchForm) {
  searchForm.addEventListener('submit', (event) => {
    event.preventDefault();
  });
}

if (heroVideo) {
  window.addEventListener('beforeunload', () => {
    heroVideo.pause();
    heroVideo.removeAttribute('src');
    heroVideo.load();
  });
}

if (loginLink && heroVideo) {
  loginLink.addEventListener('click', () => {
    heroVideo.pause();
    heroVideo.currentTime = 0;
  });
}

const scrollTargetId = new URLSearchParams(window.location.search).get('scroll');

if (scrollTargetId) {
  const scrollTarget = document.getElementById(scrollTargetId);

  if (scrollTarget) {
    window.history.replaceState(null, '', `${window.location.pathname}#${scrollTargetId}`);
    window.scrollTo(0, 0);
    window.setTimeout(() => {
      const targetTop = scrollTarget.getBoundingClientRect().top + window.scrollY;
      window.scrollTo({ top: targetTop, behavior: 'smooth' });
    }, 100);
  }
}
