function abrir_error_login() {
  const btn_modal_error_login =
    document.querySelectorAll(".modal_error_login")[0];
  btn_modal_error_login.style.opacity = "1";
  btn_modal_error_login.style.visibility = "visible";
  btn_modal_error_login.classList.toggle("modal_error_login_close");
}

function cerrar_error_login() {
  const btn_modal_error_login =
    document.querySelectorAll(".modal_error_login")[0];

  btn_modal_error_login.classList.toggle("modal_error_login_close");
  btn_modal_error_login.style.opacity = "0";
  btn_modal_error_login.style.visibility = "hidden";
}

// const btn_cerrar_error_login =
//   document.querySelectorAll(".close_error_login")[0];
// const btn_abrir_error_login = document.querySelectorAll(".cta_error_login")[0];
// const btn_error_login = document.querySelectorAll(".error_login")[0];
// const btn_modal_error_login =
//   document.querySelectorAll(".modal_error_login")[0];

// btn_abrir_error_login.addEventListener("click", () => {
//   btn_modal_error_login.style.opacity = "1";
//   btn_modal_error_login.style.visibility = "visible";
//   btn_modal_error_login.classList.toggle("modal_error_login_close");
// });
// btn_cerrar_error_login.addEventListener("click", () => {
//   btn_modal_error_login.classList.toggle("modal_error_login_close");
//   btn_modal_error_login.style.opacity = "0";
//   btn_modal_error_login.style.visibility = "hidden";
// });
