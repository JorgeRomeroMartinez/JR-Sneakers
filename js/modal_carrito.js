const close_carrito = document.querySelectorAll(".close_carrito")[0];
const btn_open_carrito = document.querySelectorAll(".button_carrito")[0];
const modal_carrito = document.querySelectorAll(".modal_carrito")[0];

btn_open_carrito.addEventListener("click", () => {
  modal_carrito.style.opacity = "1";
  modal_carrito.style.visibility = "visible";
});
close_carrito.addEventListener("click", () => {
  modal_carrito.style.opacity = "0";
  modal_carrito.style.visibility = "hidden";
});
