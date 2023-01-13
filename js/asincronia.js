function inicioSesionUsuario() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("asincrono").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "asincrono2.php", true);
  xhttp.send();
}
