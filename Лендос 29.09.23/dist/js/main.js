"use strict"

// window.addEventListener("load", windowLoad);
// window.addEventListener("DOMContentLoaded", windowLoad);

// function windowLoad() {
  const footer = document.querySelector(".footer");

const hero = document.querySelector(".hero");

if (hero && footer) {
  const footerStyles = footer.getBoundingClientRect();

  const footerHeight = footerStyles.height;

  footer.style.marginTop = -(footerHeight + 16) + "px";

  hero.style.paddingBottom = (footerHeight + 16) + "px";

}

// Скрипт для проверки , поддерживает ли браузер webp 

function testWebP(callback) {
  var webP = new Image();

  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };

  webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  } else {
    document.querySelector('body').classList.add('no-webp');
  }
});
// };