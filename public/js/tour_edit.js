/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/elementOperation/DupeEventhandler.js":
/*!**********************************************************************!*\
  !*** ./resources/js/components/elementOperation/DupeEventhandler.js ***!
  \**********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeEventhandler)
/* harmony export */ });
/* harmony import */ var _DupeHighlight_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./DupeHighlight.js */ "./resources/js/components/elementOperation/DupeHighlight.js");
/* harmony import */ var _DupeQA_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./DupeQA.js */ "./resources/js/components/elementOperation/DupeQA.js");
/* harmony import */ var _DupeReview_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./DupeReview.js */ "./resources/js/components/elementOperation/DupeReview.js");
/* harmony import */ var _itinerary_DupeItinerary_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./itinerary/DupeItinerary.js */ "./resources/js/components/elementOperation/itinerary/DupeItinerary.js");
/* harmony import */ var _itinerary_DupeItineraryActivity_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./itinerary/DupeItineraryActivity.js */ "./resources/js/components/elementOperation/itinerary/DupeItineraryActivity.js");
/* harmony import */ var _itinerary_DupeItineraryHighlight_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./itinerary/DupeItineraryHighlight.js */ "./resources/js/components/elementOperation/itinerary/DupeItineraryHighlight.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _slicedToArray(r, e) { return _arrayWithHoles(r) || _iterableToArrayLimit(r, e) || _unsupportedIterableToArray(r, e) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _iterableToArrayLimit(r, l) { var t = null == r ? null : "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (null != t) { var e, n, i, u, a = [], f = !0, o = !1; try { if (i = (t = t.call(r)).next, 0 === l) { if (Object(t) !== t) return; f = !1; } else for (; !(f = (e = i.call(t)).done) && (a.push(e.value), a.length !== l); f = !0); } catch (r) { o = !0, n = r; } finally { try { if (!f && null != t["return"] && (u = t["return"](), Object(u) !== u)) return; } finally { if (o) throw n; } } return a; } }
function _arrayWithHoles(r) { if (Array.isArray(r)) return r; }
function _createForOfIteratorHelper(r, e) { var t = "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (!t) { if (Array.isArray(r) || (t = _unsupportedIterableToArray(r)) || e && r && "number" == typeof r.length) { t && (r = t); var _n = 0, F = function F() {}; return { s: F, n: function n() { return _n >= r.length ? { done: !0 } : { done: !1, value: r[_n++] }; }, e: function e(r) { throw r; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var o, a = !0, u = !1; return { s: function s() { t = t.call(r); }, n: function n() { var r = t.next(); return a = r.done, r; }, e: function e(r) { u = !0, o = r; }, f: function f() { try { a || null == t["return"] || t["return"](); } finally { if (u) throw o; } } }; }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _classPrivateMethodInitSpec(e, a) { _checkPrivateRedeclaration(e, a), a.add(e); }
function _checkPrivateRedeclaration(e, t) { if (t.has(e)) throw new TypeError("Cannot initialize the same private elements twice on an object"); }
function _assertClassBrand(e, t, n) { if ("function" == typeof e ? e === t : e.has(t)) return arguments.length < 3 ? t : n; throw new TypeError("Private element is not present on this object"); }






var _DupeEventhandler_brand = /*#__PURE__*/new WeakSet();
var DupeEventhandler = /*#__PURE__*/function () {
  function DupeEventhandler() {
    _classCallCheck(this, DupeEventhandler);
    _classPrivateMethodInitSpec(this, _DupeEventhandler_brand);
    this.initialize();
    this.initializeHandlers();
  }
  return _createClass(DupeEventhandler, [{
    key: "initialize",
    value: function initialize() {
      document.getElementById("tour-section").addEventListener("click", _assertClassBrand(_DupeEventhandler_brand, this, _handleEvent).bind(this));
    }
  }, {
    key: "initializeHandlers",
    value: function initializeHandlers() {
      this.handlers = new Map([['remove-activity_button', {
        instance: _itinerary_DupeItineraryActivity_js__WEBPACK_IMPORTED_MODULE_4__["default"].getInstance(),
        action: 'delete'
      }], ['add-activity_button', {
        instance: _itinerary_DupeItineraryActivity_js__WEBPACK_IMPORTED_MODULE_4__["default"].getInstance(),
        action: 'duplicate'
      }], ['remove-itinerary_button', {
        instance: _itinerary_DupeItinerary_js__WEBPACK_IMPORTED_MODULE_3__["default"].getInstance(),
        action: 'delete'
      }], ['add-itinerary_button', {
        instance: _itinerary_DupeItinerary_js__WEBPACK_IMPORTED_MODULE_3__["default"].getInstance(),
        action: 'duplicate'
      }], ['remove-itinerary-highlight_button', {
        instance: _itinerary_DupeItineraryHighlight_js__WEBPACK_IMPORTED_MODULE_5__["default"].getInstance(),
        action: 'delete'
      }], ['add-itinerary-highlight_button', {
        instance: _itinerary_DupeItineraryHighlight_js__WEBPACK_IMPORTED_MODULE_5__["default"].getInstance(),
        action: 'duplicate'
      }], ['remove-highlight_button', {
        instance: _DupeHighlight_js__WEBPACK_IMPORTED_MODULE_0__["default"].getInstance(),
        action: 'delete'
      }], ['add-highlight_button', {
        instance: _DupeHighlight_js__WEBPACK_IMPORTED_MODULE_0__["default"].getInstance(),
        action: 'duplicate'
      }], ['add-review_button', {
        instance: _DupeReview_js__WEBPACK_IMPORTED_MODULE_2__["default"].getInstance(),
        action: 'duplicate'
      }], ['remove-review_button', {
        instance: _DupeReview_js__WEBPACK_IMPORTED_MODULE_2__["default"].getInstance(),
        action: 'delete'
      }], ['add-qa_button', {
        instance: _DupeQA_js__WEBPACK_IMPORTED_MODULE_1__["default"].getInstance(),
        action: 'duplicate'
      }], ['remove-qa_button', {
        instance: _DupeQA_js__WEBPACK_IMPORTED_MODULE_1__["default"].getInstance(),
        action: 'delete'
      }]]);
    }
  }]);
}();
function _handleEvent(e) {
  var itineraryContainer = e.target.closest(".itinerary-item");
  var _iterator = _createForOfIteratorHelper(this.handlers),
    _step;
  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var _step$value = _slicedToArray(_step.value, 2),
        selector = _step$value[0],
        _step$value$ = _step$value[1],
        instance = _step$value$.instance,
        action = _step$value$.action;
      var button = e.target.closest(".".concat(selector));
      if (button) {
        if (action === 'delete') {
          instance.deleteElement(button);
        } else {
          instance.duplicateElement(itineraryContainer);
        }
        break; // 一つ見つかったら終了
      }
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}


/***/ }),

/***/ "./resources/js/components/elementOperation/DupeHighlight.js":
/*!*******************************************************************!*\
  !*** ./resources/js/components/elementOperation/DupeHighlight.js ***!
  \*******************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeHighlight)
/* harmony export */ });
/* harmony import */ var _DupeInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./DupeInterface.js */ "./resources/js/components/elementOperation/DupeInterface.js");
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

var DupeHighlight = /*#__PURE__*/function (_DupeInterface) {
  function DupeHighlight() {
    var _this;
    _classCallCheck(this, DupeHighlight);
    if (DupeHighlight.instance) {
      return _possibleConstructorReturn(_this, DupeHighlight.instance);
    }
    _this = _callSuper(this, DupeHighlight);
    _this.template = document.getElementById("highlight_template").innerHTML;
    _this.tourHighlightWrapper = document.getElementById("tour_highlight-wrapper");
    DupeHighlight.instance = _this;
    return _this;
  }
  _inherits(DupeHighlight, _DupeInterface);
  return _createClass(DupeHighlight, [{
    key: "duplicateElement",
    value:
    // Tour Hightlightの要素の追加
    function duplicateElement() {
      this.createDOM();
    }
  }, {
    key: "createDOM",
    value: function createDOM() {
      var highlightCount = this.tourHighlightWrapper.querySelectorAll(".highlight-item").length;
      var rawHTML = this.template.replace(/{highlight_index}/g, highlightCount);
      var newDiv = document.createElement("div");
      newDiv.classList.add("highlight-item");
      newDiv.innerHTML = rawHTML;
      this.tourHighlightWrapper.appendChild(newDiv);
    }

    // Tour highlightの要素の削除
  }, {
    key: "deleteElement",
    value: function deleteElement(button) {
      if (!this.hasOneData(this.tourHighlightWrapper, "highlight")) {
        alert("create one highlight at least");
        return;
      }
      var targetElement = button.closest(".highlight-item");
      this.tourHighlightWrapper.removeChild(targetElement);
    }
  }], [{
    key: "getInstance",
    value: function getInstance() {
      if (!DupeHighlight.instance) {
        DupeHighlight.instance = new DupeHighlight();
      }
      return DupeHighlight.instance;
    }
  }]);
}(_DupeInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/DupeInterface.js":
/*!*******************************************************************!*\
  !*** ./resources/js/components/elementOperation/DupeInterface.js ***!
  \*******************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeInterface)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var DupeInterface = /*#__PURE__*/function () {
  function DupeInterface() {
    _classCallCheck(this, DupeInterface);
    this.template = "";
  }
  return _createClass(DupeInterface, [{
    key: "generateItineraryId",
    value: function generateItineraryId() {
      var items = Array.from(document.querySelectorAll(".itinerary-item"));
      return Number(items[items.length - 1].dataset.id) + 1;
    }
  }, {
    key: "hasOneData",
    value: function hasOneData(element, type) {
      return (element === null || element === void 0 ? void 0 : element.querySelectorAll(".".concat(type, "-item")).length) > 1;
    }
  }, {
    key: "duplicateElement",
    value: function duplicateElement() {
      var itineraryContainer = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
      throw new Error("Method not implemented");
    }
  }, {
    key: "createDOM",
    value: function createDOM() {
      var itineraryContainer = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
      throw new Error("Method not implemented");
    }
  }, {
    key: "deleteElement",
    value: function deleteElement(button) {
      throw new Error("Method not implemented");
    }
  }], [{
    key: "getInstance",
    value: function getInstance() {
      throw new Error("Method not implemented");
    }
  }]);
}();


/***/ }),

/***/ "./resources/js/components/elementOperation/DupeQA.js":
/*!************************************************************!*\
  !*** ./resources/js/components/elementOperation/DupeQA.js ***!
  \************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeQA)
/* harmony export */ });
/* harmony import */ var _DupeInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./DupeInterface.js */ "./resources/js/components/elementOperation/DupeInterface.js");
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

var DupeQA = /*#__PURE__*/function (_DupeInterface) {
  function DupeQA() {
    var _this;
    _classCallCheck(this, DupeQA);
    if (DupeQA.instance) {
      return _possibleConstructorReturn(_this, DupeQA.instance);
    }
    _this = _callSuper(this, DupeQA);
    _this.template = document.getElementById("qa_template").innerHTML;
    _this.qaWrapper = document.getElementById("qa-wrapper");
    DupeQA.instance = _this;
    return _this;
  }
  _inherits(DupeQA, _DupeInterface);
  return _createClass(DupeQA, [{
    key: "duplicateElement",
    value:
    // Tour Hightlightの要素の追加
    function duplicateElement() {
      this.createDOM();
    }
  }, {
    key: "createDOM",
    value: function createDOM() {
      var qaCount = this.qaWrapper.querySelectorAll(".qa-item").length;
      var rawHTML = this.template.replace(/{qa_index}/g, qaCount).replace(/{qa_title}/g, qaCount + 1);
      var newDiv = document.createElement("div");
      newDiv.classList.add("qa-item");
      newDiv.innerHTML = rawHTML;
      this.qaWrapper.appendChild(newDiv);
    }

    // Tour qaの要素の削除
  }, {
    key: "deleteElement",
    value: function deleteElement(button) {
      if (!this.hasOneData(this.qaWrapper, "qa")) {
        alert("create one qa at least");
        return;
      }
      var targetElement = button.closest(".qa-item");
      this.qaWrapper.removeChild(targetElement);
    }
  }], [{
    key: "getInstance",
    value: function getInstance() {
      if (!DupeQA.instance) {
        DupeQA.instance = new DupeQA();
      }
      return DupeQA.instance;
    }
  }]);
}(_DupeInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/DupeReview.js":
/*!****************************************************************!*\
  !*** ./resources/js/components/elementOperation/DupeReview.js ***!
  \****************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeReview)
/* harmony export */ });
/* harmony import */ var _DupeInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./DupeInterface.js */ "./resources/js/components/elementOperation/DupeInterface.js");
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

var DupeReview = /*#__PURE__*/function (_DupeInterface) {
  function DupeReview() {
    var _this;
    _classCallCheck(this, DupeReview);
    if (DupeReview.instance) {
      return _possibleConstructorReturn(_this, DupeReview.instance);
    }
    _this = _callSuper(this, DupeReview);
    _this.template = document.getElementById("review_template").innerHTML;
    _this.reviewWrapper = document.getElementById("review-wrapper");
    DupeReview.instance = _this;
    return _this;
  }
  _inherits(DupeReview, _DupeInterface);
  return _createClass(DupeReview, [{
    key: "duplicateElement",
    value:
    // Tour Hightlightの要素の追加
    function duplicateElement() {
      this.createDOM();
    }
  }, {
    key: "createDOM",
    value: function createDOM() {
      var reviewCount = this.reviewWrapper.querySelectorAll(".review-item").length;
      var rawHTML = this.template.replace(/{review_index}/g, reviewCount).replace(/{review_title}/g, reviewCount + 1);
      var newDiv = document.createElement("div");
      newDiv.classList.add("review-item");
      newDiv.innerHTML = rawHTML;
      this.reviewWrapper.appendChild(newDiv);
    }

    // Tour reviewの要素の削除
  }, {
    key: "deleteElement",
    value: function deleteElement(button) {
      if (!this.hasOneData(this.reviewWrapper, "review")) {
        alert("create one review at least");
        return;
      }
      var targetElement = button.closest(".review-item");
      this.reviewWrapper.removeChild(targetElement);
    }
  }], [{
    key: "getInstance",
    value: function getInstance() {
      if (!DupeReview.instance) {
        DupeReview.instance = new DupeReview();
      }
      return DupeReview.instance;
    }
  }]);
}(_DupeInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/itinerary/DupeItinerary.js":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/elementOperation/itinerary/DupeItinerary.js ***!
  \*****************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeItinerary)
/* harmony export */ });
/* harmony import */ var _fileOperation_FileOperation_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../fileOperation/FileOperation.js */ "./resources/js/components/fileOperation/FileOperation.js");
/* harmony import */ var _DupeInterface_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../DupeInterface.js */ "./resources/js/components/elementOperation/DupeInterface.js");
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


var DupeItinerary = /*#__PURE__*/function (_DupeInterface) {
  function DupeItinerary() {
    var _this;
    _classCallCheck(this, DupeItinerary);
    if (DupeItinerary.instance) {
      return _possibleConstructorReturn(_this, DupeItinerary.instance);
    }
    _this = _callSuper(this, DupeItinerary);
    _this.template = document.getElementById("itinerary-template").innerHTML;
    _this.wrapper = document.getElementById("itinerary-wrapper");
    DupeItinerary.instance = _this;
    return _this;
  }

  /**
   * @override
   */
  _inherits(DupeItinerary, _DupeInterface);
  return _createClass(DupeItinerary, [{
    key: "duplicateElement",
    value:
    /**
     * @override
     */
    function duplicateElement() {
      var itineraryIndex = this.generateItineraryId();
      console.log(itineraryIndex);
      this.createDOM(itineraryIndex);
      this.fileUploadOperator(itineraryIndex);
    }

    /**
     * @override
     */
  }, {
    key: "createDOM",
    value: function createDOM(itineraryIndex) {
      var rawHTML = this.template.replace(/{itinerary_index}/g, itineraryIndex).replace(/{activity_index}/g, 0).replace(/{itinerary_count}/g, itineraryIndex + 1);
      var newDiv = document.createElement("div");
      newDiv.classList.add("itinerary-item", "mt-8");
      newDiv.dataset.id = itineraryIndex;
      newDiv.innerHTML = rawHTML;
      this.wrapper.appendChild(newDiv);
    }

    /**
     * @override
     */
  }, {
    key: "deleteElement",
    value: function deleteElement(button) {
      if (!this.hasOneData(this.wrapper, "itinerary")) {
        alert("create one itinerary at least");
        return;
      }
      var targetElement = button.closest(".itinerary-item");
      this.wrapper.removeChild(targetElement);
    }
  }, {
    key: "fileUploadOperator",
    value: function fileUploadOperator(itineraryIndex) {
      var fileUpload = document.getElementById("itinerary_".concat(itineraryIndex));
      var previewImageSrc = document.querySelector(".itinerary_preview_src".concat(itineraryIndex));
      var imageElement = document.querySelector(".itinerary_image_element".concat(itineraryIndex));
      var fileOperation = new _fileOperation_FileOperation_js__WEBPACK_IMPORTED_MODULE_0__["default"](fileUpload, previewImageSrc, imageElement);
      fileOperation.handleUpload();
    }
  }], [{
    key: "getInstance",
    value: function getInstance() {
      if (!DupeItinerary.instance) {
        DupeItinerary.instance = new DupeItinerary();
      }
      return DupeItinerary.instance;
    }
  }]);
}(_DupeInterface_js__WEBPACK_IMPORTED_MODULE_1__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/itinerary/DupeItineraryActivity.js":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/elementOperation/itinerary/DupeItineraryActivity.js ***!
  \*************************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeItineraryActivity)
/* harmony export */ });
/* harmony import */ var _DupeInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../DupeInterface.js */ "./resources/js/components/elementOperation/DupeInterface.js");
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

var DupeItineraryActivity = /*#__PURE__*/function (_DupeInterface) {
  function DupeItineraryActivity() {
    var _this;
    _classCallCheck(this, DupeItineraryActivity);
    if (DupeItineraryActivity.instance) {
      return _possibleConstructorReturn(_this, DupeItineraryActivity.instance);
    }
    _this = _callSuper(this, DupeItineraryActivity);
    _this.template = document.getElementById("activity_template").innerHTML;
    _this.itemWrapper = null;
    DupeItineraryActivity.instance = _this;
    return _this;
  }

  /**
   * @override
   */
  _inherits(DupeItineraryActivity, _DupeInterface);
  return _createClass(DupeItineraryActivity, [{
    key: "duplicateElement",
    value:
    /**
     * @override
     */
    function duplicateElement(itineraryContainer) {
      this.createDOM(itineraryContainer);
    }

    /**
     * @override
     */
  }, {
    key: "createDOM",
    value: function createDOM(itineraryContainer) {
      this.itemWrapper = itineraryContainer.querySelector(".activity-wrapper");
      var activityCount = this.itemWrapper.querySelectorAll(".activity-item").length;
      var rawHTML = this.template.replace(/{itinerary_index}/g, itineraryContainer.dataset.id).replace(/{activity_index}/g, activityCount);
      var newDiv = document.createElement("div");
      newDiv.classList.add("activity-item");
      newDiv.innerHTML = rawHTML;
      this.itemWrapper.appendChild(newDiv);
    }

    /**
     * @override
     */
  }, {
    key: "deleteElement",
    value: function deleteElement(button) {
      if (!this.hasOneData(this.itemWrapper, "activity")) {
        alert("create one activity at least");
        return;
      }
      var targetElement = button.closest(".activity-item");
      this.itemWrapper.removeChild(targetElement);
    }
  }], [{
    key: "getInstance",
    value: function getInstance() {
      if (!DupeItineraryActivity.instance) {
        DupeItineraryActivity.instance = new DupeItineraryActivity();
      }
      return DupeItineraryActivity.instance;
    }
  }]);
}(_DupeInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/elementOperation/itinerary/DupeItineraryHighlight.js":
/*!**************************************************************************************!*\
  !*** ./resources/js/components/elementOperation/itinerary/DupeItineraryHighlight.js ***!
  \**************************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DupeItineraryHighlight)
/* harmony export */ });
/* harmony import */ var _DupeInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../DupeInterface.js */ "./resources/js/components/elementOperation/DupeInterface.js");
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

var DupeItineraryHighlight = /*#__PURE__*/function (_DupeInterface) {
  function DupeItineraryHighlight() {
    var _this;
    _classCallCheck(this, DupeItineraryHighlight);
    if (DupeItineraryHighlight.instance) {
      return _possibleConstructorReturn(_this, DupeItineraryHighlight.instance);
    }
    _this = _callSuper(this, DupeItineraryHighlight);
    _this.template = document.getElementById("itinerary-highlight_template").innerHTML;
    _this.itemWrapper = null;
    DupeItineraryHighlight.instance = _this;
    return _this;
  }

  /**
   * @override
   */
  _inherits(DupeItineraryHighlight, _DupeInterface);
  return _createClass(DupeItineraryHighlight, [{
    key: "duplicateElement",
    value:
    /**
     * @override
     */
    function duplicateElement(itineraryContainer) {
      this.activityIndex++;
      this.createDOM(itineraryContainer);
    }

    /**
     * @override
     */
  }, {
    key: "createDOM",
    value: function createDOM(itineraryContainer) {
      this.itemWrapper = itineraryContainer.querySelector(".itinerary_highlight-wrapper");
      var highlightCount = this.itemWrapper.querySelectorAll(".itinerary_highlight-item").length;
      var rawHTML = this.template.replace(/{itinerary_index}/g, itineraryContainer.dataset.id).replace(/{itinerary_highlight}/g, highlightCount);
      var newDiv = document.createElement("div");
      newDiv.classList.add("itinerary_highlight-item");
      newDiv.innerHTML = rawHTML;
      this.itemWrapper.appendChild(newDiv);
    }

    /**
     * @override
     */
  }, {
    key: "deleteElement",
    value: function deleteElement(button) {
      if (!this.hasOneData(this.itemWrapper, "itinerary_highlight")) {
        alert("create one itinerary highlight at least");
        return;
      }
      var targetElement = button.closest(".itinerary_highlight-item");
      this.itemWrapper.removeChild(targetElement);
    }
  }], [{
    key: "getInstance",
    value: function getInstance() {
      if (!DupeItineraryHighlight.instance) {
        DupeItineraryHighlight.instance = new DupeItineraryHighlight();
      }
      return DupeItineraryHighlight.instance;
    }
  }]);
}(_DupeInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/fileOperation/FileOperation.js":
/*!****************************************************************!*\
  !*** ./resources/js/components/fileOperation/FileOperation.js ***!
  \****************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ FileOperation)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return e; }; var t, e = {}, r = Object.prototype, n = r.hasOwnProperty, o = Object.defineProperty || function (t, e, r) { t[e] = r.value; }, i = "function" == typeof Symbol ? Symbol : {}, a = i.iterator || "@@iterator", c = i.asyncIterator || "@@asyncIterator", u = i.toStringTag || "@@toStringTag"; function define(t, e, r) { return Object.defineProperty(t, e, { value: r, enumerable: !0, configurable: !0, writable: !0 }), t[e]; } try { define({}, ""); } catch (t) { define = function define(t, e, r) { return t[e] = r; }; } function wrap(t, e, r, n) { var i = e && e.prototype instanceof Generator ? e : Generator, a = Object.create(i.prototype), c = new Context(n || []); return o(a, "_invoke", { value: makeInvokeMethod(t, r, c) }), a; } function tryCatch(t, e, r) { try { return { type: "normal", arg: t.call(e, r) }; } catch (t) { return { type: "throw", arg: t }; } } e.wrap = wrap; var h = "suspendedStart", l = "suspendedYield", f = "executing", s = "completed", y = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var p = {}; define(p, a, function () { return this; }); var d = Object.getPrototypeOf, v = d && d(d(values([]))); v && v !== r && n.call(v, a) && (p = v); var g = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(p); function defineIteratorMethods(t) { ["next", "throw", "return"].forEach(function (e) { define(t, e, function (t) { return this._invoke(e, t); }); }); } function AsyncIterator(t, e) { function invoke(r, o, i, a) { var c = tryCatch(t[r], t, o); if ("throw" !== c.type) { var u = c.arg, h = u.value; return h && "object" == _typeof(h) && n.call(h, "__await") ? e.resolve(h.__await).then(function (t) { invoke("next", t, i, a); }, function (t) { invoke("throw", t, i, a); }) : e.resolve(h).then(function (t) { u.value = t, i(u); }, function (t) { return invoke("throw", t, i, a); }); } a(c.arg); } var r; o(this, "_invoke", { value: function value(t, n) { function callInvokeWithMethodAndArg() { return new e(function (e, r) { invoke(t, n, e, r); }); } return r = r ? r.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(e, r, n) { var o = h; return function (i, a) { if (o === f) throw Error("Generator is already running"); if (o === s) { if ("throw" === i) throw a; return { value: t, done: !0 }; } for (n.method = i, n.arg = a;;) { var c = n.delegate; if (c) { var u = maybeInvokeDelegate(c, n); if (u) { if (u === y) continue; return u; } } if ("next" === n.method) n.sent = n._sent = n.arg;else if ("throw" === n.method) { if (o === h) throw o = s, n.arg; n.dispatchException(n.arg); } else "return" === n.method && n.abrupt("return", n.arg); o = f; var p = tryCatch(e, r, n); if ("normal" === p.type) { if (o = n.done ? s : l, p.arg === y) continue; return { value: p.arg, done: n.done }; } "throw" === p.type && (o = s, n.method = "throw", n.arg = p.arg); } }; } function maybeInvokeDelegate(e, r) { var n = r.method, o = e.iterator[n]; if (o === t) return r.delegate = null, "throw" === n && e.iterator["return"] && (r.method = "return", r.arg = t, maybeInvokeDelegate(e, r), "throw" === r.method) || "return" !== n && (r.method = "throw", r.arg = new TypeError("The iterator does not provide a '" + n + "' method")), y; var i = tryCatch(o, e.iterator, r.arg); if ("throw" === i.type) return r.method = "throw", r.arg = i.arg, r.delegate = null, y; var a = i.arg; return a ? a.done ? (r[e.resultName] = a.value, r.next = e.nextLoc, "return" !== r.method && (r.method = "next", r.arg = t), r.delegate = null, y) : a : (r.method = "throw", r.arg = new TypeError("iterator result is not an object"), r.delegate = null, y); } function pushTryEntry(t) { var e = { tryLoc: t[0] }; 1 in t && (e.catchLoc = t[1]), 2 in t && (e.finallyLoc = t[2], e.afterLoc = t[3]), this.tryEntries.push(e); } function resetTryEntry(t) { var e = t.completion || {}; e.type = "normal", delete e.arg, t.completion = e; } function Context(t) { this.tryEntries = [{ tryLoc: "root" }], t.forEach(pushTryEntry, this), this.reset(!0); } function values(e) { if (e || "" === e) { var r = e[a]; if (r) return r.call(e); if ("function" == typeof e.next) return e; if (!isNaN(e.length)) { var o = -1, i = function next() { for (; ++o < e.length;) if (n.call(e, o)) return next.value = e[o], next.done = !1, next; return next.value = t, next.done = !0, next; }; return i.next = i; } } throw new TypeError(_typeof(e) + " is not iterable"); } return GeneratorFunction.prototype = GeneratorFunctionPrototype, o(g, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), o(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, u, "GeneratorFunction"), e.isGeneratorFunction = function (t) { var e = "function" == typeof t && t.constructor; return !!e && (e === GeneratorFunction || "GeneratorFunction" === (e.displayName || e.name)); }, e.mark = function (t) { return Object.setPrototypeOf ? Object.setPrototypeOf(t, GeneratorFunctionPrototype) : (t.__proto__ = GeneratorFunctionPrototype, define(t, u, "GeneratorFunction")), t.prototype = Object.create(g), t; }, e.awrap = function (t) { return { __await: t }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, c, function () { return this; }), e.AsyncIterator = AsyncIterator, e.async = function (t, r, n, o, i) { void 0 === i && (i = Promise); var a = new AsyncIterator(wrap(t, r, n, o), i); return e.isGeneratorFunction(r) ? a : a.next().then(function (t) { return t.done ? t.value : a.next(); }); }, defineIteratorMethods(g), define(g, u, "Generator"), define(g, a, function () { return this; }), define(g, "toString", function () { return "[object Generator]"; }), e.keys = function (t) { var e = Object(t), r = []; for (var n in e) r.push(n); return r.reverse(), function next() { for (; r.length;) { var t = r.pop(); if (t in e) return next.value = t, next.done = !1, next; } return next.done = !0, next; }; }, e.values = values, Context.prototype = { constructor: Context, reset: function reset(e) { if (this.prev = 0, this.next = 0, this.sent = this._sent = t, this.done = !1, this.delegate = null, this.method = "next", this.arg = t, this.tryEntries.forEach(resetTryEntry), !e) for (var r in this) "t" === r.charAt(0) && n.call(this, r) && !isNaN(+r.slice(1)) && (this[r] = t); }, stop: function stop() { this.done = !0; var t = this.tryEntries[0].completion; if ("throw" === t.type) throw t.arg; return this.rval; }, dispatchException: function dispatchException(e) { if (this.done) throw e; var r = this; function handle(n, o) { return a.type = "throw", a.arg = e, r.next = n, o && (r.method = "next", r.arg = t), !!o; } for (var o = this.tryEntries.length - 1; o >= 0; --o) { var i = this.tryEntries[o], a = i.completion; if ("root" === i.tryLoc) return handle("end"); if (i.tryLoc <= this.prev) { var c = n.call(i, "catchLoc"), u = n.call(i, "finallyLoc"); if (c && u) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } else if (c) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); } else { if (!u) throw Error("try statement without catch or finally"); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } } } }, abrupt: function abrupt(t, e) { for (var r = this.tryEntries.length - 1; r >= 0; --r) { var o = this.tryEntries[r]; if (o.tryLoc <= this.prev && n.call(o, "finallyLoc") && this.prev < o.finallyLoc) { var i = o; break; } } i && ("break" === t || "continue" === t) && i.tryLoc <= e && e <= i.finallyLoc && (i = null); var a = i ? i.completion : {}; return a.type = t, a.arg = e, i ? (this.method = "next", this.next = i.finallyLoc, y) : this.complete(a); }, complete: function complete(t, e) { if ("throw" === t.type) throw t.arg; return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && e && (this.next = e), y; }, finish: function finish(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.finallyLoc === t) return this.complete(r.completion, r.afterLoc), resetTryEntry(r), y; } }, "catch": function _catch(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.tryLoc === t) { var n = r.completion; if ("throw" === n.type) { var o = n.arg; resetTryEntry(r); } return o; } } throw Error("illegal catch attempt"); }, delegateYield: function delegateYield(e, r, n) { return this.delegate = { iterator: values(e), resultName: r, nextLoc: n }, "next" === this.method && (this.arg = t), y; } }, e; }
function asyncGeneratorStep(n, t, e, r, o, a, c) { try { var i = n[a](c), u = i.value; } catch (n) { return void e(n); } i.done ? t(u) : Promise.resolve(u).then(r, o); }
function _asyncToGenerator(n) { return function () { var t = this, e = arguments; return new Promise(function (r, o) { var a = n.apply(t, e); function _next(n) { asyncGeneratorStep(a, r, o, _next, _throw, "next", n); } function _throw(n) { asyncGeneratorStep(a, r, o, _next, _throw, "throw", n); } _next(void 0); }); }; }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _classPrivateMethodInitSpec(e, a) { _checkPrivateRedeclaration(e, a), a.add(e); }
function _checkPrivateRedeclaration(e, t) { if (t.has(e)) throw new TypeError("Cannot initialize the same private elements twice on an object"); }
function _assertClassBrand(e, t, n) { if ("function" == typeof e ? e === t : e.has(t)) return arguments.length < 3 ? t : n; throw new TypeError("Private element is not present on this object"); }
var _FileOperation_brand = /*#__PURE__*/new WeakSet();
var FileOperation = /*#__PURE__*/function () {
  function FileOperation(uploadInput, previewSrc, imageElement) {
    _classCallCheck(this, FileOperation);
    _classPrivateMethodInitSpec(this, _FileOperation_brand);
    this.fileUpload = uploadInput;
    this.previewImageElement = previewSrc;
    this.imageElement = imageElement;
  }
  return _createClass(FileOperation, [{
    key: "handleUpload",
    value: function () {
      var _handleUpload = _asyncToGenerator(/*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
        var _this = this;
        return _regeneratorRuntime().wrap(function _callee$(_context) {
          while (1) switch (_context.prev = _context.next) {
            case 0:
              this.fileUpload.addEventListener("change", function (e) {
                var file = e.target.files[0];
                _assertClassBrand(_FileOperation_brand, _this, _displayPreview).call(_this, file);
              });
            case 1:
            case "end":
              return _context.stop();
          }
        }, _callee, this);
      }));
      function handleUpload() {
        return _handleUpload.apply(this, arguments);
      }
      return handleUpload;
    }()
  }]);
}();
function _displayPreview(file) {
  var objectURL = URL.createObjectURL(file);
  this.previewImageElement.closest(".preview_container").classList.remove("hidden");
  this.imageElement.classList.add("hidden");
  this.previewImageElement.src = objectURL;
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
/*!*****************************************!*\
  !*** ./resources/js/pages/tour_edit.js ***!
  \*****************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_elementOperation_DupeEventhandler_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/elementOperation/DupeEventhandler.js */ "./resources/js/components/elementOperation/DupeEventhandler.js");
/* harmony import */ var _components_fileOperation_FileOperation_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/fileOperation/FileOperation.js */ "./resources/js/components/fileOperation/FileOperation.js");


new _components_elementOperation_DupeEventhandler_js__WEBPACK_IMPORTED_MODULE_0__["default"]();
new _components_fileOperation_FileOperation_js__WEBPACK_IMPORTED_MODULE_1__["default"]();

// Image Upload
// itinerary image
var itinerary_fileUpload = document.getElementById("itinerary_0");
var itinerary_previewImageSrc = document.querySelector(".itinerary_preview_src0");
var itinerary_imageElement = document.querySelector(".itinerary_image_element0");
var itinerary_fileOperation = new _components_fileOperation_FileOperation_js__WEBPACK_IMPORTED_MODULE_1__["default"](itinerary_fileUpload, itinerary_previewImageSrc, itinerary_imageElement);
itinerary_fileOperation.handleUpload();

// hero image
var hero_fileUpload = document.getElementById("hero_image");
var hero_previewImageSrc = document.querySelector(".preview_src");
var hero_imageElement = document.querySelector(".hero_image_element");
var hero_fileOperation = new _components_fileOperation_FileOperation_js__WEBPACK_IMPORTED_MODULE_1__["default"](hero_fileUpload, hero_previewImageSrc, hero_imageElement);
hero_fileOperation.handleUpload();

// itinerary image(sessionあり)
var tempContainers = document.querySelectorAll(".temp_container");
tempContainers.forEach(function (container, index) {
  var itinerary_fileUpload = document.getElementById("itinerary_".concat(index));
  var itinerary_previewImageSrc = document.querySelector(".itinerary_preview_src".concat(index));
  var itinerary_imageElement = document.querySelector(".itinerary_image_element".concat(index));
  var itinerary_fileOperation = new _components_fileOperation_FileOperation_js__WEBPACK_IMPORTED_MODULE_1__["default"](itinerary_fileUpload, itinerary_previewImageSrc, itinerary_imageElement);
  itinerary_fileOperation.handleUpload();
});
})();

/******/ })()
;