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

const heroContainer = document.querySelector(".hero__container");

const header = document.querySelector(".header");

const footer = document.querySelector(".footer");

if (heroContainer && header && footer) {
  const headerStyles = header.getBoundingClientRect();
  const headerHeight = headerStyles.height;

  const footerStyles = footer.getBoundingClientRect();
  const footerHeight = footerStyles.height;

  heroContainer.style.paddingTop = headerHeight + "px";

  heroContainer.style.paddingBottom = (footerHeight + 16) + "px";
}