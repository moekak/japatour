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


/***/ }),

/***/ "./resources/js/components/elementOperation/AdditionalServiceOperator.js":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/elementOperation/AdditionalServiceOperator.js ***!
  \*******************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ AdditionalServiceOperator)
/* harmony export */ });
/* harmony import */ var _ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ElementOperatorInterface.js */ "./resources/js/components/elementOperation/ElementOperatorInterface.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }

var AdditionalServiceOperator = /*#__PURE__*/function (_ElementOperatorInter) {
  function AdditionalServiceOperator() {
    var _this;
    _classCallCheck(this, AdditionalServiceOperator);
    _this = _callSuper(this, AdditionalServiceOperator); // 親クラスのコンストラクタを呼び出す
    _this.container = document.getElementById('services-container');
    _this.addButton = document.getElementById('add-service');
    _this.initialize();
    return _this;
  }

  /**
   * イベントリスナーの初期化
   * @override
   */
  _inherits(AdditionalServiceOperator, _ElementOperatorInter);
  return _createClass(AdditionalServiceOperator, [{
    key: "initialize",
    value: function initialize() {
      // ハイライト項目作成処理
      this.addButton.addEventListener("click", this.addElement.bind(this));
      // ハイライト項目削除処理
      this.container.addEventListener("click", this.removeElement.bind(this));
    }

    /**
     * ハイライト項目を追加する
     * @override
     */
  }, {
    key: "addElement",
    value: function addElement() {
      this.container.appendChild(this.createDOMElement());
    }

    /**
     * ハイライト項目のHTML文字列を生成
     * @override
     * @returns {string} ハイライト項目のHTML
     */
  }, {
    key: "createRawHTML",
    value: function createRawHTML() {
      return "\n                  <input type=\"text\" name=\"services[service][]\" >\n                  <div class=\"price-input\">\n                        <input type=\"number\" id=\"price\" name=\"services[price][]\"  min=\"0\" placeholder=\"price(\uFFE5)\">\n                  </div>\n                  <button type=\"button\" class=\"remove-service btn-icon\"><i class=\"fas fa-times\"></i></button>\n            ";
    }

    /**
     * ハイライト項目のDOM要素を作成
     * @override
     * @returns {HTMLElement} ハイライト項目のdiv要素
     */
  }, {
    key: "createDOMElement",
    value: function createDOMElement() {
      var newItem = document.createElement('div');
      newItem.className = 'service-item';
      newItem.innerHTML = this.createRawHTML();
      return newItem;
    }

    /**
     * ハイライト項目を削除
     * @override
     * @param {Event} e - クリックイベント
     */
  }, {
    key: "removeElement",
    value: function removeElement(e) {
      if (e.target.closest('.remove-service')) {
        var item = e.target.closest('.service-item');
        item.remove();
      }
    }
  }]);
}(_ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/ElementOperatorInterface.js":
/*!******************************************************************************!*\
  !*** ./resources/js/components/elementOperation/ElementOperatorInterface.js ***!
  \******************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ ElementOperatorInterface)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
/**
 * 項目作成のインターフェース
 * @interface
 */
var ElementOperatorInterface = /*#__PURE__*/function () {
  function ElementOperatorInterface() {
    _classCallCheck(this, ElementOperatorInterface);
    if ((this instanceof ElementOperatorInterface ? this.constructor : void 0) === ElementOperatorInterface) {
      throw new Error('インターフェースのインスタンスは作成できません');
    }
  }

  /**
   * 初期化処理
   * @returns {void}
   */
  return _createClass(ElementOperatorInterface, [{
    key: "initialize",
    value: function initialize() {
      throw new Error('Method not implemented');
    }

    /**
    * 新しく作成した項目を親要素の一番最後に挿入する
    * @returns {void} 
    */
  }, {
    key: "addElement",
    value: function addElement() {
      throw new Error('Method not implemented');
    }

    /**
    * 項目のHTML要素を作成する
    * @returns {string} 項目のHTML文字列
    */
  }, {
    key: "createRawHTML",
    value: function createRawHTML(user) {
      throw new Error('Method not implemented');
    }
    /**
    * 項目のDOM要素を作成する
    * @returns {HTMLElement} 項目のdivタグ
    */
  }, {
    key: "createDOMElement",
    value: function createDOMElement(user) {
      throw new Error('Method not implemented');
    }

    /**
    * 新しく作成した項目を親要素の一番最後に挿入する
    * @returns {void} 
    */
  }, {
    key: "removeElement",
    value: function removeElement() {
      throw new Error('Method not implemented');
    }
  }]);
}();


/***/ }),

/***/ "./resources/js/components/elementOperation/HighlightOperator.js":
/*!***********************************************************************!*\
  !*** ./resources/js/components/elementOperation/HighlightOperator.js ***!
  \***********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ HighlightOperator)
/* harmony export */ });
/* harmony import */ var _ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ElementOperatorInterface.js */ "./resources/js/components/elementOperation/ElementOperatorInterface.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }

var HighlightOperator = /*#__PURE__*/function (_ElementOperatorInter) {
  function HighlightOperator() {
    var _this;
    _classCallCheck(this, HighlightOperator);
    _this = _callSuper(this, HighlightOperator); // 親クラスのコンストラクタを呼び出す
    _this.container = document.getElementById('highlights-container');
    _this.addButton = document.getElementById('add-highlight');
    _this.initialize();
    return _this;
  }

  /**
   * イベントリスナーの初期化
   * @override
   */
  _inherits(HighlightOperator, _ElementOperatorInter);
  return _createClass(HighlightOperator, [{
    key: "initialize",
    value: function initialize() {
      // ハイライト項目作成処理
      this.addButton.addEventListener("click", this.addElement.bind(this));
      // ハイライト項目削除処理
      this.container.addEventListener("click", this.removeElement.bind(this));
    }

    /**
     * ハイライト項目を追加する
     * @override
     */
  }, {
    key: "addElement",
    value: function addElement() {
      this.container.appendChild(this.createDOMElement());
    }

    /**
     * ハイライト項目のHTML文字列を生成
     * @override
     * @returns {string} ハイライト項目のHTML
     */
  }, {
    key: "createRawHTML",
    value: function createRawHTML() {
      return "\n                  <input type=\"text\" name=\"highlights[]\" >\n                  <button type=\"button\" class=\"remove-highlight btn-icon\"><i class=\"fas fa-times\"></i></button>\n            ";
    }

    /**
     * ハイライト項目のDOM要素を作成
     * @override
     * @returns {HTMLElement} ハイライト項目のdiv要素
     */
  }, {
    key: "createDOMElement",
    value: function createDOMElement() {
      var newItem = document.createElement('div');
      newItem.className = 'highlight-item';
      newItem.innerHTML = this.createRawHTML();
      return newItem;
    }

    /**
     * ハイライト項目を削除
     * @override
     * @param {Event} e - クリックイベント
     */
  }, {
    key: "removeElement",
    value: function removeElement(e) {
      if (e.target.closest('.remove-highlight')) {
        var item = e.target.closest('.highlight-item');
        if (document.querySelectorAll('.highlight-item').length > 1) {
          item.remove();
        } else {
          alert('At least one highlight is required.');
        }
      }
    }
  }]);
}(_ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/QaOperator.js":
/*!****************************************************************!*\
  !*** ./resources/js/components/elementOperation/QaOperator.js ***!
  \****************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ QaOperator)
/* harmony export */ });
/* harmony import */ var _ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ElementOperatorInterface.js */ "./resources/js/components/elementOperation/ElementOperatorInterface.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }

var QaOperator = /*#__PURE__*/function (_ElementOperatorInter) {
  function QaOperator() {
    var _this;
    _classCallCheck(this, QaOperator);
    _this = _callSuper(this, QaOperator); // 親クラスのコンストラクタを呼び出す
    _this.addButton = document.getElementById('add-qa');
    _this.qaCount = document.querySelectorAll('.qa-item').length;
    _this.qaTemplate = document.getElementById('qa-template').innerHTML;
    _this.qaWrapper = document.getElementById("qa-container");
    _this.initialize();
    return _this;
  }

  /**
   * イベントリスナーの初期化
   * @override
   */
  _inherits(QaOperator, _ElementOperatorInter);
  return _createClass(QaOperator, [{
    key: "initialize",
    value: function initialize() {
      // qa項目作成処理
      this.addButton.addEventListener("click", this.addElement.bind(this));
      // qa項目削除処理
      this.qaWrapper.addEventListener("click", this.removeElement.bind(this));
    }

    /**
     * ハイライト項目を追加する
     * @override
     */
  }, {
    key: "addElement",
    value: function addElement() {
      this.qaCount++;
      this.qaWrapper.appendChild(this.createDOMElement());
    }

    /**
     * ハイライト項目のHTML文字列を生成
     * @override
     * @returns {string} ハイライト項目のHTML
     */
  }, {
    key: "createRawHTML",
    value: function createRawHTML() {
      return;
    }

    /**
     * ハイライト項目のDOM要素を作成
     * @override
     * @returns {HTMLElement} ハイライト項目のdiv要素
     */
  }, {
    key: "createDOMElement",
    value: function createDOMElement() {
      var newDayHtml = this.qaTemplate.replace(/{day_index}/g, this.qaCount);
      var tempDiv = document.createElement('div');
      tempDiv.innerHTML = newDayHtml;
      var newDay = tempDiv.firstElementChild;
      return newDay;
    }

    /**
     * ハイライト項目を削除
     * @override
     * @param {Event} e - クリックイベント
     */
  }, {
    key: "removeElement",
    value: function removeElement(e) {
      if (e.target.closest('.remove-qa')) {
        this.qaCount--;
        var item = e.target.closest('.qa-item');
        if (document.querySelectorAll('.qa-item').length > 1) {
          item.remove();
          // Re-number the days
          document.querySelectorAll('.qa-item').forEach(function (day, index) {
            day.querySelector('h3').textContent = "Question ".concat(index + 1);
          });
        } else {
          alert('At least one qa is required in the itinerary.');
        }
      }
    }
  }]);
}(_ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/ReviewOperator.js":
/*!********************************************************************!*\
  !*** ./resources/js/components/elementOperation/ReviewOperator.js ***!
  \********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ ReviewOperator)
/* harmony export */ });
/* harmony import */ var _ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ElementOperatorInterface.js */ "./resources/js/components/elementOperation/ElementOperatorInterface.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }

var ReviewOperator = /*#__PURE__*/function (_ElementOperatorInter) {
  function ReviewOperator() {
    var _this;
    _classCallCheck(this, ReviewOperator);
    _this = _callSuper(this, ReviewOperator); // 親クラスのコンストラクタを呼び出す
    _this.addButton = document.getElementById('add-review');
    _this.reviewCount = document.querySelectorAll('.review-item').length;
    _this.reviewTemplate = document.getElementById('review-template').innerHTML;
    _this.reviewWrapper = document.getElementById("review-container");
    console.log(_this.reviewCount + "review counr");
    _this.initialize();
    return _this;
  }

  /**
   * イベントリスナーの初期化
   * @override
   */
  _inherits(ReviewOperator, _ElementOperatorInter);
  return _createClass(ReviewOperator, [{
    key: "initialize",
    value: function initialize() {
      // review項目作成処理
      this.addButton.addEventListener("click", this.addElement.bind(this));
      // review項目削除処理
      this.reviewWrapper.addEventListener("click", this.removeElement.bind(this));
    }

    /**
     * ハイライト項目を追加する
     * @override
     */
  }, {
    key: "addElement",
    value: function addElement() {
      this.reviewWrapper.appendChild(this.createDOMElement());
      this.reviewCount++;
    }

    /**
     * ハイライト項目のHTML文字列を生成
     * @override
     * @returns {string} ハイライト項目のHTML
     */
  }, {
    key: "createRawHTML",
    value: function createRawHTML() {
      return;
    }

    /**
     * ハイライト項目のDOM要素を作成
     * @override
     * @returns {HTMLElement} ハイライト項目のdiv要素
     */
  }, {
    key: "createDOMElement",
    value: function createDOMElement() {
      var newDayHtml = this.reviewTemplate.replace(/{day_index}/g, this.reviewCount);
      var tempDiv = document.createElement('div');
      tempDiv.innerHTML = newDayHtml;
      var newDay = tempDiv.firstElementChild;
      return newDay;
    }

    /**
     * ハイライト項目を削除
     * @override
     * @param {Event} e - クリックイベント
     */
  }, {
    key: "removeElement",
    value: function removeElement(e) {
      console.log(e.target);
      if (e.target.closest('.remove-review')) {
        this.reviewCount--;
        var item = e.target.closest('.review-item');
        if (document.querySelectorAll('.review-item').length > 1) {
          item.remove();
          // Re-number the days
          document.querySelectorAll('.review-item').forEach(function (day, index) {
            day.querySelector('h3').textContent = "Review ".concat(index + 1);
          });
        } else {
          alert('At least one review is required in the itinerary.');
        }
      }
    }
  }]);
}(_ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/TourTermsOperator.js":
/*!***********************************************************************!*\
  !*** ./resources/js/components/elementOperation/TourTermsOperator.js ***!
  \***********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ TourTermsOperator)
/* harmony export */ });
/* harmony import */ var _ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ElementOperatorInterface.js */ "./resources/js/components/elementOperation/ElementOperatorInterface.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }

var TourTermsOperator = /*#__PURE__*/function (_ElementOperatorInter) {
  function TourTermsOperator(name) {
    var _this;
    _classCallCheck(this, TourTermsOperator);
    _this = _callSuper(this, TourTermsOperator); // 親クラスのコンストラクタを呼び出す
    _this.name = name;
    _this.container = document.getElementById("".concat(_this.name, "s-container"));
    _this.addButton = document.getElementById("add-".concat(_this.name));
    _this.initialize();
    return _this;
  }

  /**
   * イベントリスナーの初期化
   * @override
   */
  _inherits(TourTermsOperator, _ElementOperatorInter);
  return _createClass(TourTermsOperator, [{
    key: "initialize",
    value: function initialize() {
      // 含まれるもの含まれないものの項目作成処理
      this.addButton.addEventListener("click", this.addElement.bind(this));
      // 含まれるもの含まれないものの項目削除処理
      this.container.addEventListener("click", this.removeElement.bind(this));
    }

    /**
     * 含まれるもの含まれないものの項目を追加する
     * @override
     */
  }, {
    key: "addElement",
    value: function addElement() {
      this.container.appendChild(this.createDOMElement());
    }

    /**
     * 含まれるもの含まれないものの項目のHTML文字列を生成
     * @override
     * @returns {string} 含まれるもの含まれないものの項目のHTML
     */
  }, {
    key: "createRawHTML",
    value: function createRawHTML() {
      return "\n                  <input type=\"text\" name=\"".concat(this.name, "s[]\" >\n                  <button type=\"button\" class=\"remove-").concat(this.name, " btn-icon\"><i class=\"fas fa-times\"></i></button>\n            ");
    }

    /**
     * 含まれるもの含まれないものの項目のDOM要素を作成
     * @override
     * @returns {HTMLElement} 含まれるもの含まれないものの項目のdiv要素
     */
  }, {
    key: "createDOMElement",
    value: function createDOMElement() {
      var newItem = document.createElement('div');
      newItem.className = "".concat(this.name, "-item");
      newItem.innerHTML = this.createRawHTML();
      return newItem;
    }

    /**
     * 含まれるもの含まれないものの項目を削除
     * @override
     * @param {Event} e - クリックイベント
     */
  }, {
    key: "removeElement",
    value: function removeElement(e) {
      if (e.target.closest(".remove-".concat(this.name))) {
        var item = e.target.closest(".".concat(this.name, "-item"));
        if (document.querySelectorAll(".".concat(this.name, "-item")).length > 1) {
          item.remove();
        } else {
          alert("At least one ".concat(this.name, " is required."));
        }
      }
    }
  }]);
}(_ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/itinerary/ItineraryHighlight.js":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/elementOperation/itinerary/ItineraryHighlight.js ***!
  \**********************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ ItineraryHighlight)
/* harmony export */ });
/* harmony import */ var _ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../ElementOperatorInterface.js */ "./resources/js/components/elementOperation/ElementOperatorInterface.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }

var ItineraryHighlight = /*#__PURE__*/function (_ElementOperatorInter) {
  function ItineraryHighlight(event) {
    var _this$itineraryBtnOpe, _this$itineraryBtnOpe2, _this$container, _this$highlightItems;
    var _this;
    _classCallCheck(this, ItineraryHighlight);
    _this = _callSuper(this, ItineraryHighlight); // 親クラスのコンストラクタを呼び出す - これが欠けている
    _this.event = event;
    console.log("222");
    if (_this.event.target.closest(".add-itinerary-highlight")) {
      _this.itineraryBtnOperator = _this.event.target.closest(".add-itinerary-highlight");
    } else if (_this.event.target.closest(".remove-itinerary_highlight")) {
      _this.itineraryBtnOperator = _this.event.target.closest(".remove-itinerary_highlight");
    }
    _this.container = (_this$itineraryBtnOpe = _this.itineraryBtnOperator) === null || _this$itineraryBtnOpe === void 0 ? void 0 : _this$itineraryBtnOpe.closest('.form-group').querySelector('.itinerary-highlights-container');
    _this.dayItem = (_this$itineraryBtnOpe2 = _this.itineraryBtnOperator) === null || _this$itineraryBtnOpe2 === void 0 ? void 0 : _this$itineraryBtnOpe2.closest('.itinerary-day-item');
    _this.dayIndex = Array.from(document.querySelectorAll('.itinerary-day-item')).indexOf(_this.dayItem);
    _this.highlightItems = (_this$container = _this.container) === null || _this$container === void 0 ? void 0 : _this$container.querySelectorAll('.itineary-highlight-item');
    _this.highlightIndex = (_this$highlightItems = _this.highlightItems) === null || _this$highlightItems === void 0 ? void 0 : _this$highlightItems.length;
    _this.initialize();
    return _this;
  }

  /**
   * イベントリスナーの初期化
   * @override
   */
  _inherits(ItineraryHighlight, _ElementOperatorInter);
  return _createClass(ItineraryHighlight, [{
    key: "initialize",
    value: function initialize() {
      // ハイライト項目作成処理
      this.addElement();
      // ハイライト項目削除処理
      this.removeElement();
    }

    /**
     * ハイライト項目を追加する
     * @override
     */
  }, {
    key: "addElement",
    value: function addElement() {
      if (this.event.target.closest(".add-itinerary-highlight")) {
        this.container.appendChild(this.createDOMElement());
      }
    }

    /**
     * ハイライト項目のHTML文字列を生成
     * @override
     * @returns {string} ハイライト項目のHTML
     */
  }, {
    key: "createRawHTML",
    value: function createRawHTML() {
      return "\n                  <input type=\"text\" name=\"itinerary[".concat(this.dayIndex, "][itinerary_highlight][").concat(this.highlightIndex, "]\" value=\"\" >\n                  <button type=\"button\" class=\"remove-itinerary_highlight btn-icon\"><i class=\"fas fa-times\"></i></button>\n            ");
    }

    /**
     * ハイライト項目のDOM要素を作成
     * @override
     * @returns {HTMLElement} ハイライト項目のdiv要素
     */
  }, {
    key: "createDOMElement",
    value: function createDOMElement() {
      var newItem = document.createElement('div');
      newItem.className = 'itineary-highlight-item';
      newItem.innerHTML = this.createRawHTML();
      return newItem;
    }

    /**
     * ハイライト項目を削除
     * @override
     */
  }, {
    key: "removeElement",
    value: function removeElement() {
      if (this.event.target.closest(".remove-itinerary_highlight")) {
        var item = this.event.target.closest('.itineary-highlight-item');
        if (this.highlightItems.length > 1) {
          item.parentNode.removeChild(item);
        } else {
          alert('At least one itinerary highlight is required.');
        }
      }
    }
  }]);
}(_ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/itinerary/ItineraryImage.js":
/*!******************************************************************************!*\
  !*** ./resources/js/components/elementOperation/itinerary/ItineraryImage.js ***!
  \******************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ ItineraryImage)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _classPrivateMethodInitSpec(e, a) { _checkPrivateRedeclaration(e, a), a.add(e); }
function _checkPrivateRedeclaration(e, t) { if (t.has(e)) throw new TypeError("Cannot initialize the same private elements twice on an object"); }
function _assertClassBrand(e, t, n) { if ("function" == typeof e ? e === t : e.has(t)) return arguments.length < 3 ? t : n; throw new TypeError("Private element is not present on this object"); }
var _ItineraryImage_brand = /*#__PURE__*/new WeakSet();
var ItineraryImage = /*#__PURE__*/_createClass(function ItineraryImage(event) {
  _classCallCheck(this, ItineraryImage);
  _classPrivateMethodInitSpec(this, _ItineraryImage_brand);
  this.event = event;
  // imageInputの設定
  if (this.event.target.closest(".image-upload-input") !== null) {
    this.imageInput = this.event.target.closest(".image-upload-input");
    this.previewContainer = this.imageInput.closest(".form-group").querySelector(".preview-image");
    this.imageInput.addEventListener("change", _assertClassBrand(_ItineraryImage_brand, this, _handleImage).bind(this));
  }

  // プロパティを初期化
  this.file = null;
  this.objectURL = null;
});
function _handleImage() {
  this.file = this.event.target.files[0];
  this.objectURL = URL.createObjectURL(this.file);
  // プレビューに表示する
  this.previewContainer.src = this.objectURL;
}


/***/ }),

/***/ "./resources/js/components/elementOperation/itinerary/ItineraryOperator.js":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/elementOperation/itinerary/ItineraryOperator.js ***!
  \*********************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ ItineraryOperator)
/* harmony export */ });
/* harmony import */ var _ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../ElementOperatorInterface.js */ "./resources/js/components/elementOperation/ElementOperatorInterface.js");
/* harmony import */ var _ItineraryHighlight_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ItineraryHighlight.js */ "./resources/js/components/elementOperation/itinerary/ItineraryHighlight.js");
/* harmony import */ var _ItineraryImage_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./ItineraryImage.js */ "./resources/js/components/elementOperation/itinerary/ItineraryImage.js");
/* harmony import */ var _ItinerarySchedule_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./ItinerarySchedule.js */ "./resources/js/components/elementOperation/itinerary/ItinerarySchedule.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }




var ItineraryOperator = /*#__PURE__*/function (_ElementOperatorInter) {
  function ItineraryOperator() {
    var _this;
    _classCallCheck(this, ItineraryOperator);
    _this = _callSuper(this, ItineraryOperator); // 親クラスのコンストラクタを呼び出す
    _this.addButton = document.getElementById('add-day');
    _this.dayCount = document.querySelectorAll('.itinerary-day-item').length;
    _this.dayTemplate = document.getElementById('day-template').innerHTML;
    _this.itineraryWrapper = document.getElementById("itinerary-days-container");
    _this.scheduleTemplate = document.getElementById('schedule-template').innerHTML;
    _this.initialize();
    return _this;
  }

  /**
   * イベントリスナーの初期化
   * @override
   */
  _inherits(ItineraryOperator, _ElementOperatorInter);
  return _createClass(ItineraryOperator, [{
    key: "initialize",
    value: function initialize() {
      // itinerary項目作成処理
      this.addButton.addEventListener("click", this.addElement.bind(this));
      // itinerary項目作成処理項目削除処理

      // const newItineraryWrapper = this.itineraryWrapper.cloneNode(true)
      // this.itineraryWrapper.replaceWith(newItineraryWrapper)
      this.itineraryWrapper.addEventListener("click", this.removeElement.bind(this));
      this.itineraryWrapper.addEventListener("click", function (e) {
        new _ItineraryHighlight_js__WEBPACK_IMPORTED_MODULE_1__["default"](e);
        new _ItinerarySchedule_js__WEBPACK_IMPORTED_MODULE_3__["default"](e);
        new _ItineraryImage_js__WEBPACK_IMPORTED_MODULE_2__["default"](e);
      });
    }

    /**
     * ハイライト項目を追加する
     * @override
     */
  }, {
    key: "addElement",
    value: function addElement() {
      this.dayCount++;
      this.itineraryWrapper.appendChild(this.createDOMElement());
    }

    /**
     * ハイライト項目のHTML文字列を生成
     * @override
     * @returns {string} ハイライト項目のHTML
     */
  }, {
    key: "createRawHTML",
    value: function createRawHTML() {
      return;
    }

    /**
     * ハイライト項目のDOM要素を作成
     * @override
     * @returns {HTMLElement} ハイライト項目のdiv要素
     */
  }, {
    key: "createDOMElement",
    value: function createDOMElement() {
      var dayIndex = this.dayCount - 1;
      console.log("dayCount: ".concat(this.dayCount));
      var newDayHtml = this.dayTemplate.replace(/{day_number}/g, this.dayCount).replace(/{day_index}/g, dayIndex);
      var tempDiv = document.createElement('div');
      tempDiv.innerHTML = newDayHtml;
      var newDay = tempDiv.firstElementChild;
      return newDay;
    }

    /**
     * ハイライト項目を削除
     * @override
     * @param {Event} e - クリックイベント
     */
  }, {
    key: "removeElement",
    value: function removeElement(e) {
      console.log(e.target);
      if (e.target.closest('.remove-day')) {
        this.dayCount--;
        var item = e.target.closest('.itinerary-day-item');
        if (document.querySelectorAll('.itinerary-day-item').length > 1) {
          item.remove();
          // Re-number the days
          document.querySelectorAll('.itinerary-day-item').forEach(function (day, index) {
            day.querySelector('h3').textContent = "Day ".concat(index + 1);
          });
        } else {
          alert('At least one day is required in the itinerary.');
        }
      }
    }
  }]);
}(_ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/itinerary/ItinerarySchedule.js":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/elementOperation/itinerary/ItinerarySchedule.js ***!
  \*********************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ ItinerarySchedule)
/* harmony export */ });
/* harmony import */ var _ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../ElementOperatorInterface.js */ "./resources/js/components/elementOperation/ElementOperatorInterface.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }

var ItinerarySchedule = /*#__PURE__*/function (_ElementOperatorInter) {
  function ItinerarySchedule(event) {
    var _this$btn, _this$container, _this$scheduleItems;
    var _this;
    _classCallCheck(this, ItinerarySchedule);
    _this = _callSuper(this, ItinerarySchedule); // 親クラスのコンストラクタを呼び出す - これが欠けている
    _this.event = event;
    if (_this.event.target.closest('.add-schedule')) {
      _this.btn = _this.event.target.closest('.add-schedule');
    } else if (_this.event.target.closest('.remove-schedule')) {
      _this.btn = _this.event.target.closest('.remove-schedule');
    }
    _this.dayIndex = (_this$btn = _this.btn) === null || _this$btn === void 0 ? void 0 : _this$btn.getAttribute('data-day');
    _this.container = document.querySelector(".schedule-items-container[data-day=\"".concat(_this.dayIndex, "\"]"));
    _this.scheduleItems = (_this$container = _this.container) === null || _this$container === void 0 ? void 0 : _this$container.querySelectorAll('.schedule-item');
    _this.scheduleIndex = (_this$scheduleItems = _this.scheduleItems) === null || _this$scheduleItems === void 0 ? void 0 : _this$scheduleItems.length;
    var templateElement = document.getElementById('schedule-template');
    _this.scheduleTemplate = templateElement.innerHTML;
    _this.initialize();
    return _this;
  }

  /**
   * イベントリスナーの初期化
   * @override
   */
  _inherits(ItinerarySchedule, _ElementOperatorInter);
  return _createClass(ItinerarySchedule, [{
    key: "initialize",
    value: function initialize() {
      // ハイライト項目作成処理
      this.addElement();
      // ハイライト項目削除処理
      this.removeElement();
    }

    /**
     * ハイライト項目を追加する
     * @override
     */
  }, {
    key: "addElement",
    value: function addElement() {
      if (this.event.target.closest('.add-schedule')) {
        this.container.appendChild(this.createDOMElement());
      }
    }

    /**
     * ハイライト項目のHTML文字列を生成
     * @override
     * @returns {string} ハイライト項目のHTML
     */
  }, {
    key: "createRawHTML",
    value: function createRawHTML() {
      return;
    }

    /**
     * ハイライト項目のDOM要素を作成
     * @override
     * @returns {HTMLElement} ハイライト項目のdiv要素
     */
  }, {
    key: "createDOMElement",
    value: function createDOMElement() {
      var newScheduleHtml = this.scheduleTemplate.replace(/{day_index}/g, this.dayIndex).replace(/{schedule_index}/g, this.scheduleIndex);
      var tempDiv = document.createElement('div');
      tempDiv.innerHTML = newScheduleHtml;
      var newSchedule = tempDiv.firstElementChild;
      return newSchedule;
    }

    /**
     * ハイライト項目を削除
     * @override
     */
  }, {
    key: "removeElement",
    value: function removeElement() {
      if (this.event.target.closest('.remove-schedule')) {
        var item = this.event.target.closest('.schedule-item');
        var container = item.closest('.schedule-items-container');
        if (container.querySelectorAll('.schedule-item').length > 1) {
          item.remove();
        } else {
          alert('At least one schedule item is required per day.');
        }
      }
    }
  }]);
}(_ElementOperatorInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


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
/* harmony import */ var _components_elementOperation_AdditionalServiceOperator_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/elementOperation/AdditionalServiceOperator.js */ "./resources/js/components/elementOperation/AdditionalServiceOperator.js");
/* harmony import */ var _components_elementOperation_HighlightOperator_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/elementOperation/HighlightOperator.js */ "./resources/js/components/elementOperation/HighlightOperator.js");
/* harmony import */ var _components_elementOperation_itinerary_ItineraryOperator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../components/elementOperation/itinerary/ItineraryOperator.js */ "./resources/js/components/elementOperation/itinerary/ItineraryOperator.js");
/* harmony import */ var _components_elementOperation_QaOperator_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../components/elementOperation/QaOperator.js */ "./resources/js/components/elementOperation/QaOperator.js");
/* harmony import */ var _components_elementOperation_ReviewOperator_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../components/elementOperation/ReviewOperator.js */ "./resources/js/components/elementOperation/ReviewOperator.js");
/* harmony import */ var _components_elementOperation_TourTermsOperator_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../components/elementOperation/TourTermsOperator.js */ "./resources/js/components/elementOperation/TourTermsOperator.js");
/* harmony import */ var _components_GalleryImage_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../components/GalleryImage.js */ "./resources/js/components/GalleryImage.js");







new _components_GalleryImage_js__WEBPACK_IMPORTED_MODULE_6__["default"](document.querySelector(".create-tour-btn"));
new _components_elementOperation_HighlightOperator_js__WEBPACK_IMPORTED_MODULE_1__["default"]();
new _components_elementOperation_TourTermsOperator_js__WEBPACK_IMPORTED_MODULE_5__["default"]("inclusion");
new _components_elementOperation_TourTermsOperator_js__WEBPACK_IMPORTED_MODULE_5__["default"]("exclusion");
new _components_elementOperation_itinerary_ItineraryOperator_js__WEBPACK_IMPORTED_MODULE_2__["default"]();
new _components_elementOperation_ReviewOperator_js__WEBPACK_IMPORTED_MODULE_4__["default"]();
new _components_elementOperation_QaOperator_js__WEBPACK_IMPORTED_MODULE_3__["default"]();
new _components_elementOperation_AdditionalServiceOperator_js__WEBPACK_IMPORTED_MODULE_0__["default"]();
})();

/******/ })()
;