//hamburger menu
const btn = document.querySelector(".navigation__wrap__btn");
const menu = document.querySelector(".navigation__wrap__menu");
const item = document.querySelectorAll(".navigation__wrap__menu ul li a");
btn.addEventListener("click", () => {
  menu.classList.toggle("open");
});

item.forEach((i) => {
  i.addEventListener("click", () => {
    menu.classList.toggle("open");
  });
});

//footer year
document.querySelector(".footer__wrap__logo__date").innerHTML =
  new Date().getFullYear();
