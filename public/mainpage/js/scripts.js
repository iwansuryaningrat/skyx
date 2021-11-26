// ========== expander menu ==========
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId);

  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("show");
    });
  }
};

showMenu("mobile-menu", "navbar-mini");
showMenu("navmini-close", "navbar-mini");

// scroll to up button
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 540) {
      $(".scroll__up").css({
        opacity: "1",
        "pointer-events": "auto",
      });
    } else {
      $(".scroll__up").css({
        opacity: "0",
        "pointer-events": "none",
      });
    }
  });

  $(".scroll__up").click(function () {
    $("html").animate({ scrollTop: 0 }, 150);
  });
});
