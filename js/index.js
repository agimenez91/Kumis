const burger = document.querySelector('.burger');
const menu = document.querySelector('.menu');
const top = document.querySelector('.topbar');


burger.addEventListener('click', () => {
  menu.classList.toggle('active');
  burger.classList.toggle('active');
  top.classList.toggle('active');
});

menu.addEventListener('click', () => {
  menu.classList.remove('active');
  burger.classList.remove('active');
  top.classList.remove('active');
});

  