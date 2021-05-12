/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/products_filter.js ***!
  \*****************************************/
filterProduct("all");

function filterProduct(name) {
  var x = document.getElementsByClassName("filterCol");

  if (name == "all") {
    name = "";
  }

  for (var i = 0; i < x.length; i++) {
    removeProduct(x[i], "show");

    if (x[i].className.indexOf(name) > -1) {
      addProduct(x[i], "show");
    }
  }
}

function addProduct(element, name) {
  var arr1 = element.className.split(" ");
  var arr2 = name.split(" ");

  for (var i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

function removeProduct(element, name) {
  var arr1 = element.className.split(" ");
  var arr2 = name.split(" ");

  for (var i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }

  element.className = arr1.join(" ");
}
/******/ })()
;