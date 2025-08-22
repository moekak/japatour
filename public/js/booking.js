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
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }




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
        priceBrakdown: document.getElementById("price-breakdown")

        // packageTotal: document.getElementById('package-total'),
        // serviceTotal: document.querySelector('.additional-service-price'),
        // grandTotal: document.querySelector('.total-price'),
        // paymentTotal: document.getElementById('payment-total'),
        // depositAmount: document.getElementById('deposit-amount'),
        // touristNumber: document.getElementById('summary-travelers'),
        // discountTotal : document.querySelector(".discount-value"),
        // discountSection : document.querySelector(".discount-section"),
        // totalSaving : document.querySelector(".total-savings"),
      }));
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
    value: function notifyObservers(priceData) {
      this.observers.forEach(function (observer) {
        observer.update(priceData);
      });
    }

    // イベントリスナーの初期化
  }, {
    key: "initializeEvents",
    value: function initializeEvents() {
      var _this = this;
      // 追加サービスのチェックボックス変更イベント
      if (this.elements.tourOption) {
        this.elements.tourOption.forEach(function (option) {
          option.addEventListener('click', function (e) {
            _this.selectedTourOption = option;
            _this.baseAdultPrice = option.dataset.adultPrice; // 基本大人パッケージ料金
            _this.baseChildPrice = option.dataset.childPrice;
            _this.calculateAndNotify();
          });
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
        this.elements.dateInput.addEventListener('change', function () {
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
      var _this$elements$adultN, _this$elements$childN, _this$elements$dateIn;
      var adultNumber = parseInt((_this$elements$adultN = this.elements.adultNumber) === null || _this$elements$adultN === void 0 ? void 0 : _this$elements$adultN.innerHTML);
      var childNumber = parseInt((_this$elements$childN = this.elements.childNumber) === null || _this$elements$childN === void 0 ? void 0 : _this$elements$childN.innerHTML);
      // // サービスデータの収集
      // const services = Array.from(this.elements.serviceCheckboxes || []).map(checkbox => ({
      //       checked: checkbox.checked,
      //       price: parseInt(checkbox.dataset.price) || 0
      // }));

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
        // packageTotal,
        // serviceTotal,
        total: total,
        // basePrice,
        // travelers,
        adultNumber: adultNumber,
        childNumber: childNumber,
        adultPriceTotal: adultPriceTotal,
        childPriceTotal: childPriceTotal,
        // packageName: selectedPackageName,
        selectedDate: selectedDate
        // discount,
        // basePrice,
        // travelersNumber : options.travelers
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

/***/ "./resources/js/components/tourBook/observer/PriceObserver.js":
/*!********************************************************************!*\
  !*** ./resources/js/components/tourBook/observer/PriceObserver.js ***!
  \********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ PriceObserver)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var PriceObserver = /*#__PURE__*/function () {
  function PriceObserver() {
    _classCallCheck(this, PriceObserver);
  }
  return _createClass(PriceObserver, [{
    key: "update",
    value: function update(priceData) {
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
/* harmony import */ var _PriceObserver_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PriceObserver.js */ "./resources/js/components/tourBook/observer/PriceObserver.js");
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

var SummaryDisplayObserver = /*#__PURE__*/function (_PriceObserver) {
  function SummaryDisplayObserver(elements) {
    var _this;
    _classCallCheck(this, SummaryDisplayObserver);
    _this = _callSuper(this, SummaryDisplayObserver);
    _this.elements = elements;
    return _this;
  }
  _inherits(SummaryDisplayObserver, _PriceObserver);
  return _createClass(SummaryDisplayObserver, [{
    key: "update",
    value: function update(priceData) {
      console.log(priceData);
      console.log(this.elements);
      this.elements.total.textContent = "\uFFE5".concat(priceData.total.toLocaleString('ja-JP'));
      this.elements.adultNumber.textContent = "\uFFE5".concat(priceData.adultNumber.toLocaleString('ja-JP'));
      this.elements.childNumber.textContent = "\uFFE5".concat(priceData.childNumber.toLocaleString('ja-JP'));
      this.elements.adultPrice.textContent = "\uFFE5".concat(priceData.adultPriceTotal.toLocaleString('ja-JP'));
      this.elements.childPrice.textContent = "\uFFE5".concat(priceData.childPriceTotal.toLocaleString('ja-JP'));
      this.elements.summaryContent.classList.add("hidden");
      this.elements.priceBrakdown.classList.remove("hidden");
      // this.elements.touristNumber.innerHTML = priceData.travelers;
      // this.elements.discountTotal.innerHTML = `-￥${(priceData.discount).toLocaleString('ja-JP')}`;

      // this.elements.discountSection.classList.toggle("hidden", priceData.travelersNumber < 2)
      // this.elements.totalSaving.classList.toggle("hidden", priceData.travelersNumber < 2)
    }
  }]);
}(_PriceObserver_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


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
/*!***************************************!*\
  !*** ./resources/js/pages/booking.js ***!
  \***************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_tourBook_BookingCalculator_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/tourBook/BookingCalculator.js */ "./resources/js/components/tourBook/BookingCalculator.js");

var bookingInstance = new _components_tourBook_BookingCalculator_js__WEBPACK_IMPORTED_MODULE_0__["default"]();
})();

/******/ })()
;