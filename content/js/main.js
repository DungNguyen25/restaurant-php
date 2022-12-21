// question
const items = document.querySelectorAll(".items");
function toggleAccordion() {
  this.classList.toggle("active");
  this.nextElementSibling.classList.toggle("active");
}
items.forEach((item) => item.addEventListener("click", toggleAccordion));
// san pham

// mode
function myFunction() {
  var element = document.body;
  element.classList.toggle("light");
}
const body = document.querySelector("body");
const toggle = document.querySelector("#toggle");
const sunIcon = document.querySelector(".toggle .bx-sun");
const moonIcon = document.querySelector(".toggle .bxs-moon");
const menu = document.querySelector(".fa-solid .fa-bars");
toggle.addEventListener("change", () => {
  sunIcon.className =
    sunIcon.className == "bx bx-sun" ? "bx bxs-sun" : "bx bx-sun";
  moonIcon.className =
    moonIcon.className == "bx bxs-moon" ? "bx bx-moon" : "bx bxs-moon";
});
// nav
function nav() {
  var x = document.getElementById("myTopnav");
  if (x.className === "header-nav") {
    x.className += "--responsive";
  } else {
    x.className = "header-nav";
  }
}
