"use strict"

// window.addEventListener("load", windowLoad);
window.addEventListener("DOMContentLoaded", windowLoad);

function windowLoad() {
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

const heroPays = document.querySelectorAll(".hero__pay");

if (heroPays) {
  heroPays.forEach(function (heroPays) {
    const attributeWidthImage = heroPays.querySelector("img").getAttribute("width");
    heroPays.style.flex = `0 0 ${attributeWidthImage}px`
    console.log(attributeWidthImage)
  })
}
};