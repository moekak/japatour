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
/* harmony import */ var _GalleryImageElement_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./GalleryImageElement.js */ "./resources/js/components/GalleryImageElement.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _classPrivateMethodInitSpec(e, a) { _checkPrivateRedeclaration(e, a), a.add(e); }
function _checkPrivateRedeclaration(e, t) { if (t.has(e)) throw new TypeError("Cannot initialize the same private elements twice on an object"); }
function _assertClassBrand(e, t, n) { if ("function" == typeof e ? e === t : e.has(t)) return arguments.length < 3 ? t : n; throw new TypeError("Private element is not present on this object"); }

var _GalleryImage_brand = /*#__PURE__*/new WeakSet();
var GalleryImage = /*#__PURE__*/function () {
  function GalleryImage(submitBtn) {
    _classCallCheck(this, GalleryImage);
    _classPrivateMethodInitSpec(this, _GalleryImage_brand);
    this.galleryCount = 1;
    this.galleryContainer = document.getElementById("js_gallery_image");
    this.wrapper = document.querySelector(".gallery_image-wrapepr");
    this.addBtn = document.getElementById("add-gallery");
    this.submitBtn = submitBtn;
    this.form = document.querySelector(".tour-form");
    this.initialize();
    _assertClassBrand(_GalleryImage_brand, this, _handleRemoveImage).call(this);
  }
  return _createClass(GalleryImage, [{
    key: "initialize",
    value: function initialize() {
      this.addBtn.addEventListener("click", this.handleAddGallery.bind(this));
      this.submitBtn.addEventListener("click", this.handleSubmit.bind(this));
      this.handleInputFile(document.getElementById("gallery_images_0"), 0);
    }
  }, {
    key: "handleSubmit",
    value: function handleSubmit(e) {
      e.preventDefault();
      var files = document.querySelectorAll(".js_galllery_images");
      files.forEach(function (file, index) {
        if (file.value == "") {
          return;
        }
        file.setAttribute("name", "gallery_images[".concat(index, "]"));
      });
      this.form.submit();
    }
  }, {
    key: "handleAddGallery",
    value: function handleAddGallery() {
      var newGalleryImage = this.galleryContainer.cloneNode(true);
      newGalleryImage.dataset.id = this.galleryCount;
      var fileInput = newGalleryImage.querySelector(".image-upload-input");
      fileInput.value = "";
      var fileLabel = newGalleryImage.querySelector(".image-upload-label");
      fileInput.setAttribute('name', "gallery_images[".concat(this.galleryCount, "]"));
      fileInput.id = "gallery_images_".concat(this.galleryCount);
      // クローンした要素をDOMに追加（親要素の後ろに追加する例）
      fileLabel.setAttribute("for", "gallery_images_".concat(this.galleryCount));
      this.wrapper.appendChild(newGalleryImage);
      var count = this.galleryCount;
      this.handleInputFile(fileInput, count);
      // カウンターをインクリメント
      this.galleryCount++;
    }
  }, {
    key: "handleInputFile",
    value: function handleInputFile(inputFile, count) {
      var _this = this;
      inputFile.addEventListener("change", function (e) {
        var objectURL = URL.createObjectURL(e.target.files[0]);
        var previewContainer = document.getElementById("gallery_image");
        previewContainer.appendChild(_GalleryImageElement_js__WEBPACK_IMPORTED_MODULE_0__["default"].generatePreviewElement(objectURL, count));
        _assertClassBrand(_GalleryImage_brand, _this, _handleRemoveImage).call(_this);
      });
    }
  }]);
}();
function _handleRemoveImage() {
  var _this2 = this;
  var removeBtns = document.querySelectorAll(".preview_remove-style");
  removeBtns.forEach(function (btn) {
    var newBtn = btn.cloneNode(true);
    btn.replaceWith(newBtn);
    newBtn.addEventListener("click", function (e) {
      var id = btn.dataset.id;
      var targetInput = Array.from(document.querySelectorAll(".image-upload-container")).find(function (container) {
        return container.dataset.id == id;
      });
      _this2.wrapper.removeChild(targetInput);
      document.getElementById("gallery_image").removeChild(newBtn.parentElement);
    });
  });
}


/***/ }),

/***/ "./resources/js/components/GalleryImageElement.js":
/*!********************************************************!*\
  !*** ./resources/js/components/GalleryImageElement.js ***!
  \********************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ GalleryImageElement)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var GalleryImageElement = /*#__PURE__*/function () {
  function GalleryImageElement() {
    _classCallCheck(this, GalleryImageElement);
  }
  return _createClass(GalleryImageElement, null, [{
    key: "generatePreviewElement",
    value: function generatePreviewElement(objectURL, count) {
      var findElement = Array.from(document.querySelectorAll(".preview-box")).find(function (box) {
        return box.dataset.id == count;
      });
      if (findElement) {
        findElement.querySelector(".preview-image").src = objectURL;
        return;
      }
      var div = document.createElement("div");
      div.classList.add("preview-box");
      div.style.position = "relative";
      div.dataset.id = count;
      var img = document.createElement("img");
      img.id = "previewgalleryImage".concat(count);
      img.classList.add("preview-image");
      img.src = objectURL;
      var p = document.createElement("p");
      p.innerHTML = "×";
      p.classList.add("preview_remove".concat(count));
      p.classList.add("preview_remove-style");
      p.dataset.id = count;
      div.appendChild(p);
      div.appendChild(img);
      return div;
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
/*!*****************************************!*\
  !*** ./resources/js/pages/tour_edit.js ***!
  \*****************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_GalleryImage_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/GalleryImage.js */ "./resources/js/components/GalleryImage.js");

new _components_GalleryImage_js__WEBPACK_IMPORTED_MODULE_0__["default"](document.querySelector(".edit-tour-btn"));
})();

/******/ })()
;