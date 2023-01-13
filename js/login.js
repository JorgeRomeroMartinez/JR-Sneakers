const open1 = document.getElementById("open1");
const modal_container1 = document.getElementById("modal_container1");
const close1 = document.getElementById("close1");

const open2 = document.getElementById("open2");
const modal_container2 = document.getElementById("modal_container2");
const close2 = document.getElementById("close2");

const registrarsev2 = document.getElementById("registrarsev2");
const iniciarsesionv2 = document.getElementById("iniciarsesionv2");

const close11 = document.getElementById("close11");
const close21 = document.getElementById("close21");

open1.addEventListener("click", () => {
  modal_container1.classList.add("show1");
});
close1.addEventListener("click", () => {
  modal_container1.classList.remove("show1");
});
close11.addEventListener("click", () => {
  modal_container1.classList.remove("show1");
});

open2.addEventListener("click", () => {
  modal_container2.classList.add("show2");
});
close2.addEventListener("click", () => {
  modal_container2.classList.remove("show2");
});
close21.addEventListener("click", () => {
  modal_container2.classList.remove("show2");
});

registrarsev2.addEventListener("click", () => {
  modal_container2.classList.remove("show2");
  modal_container1.classList.add("show1");
});
iniciarsesionv2.addEventListener("click", () => {
  modal_container1.classList.remove("show1");
  modal_container2.classList.add("show2");
});

const open3 = document.getElementById("open3");
const modal_container3 = document.getElementById("modal_container3");
const close3 = document.getElementById("close3");

const close31 = document.getElementById("close31");

open3.addEventListener("click", () => {
  modal_container3.classList.add("show3");
});
close3.addEventListener("click", () => {
  modal_container3.classList.remove("show3");
});
close31.addEventListener("click", () => {
  modal_container3.classList.remove("show3");
});
