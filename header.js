document.addEventListener("DOMContentLoaded", function() {
  var toggle = document.querySelector(".navbar-toggle");
  var menu = document.querySelector("#navbar-collapse");

  if (toggle && menu) {
    toggle.addEventListener("click", function() {
      menu.classList.toggle("open");
    });
  }
});