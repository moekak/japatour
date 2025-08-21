/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/filter/FilterByCategory.js":
/*!************************************************************!*\
  !*** ./resources/js/components/filter/FilterByCategory.js ***!
  \************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ FilterByCategory)
/* harmony export */ });
/* harmony import */ var _FilterInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FilterInterface.js */ "./resources/js/components/filter/FilterInterface.js");
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

var FilterByCategory = /*#__PURE__*/function (_FilterInterface) {
  function FilterByCategory(categories) {
    var _this;
    _classCallCheck(this, FilterByCategory);
    _this = _callSuper(this, FilterByCategory);
    _this.categories = categories;
    return _this;
  }
  _inherits(FilterByCategory, _FilterInterface);
  return _createClass(FilterByCategory, [{
    key: "filterByCategory",
    value: function filterByCategory() {
      var _this2 = this;
      this.allBlogs.forEach(function (blog) {
        blog.style.display = _this2.categories.some(function (category) {
          return blog.dataset.category.includes(category);
        }) ? "block" : "none";
        blog.style.animation = _this2.categories.some(function (category) {
          return blog.dataset.category.includes(category);
        }) ? "'fadeIn 0.5s ease-in'" : "";
      });
      this.getCurrentArticleCards();
    }
  }]);
}(_FilterInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/filter/FilterByTag.js":
/*!*******************************************************!*\
  !*** ./resources/js/components/filter/FilterByTag.js ***!
  \*******************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ FilterByTag)
/* harmony export */ });
/* harmony import */ var _FilterInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FilterInterface.js */ "./resources/js/components/filter/FilterInterface.js");
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

var FilterByTag = /*#__PURE__*/function (_FilterInterface) {
  function FilterByTag(tags) {
    var _this;
    _classCallCheck(this, FilterByTag);
    _this = _callSuper(this, FilterByTag);
    _this.tags = tags;
    return _this;
  }
  _inherits(FilterByTag, _FilterInterface);
  return _createClass(FilterByTag, [{
    key: "filterByTag",
    value: function filterByTag() {
      var _this2 = this;
      this.allBlogs.forEach(function (blog) {
        blog.style.display = _this2.tags.some(function (tag) {
          return blog.dataset.tag.includes(tag);
        }) ? "block" : "none";
      });
      this.getCurrentArticleCards();
    }
  }]);
}(_FilterInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/filter/FilterInterface.js":
/*!***********************************************************!*\
  !*** ./resources/js/components/filter/FilterInterface.js ***!
  \***********************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ FilterInterface)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var FilterInterface = /*#__PURE__*/function () {
  function FilterInterface() {
    _classCallCheck(this, FilterInterface);
    this.allBlogs = Array.from(document.querySelectorAll(".article-card")).filter(function (article) {
      return article.style.display !== "none";
    });
    console.log(Array.from(this.allBlogs));
  }
  return _createClass(FilterInterface, [{
    key: "getCurrentArticleCards",
    value: function getCurrentArticleCards() {
      this.allBlogs = document.querySelectorAll(".article-card");
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
/*!*********************************************!*\
  !*** ./resources/js/pages/blog/blog_all.js ***!
  \*********************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_filter_FilterByCategory_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../components/filter/FilterByCategory.js */ "./resources/js/components/filter/FilterByCategory.js");
/* harmony import */ var _components_filter_FilterByTag_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../components/filter/FilterByTag.js */ "./resources/js/components/filter/FilterByTag.js");


var categoriesInputs = document.querySelectorAll(".js_category");
var tagButtons = document.querySelectorAll(".tag-filter");
categoriesInputs.forEach(function (input) {
  input.addEventListener("change", function () {
    // 選択したカテゴリー
    var selectedCategories = Array.from(categoriesInputs).reduce(function (acc, current) {
      current.checked && acc.push(current.value);
      return acc;
    }, []);
    var filterByCategoryInstance = new _components_filter_FilterByCategory_js__WEBPACK_IMPORTED_MODULE_0__["default"](selectedCategories);
    filterByCategoryInstance.filterByCategory();
  });
});
var tags = [];
tagButtons.forEach(function (button) {
  var count = 0;
  button.addEventListener("click", function (e) {
    count++;
    if (count % 2 === 0) {
      tags = tags.filter(function (tag) {
        return tag !== e.currentTarget.dataset.tag;
      });
    } else {
      tags.push(e.currentTarget.dataset.tag);
    }
    var filterByCategoryInstance = new _components_filter_FilterByTag_js__WEBPACK_IMPORTED_MODULE_1__["default"](tags);
    filterByCategoryInstance.filterByTag();
  });
});
})();

/******/ })()
;