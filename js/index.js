document.addEventListener('DOMContentLoaded', () => {
  const hamburger = document.querySelector('.burger');
  const menu = document.querySelector('.menu');
  const topbar = document.querySelector('.topbar');

  hamburger.addEventListener('click', () => {
    menu.classList.toggle('active');
    hamburger.classList.toggle('active');
    topbar.classList.toggle('active');
  });

  menu.addEventListener('click', () => {
    menu.classList.remove('active');
    hamburger.classList.remove('active');
    topbar.classList.remove('active');
  });
});
