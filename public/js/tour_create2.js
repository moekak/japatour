/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/elementOperation2/DupeHighlight.js":
/*!********************************************************************!*\
  !*** ./resources/js/components/elementOperation2/DupeHighlight.js ***!
  \********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeHighlight)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _classPrivateMethodInitSpec(e, a) { _checkPrivateRedeclaration(e, a), a.add(e); }
function _checkPrivateRedeclaration(e, t) { if (t.has(e)) throw new TypeError("Cannot initialize the same private elements twice on an object"); }
function _assertClassBrand(e, t, n) { if ("function" == typeof e ? e === t : e.has(t)) return arguments.length < 3 ? t : n; throw new TypeError("Private element is not present on this object"); }
var _DupeHighlight_brand = /*#__PURE__*/new WeakSet();
var DupeHighlight = /*#__PURE__*/function () {
  function DupeHighlight() {
    _classCallCheck(this, DupeHighlight);
    _classPrivateMethodInitSpec(this, _DupeHighlight_brand);
    this.template = document.getElementById("highlight_template").innerHTML;
    this.duplicateButton = document.getElementById("duplicate_button");
    this.tourHighlightWrapper = document.getElementById("tour_highlight-wrapper");
    this.tourHightlightSection = document.getElementById("highlight-section");
    this.initialize();
  }
  return _createClass(DupeHighlight, [{
    key: "initialize",
    value: function initialize() {
      this.tourHightlightSection.addEventListener("click", _assertClassBrand(_DupeHighlight_brand, this, _handleEvent).bind(this));
    }
  }]);
}();
function _handleEvent(e) {
  var clickedElement = e.target;
  if (clickedElement.closest(".duplicate_button")) _assertClassBrand(_DupeHighlight_brand, this, _duplicateElement).call(this);
  if (clickedElement.closest(".delete_highlight-button")) _assertClassBrand(_DupeHighlight_brand, this, _deleteElement).call(this, clickedElement.closest(".delete_highlight-button"));
}
// Tour Hightlightの要素の追加
function _duplicateElement() {
  _assertClassBrand(_DupeHighlight_brand, this, _createDOM).call(this);
}
function _createDOM() {
  var newDiv = document.createElement("div");
  newDiv.classList.add("highlight-item");
  newDiv.innerHTML = this.template;
  this.tourHighlightWrapper.appendChild(newDiv);
}
// Tour highlightの要素の削除
function _deleteElement(button) {
  var targetElement = button.closest(".highlight-item");
  this.tourHighlightWrapper.removeChild(targetElement);
}


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!********************************************!*\
  !*** ./resources/js/pages/tour_create2.js ***!
  \********************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_elementOperation2_DupeHighlight_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/elementOperation2/DupeHighlight.js */ "./resources/js/components/elementOperation2/DupeHighlight.js");

new _components_elementOperation2_DupeHighlight_js__WEBPACK_IMPORTED_MODULE_0__["default"]();
})();

/******/ })()
;