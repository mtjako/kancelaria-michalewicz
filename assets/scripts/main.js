//hamburger menu
const btn = document.querySelector(".navigation__wrap__btn");
const menu = document.querySelector(".navigation__wrap__menu");
btn.addEventListener("click", () => {
  console.log("click");
  menu.classList.toggle("open");
});

//footer year
document.querySelector(".footer__wrap__logo__date").innerHTML =
  new Date().getFullYear();
