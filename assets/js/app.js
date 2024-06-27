
const logoIcon = document.querySelector("#logo-icon");
const headerId = document.querySelector("#header-id");
const SectionId = document.querySelector("#section-id");
const preLoader = document.querySelector("#pre-loader");
const mainMenu = document.querySelector("#menu-main-menu");



window.addEventListener("load", () => {

  preLoader.classList.add('display-none');
  headerId.classList.remove('display-none');
  SectionId.classList.remove('display-none');
  
  

  logoIcon.addEventListener('click', e => {
    let a = logoIcon.querySelector('a');
    a.classList.toggle("active");
    $(".main-menu").slideToggle(1500);
  });

  




});



const toTop = document.querySelector(".to-top");
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 300) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
});