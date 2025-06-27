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


/***/ }),

/***/ "./resources/js/components/elementOperation2/itinerary/DupeItinerary.js":
/*!******************************************************************************!*\
  !*** ./resources/js/components/elementOperation2/itinerary/DupeItinerary.js ***!
  \******************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeItinerary)
/* harmony export */ });
/* harmony import */ var _ItineraryInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ItineraryInterface.js */ "./resources/js/components/elementOperation2/itinerary/ItineraryInterface.js");
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

var DupeItinerary = /*#__PURE__*/function (_ItineraryInterface) {
  function DupeItinerary() {
    var _this;
    _classCallCheck(this, DupeItinerary);
    _this = _callSuper(this, DupeItinerary);
    _this.template = document.getElementById("itinerary-template").innerHTML;
    _this.wrapper = document.getElementById("itinerary-wrapper");
    return _this;
  }

  /**
   * @override
   */
  _inherits(DupeItinerary, _ItineraryInterface);
  return _createClass(DupeItinerary, [{
    key: "duplicateElement",
    value: function duplicateElement() {
      this.activityIndex++;
      this.itineraryIndex++;
      this.createDOM();
    }

    /**
     * @override
     */
  }, {
    key: "createDOM",
    value: function createDOM() {
      var rawHTML = this.template.replace(/{itinerary_index}/g, this.itineraryIndex).replace(/{activity_index}/g, 0).replace(/{itinerary_count}/g, this.itineraryIndex + 1);
      var newDiv = document.createElement("div");
      newDiv.classList.add("itinerary-item");
      newDiv.dataset.id = this.itineraryIndex;
      newDiv.innerHTML = rawHTML;
      this.wrapper.appendChild(newDiv);
    }

    /**
     * @override
     */
  }, {
    key: "deleteElement",
    value: function deleteElement(button) {
      var targetElement = button.closest(".itinerary-item");
      this.wrapper.removeChild(targetElement);
    }
  }]);
}(_ItineraryInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation2/itinerary/DupeItineraryActivity.js":
/*!**************************************************************************************!*\
  !*** ./resources/js/components/elementOperation2/itinerary/DupeItineraryActivity.js ***!
  \**************************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeItineraryActivity)
/* harmony export */ });
/* harmony import */ var _ItineraryInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ItineraryInterface.js */ "./resources/js/components/elementOperation2/itinerary/ItineraryInterface.js");
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

var DupeItineraryActivity = /*#__PURE__*/function (_ItineraryInterface) {
  function DupeItineraryActivity() {
    var _this;
    _classCallCheck(this, DupeItineraryActivity);
    _this = _callSuper(this, DupeItineraryActivity);
    _this.template = document.getElementById("activity_template").innerHTML;
    _this.wrapper = document.getElementById("activity-wrapper");
    return _this;
  }

  /**
   * @override
   */
  _inherits(DupeItineraryActivity, _ItineraryInterface);
  return _createClass(DupeItineraryActivity, [{
    key: "duplicateElement",
    value: function duplicateElement(wrapper) {
      this.activityIndex++;
      this.createDOM(wrapper);
    }

    /**
     * @override
     */
  }, {
    key: "createDOM",
    value: function createDOM(wrapper) {
      var activityWrapper = wrapper.querySelector(".activity-wrapper");
      var activityCount = activityWrapper.querySelectorAll(".activity-item").length;
      var rawHTML = this.template.replace(/{itinerary_index}/g, wrapper.dataset.id).replace(/{activity_index}/g, activityCount);
      var newDiv = document.createElement("div");
      newDiv.classList.add("activity-item");
      newDiv.innerHTML = rawHTML;
      activityWrapper.appendChild(newDiv);
    }

    /**
     * @override
     */
  }, {
    key: "deleteElement",
    value: function deleteElement(button, wrapper) {
      var targetElement = button.closest(".activity-item");
      wrapper.querySelector(".activity-wrapper").removeChild(targetElement);
    }
  }]);
}(_ItineraryInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation2/itinerary/DupeItineraryHighlight.js":
/*!***************************************************************************************!*\
  !*** ./resources/js/components/elementOperation2/itinerary/DupeItineraryHighlight.js ***!
  \***************************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeItineraryHighlight)
/* harmony export */ });
/* harmony import */ var _ItineraryInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ItineraryInterface.js */ "./resources/js/components/elementOperation2/itinerary/ItineraryInterface.js");
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

var DupeItineraryHighlight = /*#__PURE__*/function (_ItineraryInterface) {
  function DupeItineraryHighlight() {
    var _this;
    _classCallCheck(this, DupeItineraryHighlight);
    _this = _callSuper(this, DupeItineraryHighlight);
    _this.template = document.getElementById("itinerary-highlight_template").innerHTML;
    _this.wrapper = document.getElementById("itinerary_highlight-wrapper");
    return _this;
  }

  /**
   * @override
   */
  _inherits(DupeItineraryHighlight, _ItineraryInterface);
  return _createClass(DupeItineraryHighlight, [{
    key: "duplicateElement",
    value: function duplicateElement() {
      this.activityIndex++;
      this.createDOM();
    }

    /**
     * @override
     */
  }, {
    key: "createDOM",
    value: function createDOM() {
      var rawHTML = this.template.replace(/{itinerary_index}/g, this.itineraryIndex).replace(/{activity_index}/g, this.activityIndex);
      ;
      var newDiv = document.createElement("div");
      newDiv.classList.add("itinerary_highlight-item");
      newDiv.innerHTML = rawHTML;
      this.wrapper.appendChild(newDiv);
    }

    /**
     * @override
     */
  }, {
    key: "deleteElement",
    value: function deleteElement(button) {
      var targetElement = button.closest(".itinerary_highlight-item");
      this.wrapper.removeChild(targetElement);
    }
  }]);
}(_ItineraryInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation2/itinerary/ItineraryEventHandler.js":
/*!**************************************************************************************!*\
  !*** ./resources/js/components/elementOperation2/itinerary/ItineraryEventHandler.js ***!
  \**************************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ ItineraryEventHandler)
/* harmony export */ });
/* harmony import */ var _DupeItinerary_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./DupeItinerary.js */ "./resources/js/components/elementOperation2/itinerary/DupeItinerary.js");
/* harmony import */ var _DupeItineraryActivity_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./DupeItineraryActivity.js */ "./resources/js/components/elementOperation2/itinerary/DupeItineraryActivity.js");
/* harmony import */ var _DupeItineraryHighlight_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./DupeItineraryHighlight.js */ "./resources/js/components/elementOperation2/itinerary/DupeItineraryHighlight.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _classPrivateMethodInitSpec(e, a) { _checkPrivateRedeclaration(e, a), a.add(e); }
function _checkPrivateRedeclaration(e, t) { if (t.has(e)) throw new TypeError("Cannot initialize the same private elements twice on an object"); }
function _assertClassBrand(e, t, n) { if ("function" == typeof e ? e === t : e.has(t)) return arguments.length < 3 ? t : n; throw new TypeError("Private element is not present on this object"); }



var _ItineraryEventHandler_brand = /*#__PURE__*/new WeakSet();
var ItineraryEventHandler = /*#__PURE__*/function () {
  function ItineraryEventHandler() {
    _classCallCheck(this, ItineraryEventHandler);
    _classPrivateMethodInitSpec(this, _ItineraryEventHandler_brand);
    console.log('ItineraryEventHandler インスタンス作成');
    this.section = document.getElementById("itinerary-section");
    // this.instance = ItineraryEventHandlerFactory.getHandler(elementType)
    this.instance = null;
    this.initialize();
  }
  return _createClass(ItineraryEventHandler, [{
    key: "initialize",
    value: function initialize() {
      document.getElementById("itinerary-section").addEventListener("click", _assertClassBrand(_ItineraryEventHandler_brand, this, _handleEvent).bind(this));
    }
  }]);
}();
function _handleEvent(e) {
  var wrapper = e.target.closest(".itinerary-item");
  if (e.target.closest(".remove-activity_button")) {
    this.instance = new _DupeItineraryActivity_js__WEBPACK_IMPORTED_MODULE_1__["default"]();
    this.instance.deleteElement(e.target.closest(".remove-activity_button"), wrapper);
  }
  if (e.target.closest(".add-activity_button")) {
    this.instance = new _DupeItineraryActivity_js__WEBPACK_IMPORTED_MODULE_1__["default"]();
    this.instance.duplicateElement(wrapper);
  }
  if (e.target.closest(".remove-itinerary_button")) {
    this.instance = new _DupeItinerary_js__WEBPACK_IMPORTED_MODULE_0__["default"]();
    this.instance.deleteElement(e.target.closest(".remove-itinerary_button"));
  }
  if (e.target.closest(".add-itinerary_button")) {
    this.instance = new _DupeItinerary_js__WEBPACK_IMPORTED_MODULE_0__["default"]();
    this.instance.duplicateElement();
  }
  if (e.target.closest(".remove-itinerary-highlight_button")) {
    this.instance = new _DupeItineraryHighlight_js__WEBPACK_IMPORTED_MODULE_2__["default"]();
    this.instance.deleteElement(e.target.closest(".remove-itinerary-highlight_button"));
  }
  if (e.target.closest(".add-itinerary-highlight_button")) {
    this.instance = new _DupeItineraryHighlight_js__WEBPACK_IMPORTED_MODULE_2__["default"]();
    this.instance.duplicateElement();
  }
}


/***/ }),

/***/ "./resources/js/components/elementOperation2/itinerary/ItineraryInterface.js":
/*!***********************************************************************************!*\
  !*** ./resources/js/components/elementOperation2/itinerary/ItineraryInterface.js ***!
  \***********************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ ItineraryInterface)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _classPrivateMethodInitSpec(e, a) { _checkPrivateRedeclaration(e, a), a.add(e); }
function _checkPrivateRedeclaration(e, t) { if (t.has(e)) throw new TypeError("Cannot initialize the same private elements twice on an object"); }
var _ItineraryInterface_brand = /*#__PURE__*/new WeakSet();
var ItineraryInterface = /*#__PURE__*/_createClass(function ItineraryInterface() {
  _classCallCheck(this, ItineraryInterface);
  _classPrivateMethodInitSpec(this, _ItineraryInterface_brand);
  this.template = "";
  this.wrapper = "";
  this.activityIndex = 0;
  this.itineraryIndex = 0;
});
function _duplicateElement() {
  throw new Error('Method not implemented');
}
function _createDOM() {
  throw new Error('Method not implemented');
}
function _deleteElement() {
  throw new Error('Method not implemented');
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
/* harmony import */ var _components_elementOperation2_itinerary_ItineraryEventHandler_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/elementOperation2/itinerary/ItineraryEventHandler.js */ "./resources/js/components/elementOperation2/itinerary/ItineraryEventHandler.js");


new _components_elementOperation2_itinerary_ItineraryEventHandler_js__WEBPACK_IMPORTED_MODULE_1__["default"]();
new _components_elementOperation2_DupeHighlight_js__WEBPACK_IMPORTED_MODULE_0__["default"]();
})();

/******/ })()
;