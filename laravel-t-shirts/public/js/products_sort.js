/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/products_sort.js ***!
  \***************************************/
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var array = _toConsumableArray(document.getElementsByClassName('protuct-sort'));

function sortA() {
  var sortAscend = array.slice().sort(function (a, b) {
    if (a.dataset.name < b.dataset.name) {
      return -1;
    }

    if (b.dataset.name < a.dataset.name) {
      return 1;
    }

    return 0;
  });
  sortAscend.forEach(function (elem, index) {
    return elem.style.order = index;
  });
}

function sortZ() {
  var sortDescend = array.slice().sort(function (a, b) {
    if (a.dataset.name > b.dataset.name) {
      return -1;
    }

    if (b.dataset.name > a.dataset.name) {
      return 1;
    }

    return 0;
  });
  sortDescend.forEach(function (elem, index) {
    return elem.style.order = index;
  });
}

function sortLow() {
  var sortAscend = array.slice().sort(function (a, b) {
    return a.dataset.price - b.dataset.price;
  });
  sortAscend.forEach(function (elem, index) {
    return elem.style.order = index;
  });
}

function sortHigh() {
  var sortDescend = array.slice().sort(function (a, b) {
    return b.dataset.price - a.dataset.price;
  });
  sortDescend.forEach(function (elem, index) {
    return elem.style.order = index;
  });
}

function sortTime() {
  var sortDescend = array.slice().sort(function (a, b) {
    return b.dataset.time - a.dataset.time;
  });
  sortDescend.forEach(function (elem, index) {
    return elem.style.order = index;
  });
}

function sortPopular() {
  var sortDescend = array.slice().sort(function (a, b) {
    return b.dataset.popular - a.dataset.popular;
  });
  sortDescend.forEach(function (elem, index) {
    return elem.style.order = index;
  });
}

function sortDefault() {
  var sortDescend = array;
  sortDescend.forEach(function (elem, index) {
    return elem.style.order = index;
  });
}
/******/ })()
;