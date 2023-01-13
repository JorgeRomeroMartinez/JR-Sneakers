function pedidos() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("btn_pedidos_asincrono").innerHTML =
        this.responseText;
    }
  };
  xhttp.open("GET", "pedidos.php", true);
  xhttp.send();

  const modal_perfil = document.querySelectorAll(".modal_perfil")[0];

  modal_perfil.classList.toggle("modal_close");
  modal_perfil.style.opacity = "0";
  modal_perfil.style.visibility = "hidden";
}

function perfil() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("btn_pedidos_asincrono").innerHTML =
        this.responseText;
    }
  };
  xhttp.open("GET", "perfil.php", true);
  xhttp.send();

  const modal_perfil = document.querySelectorAll(".modal_perfil")[0];

  modal_perfil.classList.toggle("modal_close");
  modal_perfil.style.opacity = "0";
  modal_perfil.style.visibility = "hidden";
}
