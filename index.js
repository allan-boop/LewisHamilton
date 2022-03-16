const action = document.querySelector(".menu-deroulant");
const lis = document.querySelector(".sous-menu");

action.addEventListener("click", function () {
  lis.classList.toggle("visible");
});