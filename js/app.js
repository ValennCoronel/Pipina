
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


/* SCROLL CON VP */

// función para obtener el ancho de la barra de scroll
const getScrollBarWidth = () =>
  window.innerWidth - document.documentElement.getBoundingClientRect().width;

// funcion para asignar ese valor a una variable css
const cssScrollBarWidth = () =>
  document.documentElement.style.setProperty(
    "--scrollbar",
    `${getScrollBarWidth()}px`
  );

// asignar la variable css al cargar la página
addEventListener("load", cssScrollBarWidth);

// reasignar la variable css al redimensionar la ventana
addEventListener("resize", cssScrollBarWidth);


/* SOMBRA NAV */
$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() <= $(document).height()) {
      //Al llegar al pie de la pagina se ejecuta
      $(".menu").css({ "box-shadow": "0px 2px 10px" });
    } else {
      $(".menu").css({ "box-shadow": "0px 0px 0px" });
    }
  });
  
  $(window).scroll(function () {
    if ($(this).scrollTop() == 0) {
      //Ejecutar función
      $(".menu").css({ "box-shadow": "0px 0px 0px" });
    }
  });
  
