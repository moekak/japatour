/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/filter/FilterTour.js":
/*!******************************************************!*\
  !*** ./resources/js/components/filter/FilterTour.js ***!
  \******************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ FilterTour)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var FilterTour = /*#__PURE__*/function () {
  function FilterTour() {
    _classCallCheck(this, FilterTour);
    this.tours = document.querySelectorAll('.tour-card[style*="display: block"]');
    this.categoryId = null;
    this.rating = null;
    this.destinationFilter = document.getElementById("destination-filter");
    this.ratingFilters = document.querySelectorAll(".rating-filter");
    this.applyFilter = document.getElementById("apply-filters");
    this.initializeEvents();
  }
  return _createClass(FilterTour, [{
    key: "initializeEvents",
    value: function initializeEvents() {
      var _this = this;
      this.destinationFilter.addEventListener("change", function (e) {
        _this.categoryId = e.currentTarget.value;
      });
      this.ratingFilters.forEach(function (rating) {
        rating.addEventListener("change", function (e) {
          _this.rating = e.currentTarget.value;
        });
      });
      this.applyFilter.addEventListener("click", function () {
        _this.filterByDestination();
        // this.filterByRating()
      });
    }
  }, {
    key: "filterByDestination",
    value: function filterByDestination() {
      var _this2 = this;
      var tours = document.querySelectorAll('.tour-card[style*="display: block"]');
      tours.forEach(function (tour) {
        // 目的地フィルター
        var destinationMatch = !_this2.categoryId || tour.dataset.destination === _this2.categoryId;

        // 評価フィルター（空文字列の場合は全て表示）
        var ratingMatch = !_this2.rating || Number(tour.dataset.rating) >= Number(_this2.rating);
        if (destinationMatch && ratingMatch) {
          tour.style.display = 'block';
          tour.style.animation = 'fadeIn 0.5s ease-in-out';
        } else {
          tour.style.display = 'none';
          tour.style.animation = '';
        }
      });
    }
  }, {
    key: "filterByRating",
    value: function filterByRating() {
      var _this3 = this;
      if (this.rating == null) return;
      var tours = document.querySelectorAll('.tour-card[style*="display: block"]');
      tours.forEach(function (tour) {
        if (Number(tour.dataset.rating) >= Number(_this3.rating)) {
          tour.style.display = 'block';
          tour.style.animation = 'fadeIn 0.5s ease-in';
        } else {
          tour.style.display = 'none';
        }
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
/*!****************************************!*\
  !*** ./resources/js/pages/tour_all.js ***!
  \****************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_filter_FilterTour_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/filter/FilterTour.js */ "./resources/js/components/filter/FilterTour.js");

var advancedFilter = document.getElementById("advanced-filter-toggle");
var advancedPanel = document.getElementById("advanced-panel");
var destinationFilter = document.getElementById("destination-filter");
var clickCount = 0;
advancedFilter.addEventListener("click", function (e) {
  clickCount++;
  if (clickCount % 2 === 0) {
    advancedPanel.classList.add("hidden");
  } else {
    advancedPanel.classList.remove("hidden");
  }
});
var filterTourInstance = new _components_filter_FilterTour_js__WEBPACK_IMPORTED_MODULE_0__["default"]();

// destinationFilter.addEventListener("change", (e)=>{
//       const categoryId = e.currentTarget.value
//       const filterTourInstance = new FilterTour(categoryId)
//       filterTourInstance.filterByDestination()
//       filterTourInstance.filterByRating()

// })
})();

/******/ })()
;