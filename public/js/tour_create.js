/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/GalleryImage.js":
/*!*************************************************!*\
  !*** ./resources/js/components/GalleryImage.js ***!
  \*************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ GalleryImage)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var GalleryImage = /*#__PURE__*/function () {
  function GalleryImage() {
    _classCallCheck(this, GalleryImage);
    this.galleryCount = 1;
    this.galleryContainer = document.getElementById("js_gallery_image");
    this.wrapper = document.querySelector(".gallery_image-wrapepr");
    this.addBtn = document.getElementById("add-gallery");
    this.initialize();
  }
  return _createClass(GalleryImage, [{
    key: "initialize",
    value: function initialize() {
      this.addBtn.addEventListener("click", this.handleAddGallery.bind(this));
    }
  }, {
    key: "handleAddGallery",
    value: function handleAddGallery() {
      var newGalleryImage = this.galleryContainer.cloneNode(true);
      var fileInput = newGalleryImage.querySelector(".image-upload-input");
      fileInput.setAttribute('name', "gallery_images[".concat(this.galleryCount, "]"));
      // クローンした要素をDOMに追加（親要素の後ろに追加する例）
      this.wrapper.appendChild(newGalleryImage);
      var count = this.galleryCount;
      this.handleInputFile(fileInput, count);
      // カウンターをインクリメント
      this.galleryCount++;
    }
  }, {
    key: "handleInputFile",
    value: function handleInputFile(inputFile, count) {
      inputFile.addEventListener("change", function (e) {
        console.log("222");
        var objectURL = URL.createObjectURL(e.target.files[0]);
        var previewContainer = document.getElementById("gallery_image");
        var img = document.createElement("img");
        img.id = "previewgalleryImage".concat(count);
        img.classList.add("preview-image");
        img.src = objectURL;
        previewContainer.appendChild(img);
      });
    }
  }]);
}();


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
/*!*******************************************!*\
  !*** ./resources/js/pages/tour_create.js ***!
  \*******************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_GalleryImage_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/GalleryImage.js */ "./resources/js/components/GalleryImage.js");

new _components_GalleryImage_js__WEBPACK_IMPORTED_MODULE_0__["default"]();
})();

/******/ })()
;