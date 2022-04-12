
/* MENU RESPONSIVE */

addEventListener("DOMContentLoaded", () => {
  const btn_menu = document.querySelector(".btn_menu");
  if (btn_menu) {
    btn_menu.addEventListener("click", () => {
      const menu_items = document.querySelector(".menu_items");
      menu_items.classList.toggle("show");
    });
  }
});


/* SOMBRA NAV */
$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() <= $(document).height()) {
      //Al llegar al pie de la pagina se ejecuta
      $(".menu").css({ "box-shadow": "0px 2px 10px" });
    } 
  });
  
  $(window).scroll(function () {
    if ($(this).scrollTop() == 0) {
      //Ejecutar función
      $(".menu").css({ "box-shadow": "0px 0px 0px" });
    }
  });
  
