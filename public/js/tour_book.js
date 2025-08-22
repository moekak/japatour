/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/tourBook/BookingCalculator.js":
/*!***************************************************************!*\
  !*** ./resources/js/components/tourBook/BookingCalculator.js ***!
  \***************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ BookingCalculator)
/* harmony export */ });
/* harmony import */ var _calculator_AdditionalServiceStrategy_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./calculator/AdditionalServiceStrategy.js */ "./resources/js/components/tourBook/calculator/AdditionalServiceStrategy.js");
/* harmony import */ var _calculator_DiscountStrategy_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./calculator/DiscountStrategy.js */ "./resources/js/components/tourBook/calculator/DiscountStrategy.js");
/* harmony import */ var _calculator_StandardPriceStrategy_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./calculator/StandardPriceStrategy.js */ "./resources/js/components/tourBook/calculator/StandardPriceStrategy.js");
/* harmony import */ var _observer_SummaryDisplayObserver_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./observer/SummaryDisplayObserver.js */ "./resources/js/components/tourBook/observer/SummaryDisplayObserver.js");
/* harmony import */ var _observer_TourDataInputObserver_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./observer/TourDataInputObserver.js */ "./resources/js/components/tourBook/observer/TourDataInputObserver.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }



// import TourDataInputObserver from "./observer/TourDataInputObserver.js";
// import TourDataSaveObserver from "./observer/TourDataSaveObserver.js";


// import TourDataInputObserver from "./observer/TourDataInputObserver.js";
var BookingCalculator = /*#__PURE__*/function () {
  function BookingCalculator() {
    _classCallCheck(this, BookingCalculator);
    this.baseAdultPrice = null; // 基本大人パッケージ料金
    this.baseChildPrice = null; // 基本子供パッケージ料金
    this.selectedTourOption = null; //選択されたTour Itinerary
    // オブザーバーリスト
    this.observers = [];
    // // DOM要素の取得
    this.initializeElements();
    // // オブザーバーの登録
    this.registerDisplayObservers();
    this.registerSaveObservers();
    this.registerInputObservers();
    this.initializeEvents();
    // // 初期計算と通知
    this.calculateAndNotify();
  }
  // DOM要素の初期化
  return _createClass(BookingCalculator, [{
    key: "initializeElements",
    value: function initializeElements() {
      // フォーム要素
      this.elements = {
        // ツアー選択
        tourOption: document.querySelectorAll('.js_tour_option'),
        // 旅行者数
        adultNumber: document.getElementById('adults-count'),
        childNumber: document.getElementById('children-count'),
        // 旅行者変更ボタン
        incrementAdultBtn: document.getElementById("js_increment-adult"),
        decrementAdultBtn: document.getElementById("js_decrement-adult"),
        incrementChildBtn: document.getElementById("js_increment-child"),
        decrementChildBtn: document.getElementById("js_decrement-child"),
        // 日付関連
        dateInput: document.getElementById('date-input')
      };
    }

    // 表示オブザーバーの登録
  }, {
    key: "registerDisplayObservers",
    value: function registerDisplayObservers() {
      // サマリー表示のオブザーバーを登録
      this.registerObserver(new _observer_SummaryDisplayObserver_js__WEBPACK_IMPORTED_MODULE_3__["default"]({
        total: document.getElementById('grand-total'),
        adultNumber: document.getElementById('summary-adults'),
        childNumber: document.getElementById('summary-children'),
        adultPrice: document.getElementById('adult-total'),
        childPrice: document.getElementById('children-total'),
        summaryContent: document.getElementById("summary-content"),
        priceBrakdown: document.getElementById("price-breakdown"),
        itineraryTitle: document.getElementById("js_itinerary_title"),
        date: document.getElementById("js_tour-date")
      }));
    }

    // 保存オブザーバーの登録
  }, {
    key: "registerSaveObservers",
    value: function registerSaveObservers() {
      this.registerObserver(new TourDataSaveObserve({
        itineraryId: document.getElementById("js_itinerary_id"),
        adultNumber: document.getElementById("js_adult_number"),
        adultPrice: document.getElementById("js_adult_price"),
        childNumber: document.getElementById("js_child_number"),
        childPrice: document.getElementById("js_child_price"),
        totalPrice: document.getElementById("js_total_price"),
        date: document.getElementById("js_date")
      }));
    }
  }, {
    key: "registerInputObservers",
    value: function registerInputObservers() {
      this.registerObserver(new _observer_TourDataInputObserver_js__WEBPACK_IMPORTED_MODULE_4__["default"]());
    }

    // オブザーバー登録メソッド
  }, {
    key: "registerObserver",
    value: function registerObserver(observer) {
      this.observers.push(observer);
    }

    // オブザーバーへの通知メソッド
  }, {
    key: "notifyObservers",
    value: function notifyObservers(TourData) {
      this.observers.forEach(function (observer) {
        observer.update(TourData);
      });
    }

    // イベントリスナーの初期化
  }, {
    key: "initializeEvents",
    value: function initializeEvents() {
      var _this = this;
      // ツアー選択
      if (this.elements.tourOption) {
        this.elements.tourOption.forEach(function (option) {
          option.addEventListener('click', function (e) {
            var selectedOption = e.currentTarget;
            _this.selectedTourOption = selectedOption;
            _this.baseAdultPrice = option.dataset.adultPrice; // 基本大人パッケージ料金
            _this.baseChildPrice = option.dataset.childPrice;

            // スタイル変更
            _this.elements.tourOption.forEach(function (opt) {
              opt.classList.remove('border-[#e92929]', 'bg-red-50');
              opt.classList.add('border-[#e7d0d0]');
            });

            // スタイル変更
            selectedOption.classList.remove('border-[#e7d0d0]');
            selectedOption.classList.add('border-[#e92929]', 'bg-red-50');
            _this.calculateAndNotify();
          });
        });
      }

      // 大人人数増加
      if (this.elements.incrementAdultBtn) {
        this.elements.incrementAdultBtn.addEventListener("click", function () {
          _this.elements.adultNumber.innerHTML = parseInt(_this.elements.adultNumber.innerHTML) + 1;
          _this.calculateAndNotify();
        });
      }

      // 大人人数減少
      if (this.elements.decrementAdultBtn) {
        this.elements.decrementAdultBtn.addEventListener("click", function () {
          _this.elements.adultNumber.innerHTML = parseInt(_this.elements.adultNumber.innerHTML) - 1;
          _this.calculateAndNotify();
        });
      }

      // 子供人数増加
      if (this.elements.incrementChildBtn) {
        this.elements.incrementChildBtn.addEventListener("click", function () {
          _this.elements.childNumber.innerHTML = parseInt(_this.elements.childNumber.innerHTML) + 1;
          _this.calculateAndNotify();
        });
      }

      // 子供人数減少
      if (this.elements.decrementChildBtn) {
        this.elements.decrementChildBtn.addEventListener("click", function () {
          _this.elements.childNumber.innerHTML = parseInt(_this.elements.childNumber.innerHTML) - 1;
          _this.calculateAndNotify();
        });
      }

      // 大人旅行者数変更イベント
      if (this.elements.adultNumber) {
        this.elements.adultNumber.addEventListener('change', function () {
          console.log("大人料金変更");
          _this.calculateAndNotify();
        });
      }

      // 子供旅行者数変更イベント
      if (this.elements.childNumber) {
        this.elements.childNumber.addEventListener('change', function () {
          _this.calculateAndNotify();
        });
      }

      // 日付選択イベント
      if (this.elements.dateInput) {
        this.elements.dateInput.addEventListener('change', function (e) {
          console.log("日付" + e.target.value);
          _this.calculateAndNotify();
        });
      }
    }

    // カンマを取り除いて数値に変換する関数
  }, {
    key: "parseNumericValue",
    value: function parseNumericValue(value) {
      if (typeof value === 'string') {
        return Number(value.replace(/,/g, ''));
      }
      return Number(value) || 0;
    }

    // 計算して通知するメソッド
  }, {
    key: "calculateAndNotify",
    value: function calculateAndNotify() {
      var _this$elements$adultN, _this$elements$childN, _this$selectedTourOpt, _this$selectedTourOpt2, _this$elements$dateIn;
      var adultNumber = parseInt((_this$elements$adultN = this.elements.adultNumber) === null || _this$elements$adultN === void 0 ? void 0 : _this$elements$adultN.innerHTML); //大人の人数
      var childNumber = parseInt((_this$elements$childN = this.elements.childNumber) === null || _this$elements$childN === void 0 ? void 0 : _this$elements$childN.innerHTML); //子供の人数
      var itineraryTitle = ((_this$selectedTourOpt = this.selectedTourOption) === null || _this$selectedTourOpt === void 0 ? void 0 : _this$selectedTourOpt.querySelector(".itinerary-title").innerHTML) || ""; //itineraryのタイトル
      var itineraryId = ((_this$selectedTourOpt2 = this.selectedTourOption) === null || _this$selectedTourOpt2 === void 0 ? void 0 : _this$selectedTourOpt2.querySelector(".itinerary-title").dataset.id) || ""; //itineraryのID

      var selectedDate = ((_this$elements$dateIn = this.elements.dateInput) === null || _this$elements$dateIn === void 0 ? void 0 : _this$elements$dateIn.value) || '';

      // 計算オプション
      var options = {
        adultNumber: adultNumber,
        childNumber: childNumber
      };

      // 戦略パターンを使って計算
      var adultPriceTotal = _calculator_StandardPriceStrategy_js__WEBPACK_IMPORTED_MODULE_2__["default"].calculateAdultPrice(this.baseAdultPrice, options);
      var childPriceTotal = _calculator_StandardPriceStrategy_js__WEBPACK_IMPORTED_MODULE_2__["default"].calculateChildPrice(this.baseChildPrice, options);
      var total = adultPriceTotal + childPriceTotal;
      // const serviceTotal = AdditionalServiceStrategy.calculate(0, options);
      // const grandTotal = packageTotal + serviceTotal;
      // const discount = DiscountStrategy.calculate(basePrice, options)

      // 結果をオブザーバーに通知
      this.notifyObservers({
        total: total,
        adultNumber: adultNumber,
        childNumber: childNumber,
        adultPriceTotal: adultPriceTotal,
        childPriceTotal: childPriceTotal,
        selectedDate: selectedDate,
        itineraryTitle: itineraryTitle,
        itineraryId: itineraryId
      });
    }
  }]);
}();


/***/ }),

/***/ "./resources/js/components/tourBook/calculator/AdditionalServiceStrategy.js":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/tourBook/calculator/AdditionalServiceStrategy.js ***!
  \**********************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ AdditionalServiceStrategy)
/* harmony export */ });
/* harmony import */ var _PriceCalculationStrategy_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PriceCalculationStrategy.js */ "./resources/js/components/tourBook/calculator/PriceCalculationStrategy.js");
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

var AdditionalServiceStrategy = /*#__PURE__*/function (_PriceCalculationStra) {
  function AdditionalServiceStrategy() {
    _classCallCheck(this, AdditionalServiceStrategy);
    return _callSuper(this, AdditionalServiceStrategy, arguments);
  }
  _inherits(AdditionalServiceStrategy, _PriceCalculationStra);
  return _createClass(AdditionalServiceStrategy, null, [{
    key: "calculate",
    value: function calculate(basePrice, options) {
      var additionalCost = 0;
      options.services.forEach(function (service) {
        if (service.checked) {
          additionalCost += Number(service.price);
        }
      });
      return additionalCost;
    }
  }]);
}(_PriceCalculationStrategy_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/tourBook/calculator/DiscountStrategy.js":
/*!*************************************************************************!*\
  !*** ./resources/js/components/tourBook/calculator/DiscountStrategy.js ***!
  \*************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DiscountStrategy)
/* harmony export */ });
/* harmony import */ var _PriceCalculationStrategy_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PriceCalculationStrategy.js */ "./resources/js/components/tourBook/calculator/PriceCalculationStrategy.js");
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

var DiscountStrategy = /*#__PURE__*/function (_PriceCalculationStra) {
  function DiscountStrategy() {
    _classCallCheck(this, DiscountStrategy);
    return _callSuper(this, DiscountStrategy, arguments);
  }
  _inherits(DiscountStrategy, _PriceCalculationStra);
  return _createClass(DiscountStrategy, null, [{
    key: "calculate",
    value: function calculate(basePrice, options) {
      return 0.15 * basePrice * options.travelers;
    }
  }]);
}(_PriceCalculationStrategy_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/tourBook/calculator/PriceCalculationStrategy.js":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/tourBook/calculator/PriceCalculationStrategy.js ***!
  \*********************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ PriceCalculationStrategy)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var PriceCalculationStrategy = /*#__PURE__*/function () {
  function PriceCalculationStrategy() {
    _classCallCheck(this, PriceCalculationStrategy);
  }
  return _createClass(PriceCalculationStrategy, null, [{
    key: "calculate",
    value: function calculate(basePrice, options) {
      throw new Error('This method must be implemented');
    }
  }]);
}();


/***/ }),

/***/ "./resources/js/components/tourBook/calculator/StandardPriceStrategy.js":
/*!******************************************************************************!*\
  !*** ./resources/js/components/tourBook/calculator/StandardPriceStrategy.js ***!
  \******************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ StandardPriceStrategy)
/* harmony export */ });
/* harmony import */ var _DiscountStrategy_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./DiscountStrategy.js */ "./resources/js/components/tourBook/calculator/DiscountStrategy.js");
/* harmony import */ var _PriceCalculationStrategy_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./PriceCalculationStrategy.js */ "./resources/js/components/tourBook/calculator/PriceCalculationStrategy.js");
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


var StandardPriceStrategy = /*#__PURE__*/function (_PriceCalculationStra) {
  function StandardPriceStrategy() {
    _classCallCheck(this, StandardPriceStrategy);
    return _callSuper(this, StandardPriceStrategy, arguments);
  }
  _inherits(StandardPriceStrategy, _PriceCalculationStra);
  return _createClass(StandardPriceStrategy, null, [{
    key: "calculateAdultPrice",
    value: function calculateAdultPrice(adultPrice, options) {
      // if(options.travelers > 1){
      //       return (basePrice * options.travelers) - DiscountStrategy.calculate(basePrice, options)
      // }else{
      //      return basePrice * options.travelers 
      // }

      console.log(options);
      console.log(adultPrice);
      return adultPrice * options.adultNumber;
    }
  }, {
    key: "calculateChildPrice",
    value: function calculateChildPrice(childPrice, options) {
      // if(options.travelers > 1){
      //       return (basePrice * options.travelers) - DiscountStrategy.calculate(basePrice, options)
      // }else{
      //      return basePrice * options.travelers 
      // }

      console.log("子供の料金" + options.childNumber);
      return childPrice * options.childNumber;
    }
  }]);
}(_PriceCalculationStrategy_js__WEBPACK_IMPORTED_MODULE_1__["default"]);


/***/ }),

/***/ "./resources/js/components/tourBook/observer/ObserverInterface.js":
/*!************************************************************************!*\
  !*** ./resources/js/components/tourBook/observer/ObserverInterface.js ***!
  \************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ ObserverInterface)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var ObserverInterface = /*#__PURE__*/function () {
  function ObserverInterface() {
    _classCallCheck(this, ObserverInterface);
  }
  return _createClass(ObserverInterface, [{
    key: "update",
    value: function update(data) {
      throw new Error('This method must be implemented');
    }
  }]);
}();


/***/ }),

/***/ "./resources/js/components/tourBook/observer/SummaryDisplayObserver.js":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/tourBook/observer/SummaryDisplayObserver.js ***!
  \*****************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ SummaryDisplayObserver)
/* harmony export */ });
/* harmony import */ var _ObserverInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ObserverInterface.js */ "./resources/js/components/tourBook/observer/ObserverInterface.js");
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

var SummaryDisplayObserver = /*#__PURE__*/function (_ObserverInterface) {
  function SummaryDisplayObserver(elements) {
    var _this;
    _classCallCheck(this, SummaryDisplayObserver);
    _this = _callSuper(this, SummaryDisplayObserver);
    _this.elements = elements;
    return _this;
  }
  _inherits(SummaryDisplayObserver, _ObserverInterface);
  return _createClass(SummaryDisplayObserver, [{
    key: "update",
    value: function update(TourData) {
      this.elements.total.textContent = "\uFFE5".concat(TourData.total.toLocaleString('ja-JP'));
      this.elements.adultNumber.textContent = "".concat(TourData.adultNumber.toLocaleString('ja-JP'));
      this.elements.childNumber.textContent = "".concat(TourData.childNumber.toLocaleString('ja-JP'));
      this.elements.adultPrice.textContent = "\uFFE5".concat(TourData.adultPriceTotal.toLocaleString('ja-JP'));
      this.elements.childPrice.textContent = "\uFFE5".concat(TourData.childPriceTotal.toLocaleString('ja-JP'));
      this.elements.itineraryTitle.textContent = TourData.itineraryTitle;
      this.elements.date.textContent = TourData.selectedDate;
      this.elements.summaryContent.classList.add("hidden");
      this.elements.priceBrakdown.classList.remove("hidden");
    }
  }]);
}(_ObserverInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


/***/ }),

/***/ "./resources/js/components/tourBook/observer/TourDataInputObserver.js":
/*!****************************************************************************!*\
  !*** ./resources/js/components/tourBook/observer/TourDataInputObserver.js ***!
  \****************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ TourDataInputObserver)
/* harmony export */ });
/* harmony import */ var _ObserverInterface_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ObserverInterface.js */ "./resources/js/components/tourBook/observer/ObserverInterface.js");
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

var TourDataInputObserver = /*#__PURE__*/function (_ObserverInterface) {
  function TourDataInputObserver() {
    var _this;
    _classCallCheck(this, TourDataInputObserver);
    _this = _callSuper(this, TourDataInputObserver);
    _this.nextButton = document.getElementById("continue-to-step-2");
    return _this;
  }
  _inherits(TourDataInputObserver, _ObserverInterface);
  return _createClass(TourDataInputObserver, [{
    key: "update",
    value: function update(tourData) {
      var hasAllData = tourData.itineraryId && tourData.adultNumber > 0 && tourData.total > 0 && tourData.selectedDate;
      this.nextButton.disabled = !hasAllData;
    }
  }]);
}(_ObserverInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


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
  !*** ./resources/js/pages/tour_book.js ***!
  \*****************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_tourBook_BookingCalculator_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/tourBook/BookingCalculator.js */ "./resources/js/components/tourBook/BookingCalculator.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _createForOfIteratorHelper(r, e) { var t = "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (!t) { if (Array.isArray(r) || (t = _unsupportedIterableToArray(r)) || e && r && "number" == typeof r.length) { t && (r = t); var _n = 0, F = function F() {}; return { s: F, n: function n() { return _n >= r.length ? { done: !0 } : { done: !1, value: r[_n++] }; }, e: function e(r) { throw r; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var o, a = !0, u = !1; return { s: function s() { t = t.call(r); }, n: function n() { var r = t.next(); return a = r.done, r; }, e: function e(r) { u = !0, o = r; }, f: function f() { try { a || null == t["return"] || t["return"](); } finally { if (u) throw o; } } }; }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return e; }; var t, e = {}, r = Object.prototype, n = r.hasOwnProperty, o = Object.defineProperty || function (t, e, r) { t[e] = r.value; }, i = "function" == typeof Symbol ? Symbol : {}, a = i.iterator || "@@iterator", c = i.asyncIterator || "@@asyncIterator", u = i.toStringTag || "@@toStringTag"; function define(t, e, r) { return Object.defineProperty(t, e, { value: r, enumerable: !0, configurable: !0, writable: !0 }), t[e]; } try { define({}, ""); } catch (t) { define = function define(t, e, r) { return t[e] = r; }; } function wrap(t, e, r, n) { var i = e && e.prototype instanceof Generator ? e : Generator, a = Object.create(i.prototype), c = new Context(n || []); return o(a, "_invoke", { value: makeInvokeMethod(t, r, c) }), a; } function tryCatch(t, e, r) { try { return { type: "normal", arg: t.call(e, r) }; } catch (t) { return { type: "throw", arg: t }; } } e.wrap = wrap; var h = "suspendedStart", l = "suspendedYield", f = "executing", s = "completed", y = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var p = {}; define(p, a, function () { return this; }); var d = Object.getPrototypeOf, v = d && d(d(values([]))); v && v !== r && n.call(v, a) && (p = v); var g = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(p); function defineIteratorMethods(t) { ["next", "throw", "return"].forEach(function (e) { define(t, e, function (t) { return this._invoke(e, t); }); }); } function AsyncIterator(t, e) { function invoke(r, o, i, a) { var c = tryCatch(t[r], t, o); if ("throw" !== c.type) { var u = c.arg, h = u.value; return h && "object" == _typeof(h) && n.call(h, "__await") ? e.resolve(h.__await).then(function (t) { invoke("next", t, i, a); }, function (t) { invoke("throw", t, i, a); }) : e.resolve(h).then(function (t) { u.value = t, i(u); }, function (t) { return invoke("throw", t, i, a); }); } a(c.arg); } var r; o(this, "_invoke", { value: function value(t, n) { function callInvokeWithMethodAndArg() { return new e(function (e, r) { invoke(t, n, e, r); }); } return r = r ? r.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(e, r, n) { var o = h; return function (i, a) { if (o === f) throw Error("Generator is already running"); if (o === s) { if ("throw" === i) throw a; return { value: t, done: !0 }; } for (n.method = i, n.arg = a;;) { var c = n.delegate; if (c) { var u = maybeInvokeDelegate(c, n); if (u) { if (u === y) continue; return u; } } if ("next" === n.method) n.sent = n._sent = n.arg;else if ("throw" === n.method) { if (o === h) throw o = s, n.arg; n.dispatchException(n.arg); } else "return" === n.method && n.abrupt("return", n.arg); o = f; var p = tryCatch(e, r, n); if ("normal" === p.type) { if (o = n.done ? s : l, p.arg === y) continue; return { value: p.arg, done: n.done }; } "throw" === p.type && (o = s, n.method = "throw", n.arg = p.arg); } }; } function maybeInvokeDelegate(e, r) { var n = r.method, o = e.iterator[n]; if (o === t) return r.delegate = null, "throw" === n && e.iterator["return"] && (r.method = "return", r.arg = t, maybeInvokeDelegate(e, r), "throw" === r.method) || "return" !== n && (r.method = "throw", r.arg = new TypeError("The iterator does not provide a '" + n + "' method")), y; var i = tryCatch(o, e.iterator, r.arg); if ("throw" === i.type) return r.method = "throw", r.arg = i.arg, r.delegate = null, y; var a = i.arg; return a ? a.done ? (r[e.resultName] = a.value, r.next = e.nextLoc, "return" !== r.method && (r.method = "next", r.arg = t), r.delegate = null, y) : a : (r.method = "throw", r.arg = new TypeError("iterator result is not an object"), r.delegate = null, y); } function pushTryEntry(t) { var e = { tryLoc: t[0] }; 1 in t && (e.catchLoc = t[1]), 2 in t && (e.finallyLoc = t[2], e.afterLoc = t[3]), this.tryEntries.push(e); } function resetTryEntry(t) { var e = t.completion || {}; e.type = "normal", delete e.arg, t.completion = e; } function Context(t) { this.tryEntries = [{ tryLoc: "root" }], t.forEach(pushTryEntry, this), this.reset(!0); } function values(e) { if (e || "" === e) { var r = e[a]; if (r) return r.call(e); if ("function" == typeof e.next) return e; if (!isNaN(e.length)) { var o = -1, i = function next() { for (; ++o < e.length;) if (n.call(e, o)) return next.value = e[o], next.done = !1, next; return next.value = t, next.done = !0, next; }; return i.next = i; } } throw new TypeError(_typeof(e) + " is not iterable"); } return GeneratorFunction.prototype = GeneratorFunctionPrototype, o(g, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), o(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, u, "GeneratorFunction"), e.isGeneratorFunction = function (t) { var e = "function" == typeof t && t.constructor; return !!e && (e === GeneratorFunction || "GeneratorFunction" === (e.displayName || e.name)); }, e.mark = function (t) { return Object.setPrototypeOf ? Object.setPrototypeOf(t, GeneratorFunctionPrototype) : (t.__proto__ = GeneratorFunctionPrototype, define(t, u, "GeneratorFunction")), t.prototype = Object.create(g), t; }, e.awrap = function (t) { return { __await: t }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, c, function () { return this; }), e.AsyncIterator = AsyncIterator, e.async = function (t, r, n, o, i) { void 0 === i && (i = Promise); var a = new AsyncIterator(wrap(t, r, n, o), i); return e.isGeneratorFunction(r) ? a : a.next().then(function (t) { return t.done ? t.value : a.next(); }); }, defineIteratorMethods(g), define(g, u, "Generator"), define(g, a, function () { return this; }), define(g, "toString", function () { return "[object Generator]"; }), e.keys = function (t) { var e = Object(t), r = []; for (var n in e) r.push(n); return r.reverse(), function next() { for (; r.length;) { var t = r.pop(); if (t in e) return next.value = t, next.done = !1, next; } return next.done = !0, next; }; }, e.values = values, Context.prototype = { constructor: Context, reset: function reset(e) { if (this.prev = 0, this.next = 0, this.sent = this._sent = t, this.done = !1, this.delegate = null, this.method = "next", this.arg = t, this.tryEntries.forEach(resetTryEntry), !e) for (var r in this) "t" === r.charAt(0) && n.call(this, r) && !isNaN(+r.slice(1)) && (this[r] = t); }, stop: function stop() { this.done = !0; var t = this.tryEntries[0].completion; if ("throw" === t.type) throw t.arg; return this.rval; }, dispatchException: function dispatchException(e) { if (this.done) throw e; var r = this; function handle(n, o) { return a.type = "throw", a.arg = e, r.next = n, o && (r.method = "next", r.arg = t), !!o; } for (var o = this.tryEntries.length - 1; o >= 0; --o) { var i = this.tryEntries[o], a = i.completion; if ("root" === i.tryLoc) return handle("end"); if (i.tryLoc <= this.prev) { var c = n.call(i, "catchLoc"), u = n.call(i, "finallyLoc"); if (c && u) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } else if (c) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); } else { if (!u) throw Error("try statement without catch or finally"); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } } } }, abrupt: function abrupt(t, e) { for (var r = this.tryEntries.length - 1; r >= 0; --r) { var o = this.tryEntries[r]; if (o.tryLoc <= this.prev && n.call(o, "finallyLoc") && this.prev < o.finallyLoc) { var i = o; break; } } i && ("break" === t || "continue" === t) && i.tryLoc <= e && e <= i.finallyLoc && (i = null); var a = i ? i.completion : {}; return a.type = t, a.arg = e, i ? (this.method = "next", this.next = i.finallyLoc, y) : this.complete(a); }, complete: function complete(t, e) { if ("throw" === t.type) throw t.arg; return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && e && (this.next = e), y; }, finish: function finish(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.finallyLoc === t) return this.complete(r.completion, r.afterLoc), resetTryEntry(r), y; } }, "catch": function _catch(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.tryLoc === t) { var n = r.completion; if ("throw" === n.type) { var o = n.arg; resetTryEntry(r); } return o; } } throw Error("illegal catch attempt"); }, delegateYield: function delegateYield(e, r, n) { return this.delegate = { iterator: values(e), resultName: r, nextLoc: n }, "next" === this.method && (this.arg = t), y; } }, e; }
function asyncGeneratorStep(n, t, e, r, o, a, c) { try { var i = n[a](c), u = i.value; } catch (n) { return void e(n); } i.done ? t(u) : Promise.resolve(u).then(r, o); }
function _asyncToGenerator(n) { return function () { var t = this, e = arguments; return new Promise(function (r, o) { var a = n.apply(t, e); function _next(n) { asyncGeneratorStep(a, r, o, _next, _throw, "next", n); } function _throw(n) { asyncGeneratorStep(a, r, o, _next, _throw, "throw", n); } _next(void 0); }); }; }

new _components_tourBook_BookingCalculator_js__WEBPACK_IMPORTED_MODULE_0__["default"]();

// Stripe初期化
var stripe = Stripe('pk_test_51RFVY7IDvRtJolMEYyiMXucEU0xwOVn7wGAUaBMUXpUBtjodvtIwsBP2exG5QyHmaIumlG2QQv0ecfi0u1nbKOaM00UFjt2Xc5');
var paymentElement;
var elements; // グローバル変数として宣言

// PaymentIntent作成関数
function createPaymentIntent() {
  return _createPaymentIntent.apply(this, arguments);
} // Payment Element初期化関数
function _createPaymentIntent() {
  _createPaymentIntent = _asyncToGenerator(/*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
    var formData, checkBoxes, additionalServices, date, selectedItineary, itineary, totalCost, formDataObj;
    return _regeneratorRuntime().wrap(function _callee2$(_context2) {
      while (1) switch (_context2.prev = _context2.next) {
        case 0:
          formData = new FormData(document.getElementById("booking-form")); // 追加サービスをformDataに追加する
          checkBoxes = Array.from(document.querySelectorAll(".js_service_checkbox")).filter(function (checkbox) {
            return checkbox.checked;
          });
          additionalServices = checkBoxes.map(function (checkbox) {
            return {
              id: checkbox.id,
              price: checkbox.dataset.price
            };
          });
          formData.append("additional_services", JSON.stringify(additionalServices));

          // ツアー日をformDataに追加する
          date = document.getElementById("date_range_start");
          formData.append("tour_date", date.value);

          // itinearyを選択されたものをformDataに追加する
          selectedItineary = Array.from(document.querySelectorAll(".option-card")).filter(function (card) {
            return card.classList.contains("selected");
          });
          itineary = selectedItineary.map(function (itineary) {
            return {
              title: itineary.dataset.itinerary,
              price: itineary.dataset.price
            };
          });
          formData.append("itineary", JSON.stringify(itineary));

          // 合計金額をformDataに追加する
          totalCost = document.querySelector(".total-price").innerHTML;
          formData.append("total", totalCost);
          formDataObj = Object.fromEntries(formData.entries());
          console.log("FormData contents:", formDataObj);
          return _context2.abrupt("return", fetch('/api/create-payment-intent', {
            method: 'POST',
            body: formData
          }));
        case 14:
        case "end":
          return _context2.stop();
      }
    }, _callee2);
  }));
  return _createPaymentIntent.apply(this, arguments);
}
function initializePaymentElement() {
  return _initializePaymentElement.apply(this, arguments);
} // ステップ管理
function _initializePaymentElement() {
  _initializePaymentElement = _asyncToGenerator(/*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
    var _document$getElementB, _document$getElementB2, response, data, paymentRequest, result, displayError;
    return _regeneratorRuntime().wrap(function _callee3$(_context3) {
      while (1) switch (_context3.prev = _context3.next) {
        case 0:
          _context3.prev = 0;
          _context3.next = 3;
          return createPaymentIntent();
        case 3:
          response = _context3.sent;
          _context3.next = 6;
          return response.json();
        case 6:
          data = _context3.sent;
          console.log(data);
          if (response.ok) {
            _context3.next = 10;
            break;
          }
          throw new Error(data.error || 'Payment Intent creation failed');
        case 10:
          // clientSecretが取得できたらElementsを初期化
          elements = stripe.elements({
            clientSecret: data.clientSecret,
            // ここが重要：clientSecretを必ず指定
            locale: 'en',
            appearance: {
              theme: 'stripe'
              // その他の外観設定
            },
            paymentMethods: {
              applePay: 'always',
              googlePay: 'always',
              link: 'always'
            }
          });

          // デバッグ：Payment Request の可用性を確認
          paymentRequest = stripe.paymentRequest({
            country: 'US',
            currency: 'usd',
            total: {
              label: 'Tour Booking',
              amount: 259800
            },
            requestPayerName: true,
            requestPayerEmail: true
          });
          _context3.next = 14;
          return paymentRequest.canMakePayment();
        case 14:
          result = _context3.sent;
          // Payment Elementを作成
          paymentElement = elements.create('payment', {
            layout: 'tabs',
            defaultValues: {
              billingDetails: {
                name: ((_document$getElementB = document.getElementById('customer-name')) === null || _document$getElementB === void 0 ? void 0 : _document$getElementB.value) || '',
                email: ((_document$getElementB2 = document.getElementById('customer-email')) === null || _document$getElementB2 === void 0 ? void 0 : _document$getElementB2.value) || ''
              }
            }
          });

          // Payment Elementをマウント
          paymentElement.mount('#payment-element');

          // デバッグ：Payment Elementに何が表示されているかを確認
          paymentElement.on('ready', function () {
            console.log('Payment Element is ready');
          });

          // エラーハンドリング
          paymentElement.on('change', function (event) {
            console.log('Payment Element changed:', event);
            var displayError = document.getElementById('card-errors');
            if (event.error && displayError) {
              displayError.textContent = event.error.message;
            } else if (displayError) {
              displayError.textContent = '';
            }
          });
          _context3.next = 26;
          break;
        case 21:
          _context3.prev = 21;
          _context3.t0 = _context3["catch"](0);
          console.error('Error:', _context3.t0);
          displayError = document.getElementById('card-errors');
          if (displayError) {
            displayError.textContent = 'Failed to initialize payment. Please try again.';
          }
        case 26:
        case "end":
          return _context3.stop();
      }
    }, _callee3, null, [[0, 21]]);
  }));
  return _initializePaymentElement.apply(this, arguments);
}
var currentStep = 1;
function updateProgress(step) {
  var progressBar = document.querySelector('.progress-bar');
  var progressSteps = document.querySelectorAll('.progress-step');

  // Progress bar update
  var percent = (step - 1) / (progressSteps.length - 1) * 100;
  progressBar.style.width = "".concat(percent, "%");

  // Step status update
  progressSteps.forEach(function (stepEl, idx) {
    var stepNum = idx + 1;
    stepEl.classList.remove('active', 'completed');
    if (stepNum < step) {
      stepEl.classList.add('completed');
    } else if (stepNum === step) {
      stepEl.classList.add('active');
    }
  });
}
var showStep = function showStep(step) {
  var formSections = document.querySelectorAll('.form-section');
  formSections.forEach(function (section, idx) {
    section.classList.remove('active');
    if (idx + 1 === step) {
      section.classList.add('active');
    }
  });
  updateProgress(step);
  currentStep = step;

  // Step 3に移動したときにPayment Elementを初期化（まだ初期化されていない場合のみ）
  if (step === 3 && !paymentElement) {
    initializePaymentElement();
  }
};

// Next/Previous button handlers
document.querySelectorAll('.next-step').forEach(function (button) {
  button.addEventListener('click', function () {
    if (currentStep === 1 && validator() == false) {
      console.log("aaaaaa");
      return;
    }
    if (currentStep === 2 && validatorTourOptions() === false) {
      console.log("vvvv");
      return;
    }
    if (currentStep < 3) {
      showStep(currentStep + 1);
    }
  });
});
document.querySelectorAll('.prev-step').forEach(function (button) {
  button.addEventListener('click', function () {
    if (currentStep > 1) {
      showStep(currentStep - 1);
    }
  });
});

// 決済処理
document.addEventListener('DOMContentLoaded', function () {
  var submitButton = document.getElementById('submit-payment');
  if (submitButton) {
    submitButton.addEventListener('click', /*#__PURE__*/function () {
      var _ref = _asyncToGenerator(/*#__PURE__*/_regeneratorRuntime().mark(function _callee(e) {
        var button, _yield$stripe$confirm, error, displayError, _displayError;
        return _regeneratorRuntime().wrap(function _callee$(_context) {
          while (1) switch (_context.prev = _context.next) {
            case 0:
              e.preventDefault();
              button = e.target;
              button.disabled = true;
              button.classList.add('loading');
              _context.prev = 4;
              if (!(!paymentElement || !elements)) {
                _context.next = 7;
                break;
              }
              throw new Error('Payment Element not initialized');
            case 7:
              _context.next = 9;
              return stripe.confirmPayment({
                elements: elements,
                // elementsオブジェクトを渡す
                redirect: 'if_required',
                confirmParams: {
                  return_url: window.location.origin + '/thank'
                }
              });
            case 9:
              _yield$stripe$confirm = _context.sent;
              error = _yield$stripe$confirm.error;
              if (error) {
                displayError = document.getElementById('card-errors');
                if (displayError) {
                  displayError.textContent = error.message;
                }
              } else {
                // 成功処理
                window.location.href = '/thank';
              }
              _context.next = 19;
              break;
            case 14:
              _context.prev = 14;
              _context.t0 = _context["catch"](4);
              console.error('Error:', _context.t0);
              _displayError = document.getElementById('card-errors');
              if (_displayError) {
                _displayError.textContent = _context.t0.message || 'An unexpected error occurred.';
              }
            case 19:
              _context.prev = 19;
              button.disabled = false;
              button.classList.remove('loading');
              return _context.finish(19);
            case 23:
            case "end":
              return _context.stop();
          }
        }, _callee, null, [[4, 14, 19, 23]]);
      }));
      return function (_x) {
        return _ref.apply(this, arguments);
      };
    }());
  }
});

// 関数
var validator = function validator() {
  var inputs = document.querySelectorAll(".input-required");
  var selects = document.querySelectorAll(".select-required");
  var hasAllValue = true;
  var _iterator = _createForOfIteratorHelper(inputs),
    _step;
  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var input = _step.value;
      if (input.value == 0 || input.value === "") {
        hasAllValue = false;
        input.classList.add("error");
        input.closest(".form-group").querySelector(".field-error").classList.remove("hidden");
      } else {
        input.classList.remove("error");
        input.closest(".form-group").querySelector(".field-error").classList.add("hidden");
      }
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
  var _iterator2 = _createForOfIteratorHelper(selects),
    _step2;
  try {
    for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
      var select = _step2.value;
      if (select.value === "" || select.selectedIndex === 0) {
        hasAllValue = false;
        select.classList.add("error");
        select.closest(".form-group").querySelector(".field-error").classList.remove("hidden");
      } else {
        select.classList.remove("error");
        select.closest(".form-group").querySelector(".field-error").classList.add("hidden");
      }
    }
  } catch (err) {
    _iterator2.e(err);
  } finally {
    _iterator2.f();
  }
  return hasAllValue;
};
var validatorTourOptions = function validatorTourOptions() {
  var date = document.getElementById("date_range_start");
  var itineraryOptions = document.querySelectorAll(".option-card");
  var hasdate = true;
  var hasItinerary = false;
  if (date.value.length == 0 || date.value === "") {
    hasdate = false;
    date.closest(".form-group").querySelector(".form-input").classList.add("error");
    date.closest(".form-group").querySelector(".field-error").classList.remove("hidden");
  }
  itineraryOptions.forEach(function (option) {
    if (option.classList.contains("selected")) {
      hasItinerary = true;
    }
  });
  if (!hasItinerary) {
    document.querySelector(".itineary_option_error").classList.remove("hidden");
  }
  return hasdate && hasItinerary;
};
})();

/******/ })()
;