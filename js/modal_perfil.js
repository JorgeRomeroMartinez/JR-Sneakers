const close_perfil = document.querySelectorAll(".close_perfil")[0];
const btn_open_perfil = document.querySelectorAll(".button_perfil")[0];
const elmodal_perfil = document.querySelectorAll(".elmodal_perfil")[0];
const modal_perfil = document.querySelectorAll(".modal_perfil")[0];

btn_open_perfil.addEventListener("click", () => {
  modal_perfil.style.opacity = "1";
  modal_perfil.style.visibility = "visible";
  modal_perfil.classList.toggle("modal_close");
  console.log("hola");
});
close_perfil.addEventListener("click", () => {
  modal_perfil.classList.toggle("modal_close");
  modal_perfil.style.opacity = "0";
  modal_perfil.style.visibility = "hidden";
});
