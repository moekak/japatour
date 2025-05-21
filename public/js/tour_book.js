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
/* harmony import */ var _calculator_StandardPriceStrategy_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./calculator/StandardPriceStrategy.js */ "./resources/js/components/tourBook/calculator/StandardPriceStrategy.js");
/* harmony import */ var _observer_SummaryDisplayObserver_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./observer/SummaryDisplayObserver.js */ "./resources/js/components/tourBook/observer/SummaryDisplayObserver.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }



var BookingCalculator = /*#__PURE__*/function () {
  function BookingCalculator() {
    _classCallCheck(this, BookingCalculator);
    this.packageStrategy = new _calculator_StandardPriceStrategy_js__WEBPACK_IMPORTED_MODULE_1__["default"]();
    this.serviceStrategy = new _calculator_AdditionalServiceStrategy_js__WEBPACK_IMPORTED_MODULE_0__["default"]();

    // 基本料金の設定
    this.basePackagePrice = 20000; // 基本パッケージ料金
    // オブザーバーリスト
    this.observers = [];
    // DOM要素の取得
    this.initializeElements();
    // オブザーバーの登録
    this.registerDisplayObservers();
    this.initializeEvents();
    // 初期計算と通知
    this.calculateAndNotify();
  }

  // DOM要素の初期化
  return _createClass(BookingCalculator, [{
    key: "initializeElements",
    value: function initializeElements() {
      // フォーム要素
      this.elements = {
        // 追加サービス関連
        serviceCheckboxes: document.querySelectorAll('.js_service_checkbox'),
        servicePriceElement: document.querySelector('.additional-service-price'),
        // 旅行者数関連
        travelersSelect: document.getElementById('travelers'),
        numberElement: document.querySelector('.js_number'),
        tourPriceElement: document.querySelector('.tour-price'),
        // パッケージ関連
        optionCards: document.querySelectorAll('.option-card'),
        // 日付関連
        dateInput: document.getElementById('date_range_start'),
        // 選択されたパッケージ情報
        selectedPackageName: '',
        selectedPackagePrice: this.basePackagePrice
      };
    }

    // 表示オブザーバーの登録
  }, {
    key: "registerDisplayObservers",
    value: function registerDisplayObservers() {
      // サマリー表示のオブザーバーを登録
      this.registerObserver(new _observer_SummaryDisplayObserver_js__WEBPACK_IMPORTED_MODULE_2__["default"]({
        packageTotal: document.getElementById('package-total'),
        serviceTotal: document.querySelector('.additional-service-price'),
        grandTotal: document.querySelector('.total-price'),
        paymentTotal: document.getElementById('payment-total'),
        depositAmount: document.getElementById('deposit-amount')
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
      console.log(this.observers);
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
      if (this.elements.serviceCheckboxes) {
        this.elements.serviceCheckboxes.forEach(function (checkbox) {
          checkbox.addEventListener('change', function () {
            _this.calculateAndNotify();
          });
        });
      }

      // 旅行者数変更イベント
      if (this.elements.travelersSelect) {
        this.elements.travelersSelect.addEventListener('change', function () {
          _this.calculateAndNotify();
        });
      }

      // パッケージ選択イベント
      if (this.elements.optionCards) {
        this.elements.optionCards.forEach(function (card) {
          card.addEventListener('click', function () {
            // 選択状態の更新
            _this.elements.optionCards.forEach(function (c) {
              return c.classList.remove('selected');
            });
            card.classList.add('selected');

            // 選択されたパッケージ情報の更新
            _this.elements.selectedPackageName = card.dataset.itinerary || '';
            _this.elements.selectedPackagePrice = parseInt(card.dataset.price) || _this.basePackagePrice;

            // 計算と通知
            _this.calculateAndNotify();
          });
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
      var _this$elements$travel, _this$elements$dateIn;
      // 現在の状態から計算に必要なデータを収集
      var travelers = parseInt((_this$elements$travel = this.elements.travelersSelect) === null || _this$elements$travel === void 0 ? void 0 : _this$elements$travel.value) || 1;

      // サービスデータの収集
      var services = Array.from(this.elements.serviceCheckboxes || []).map(function (checkbox) {
        return {
          checked: checkbox.checked,
          price: parseInt(checkbox.dataset.price) || 0
        };
      });

      // 選択されたパッケージと日付
      var selectedPackageName = this.elements.selectedPackageName;
      var basePrice = this.elements.selectedPackagePrice || this.basePackagePrice;
      var selectedDate = ((_this$elements$dateIn = this.elements.dateInput) === null || _this$elements$dateIn === void 0 ? void 0 : _this$elements$dateIn.value) || '';

      // 計算オプション
      var options = {
        travelers: travelers,
        services: services
      };

      // 戦略パターンを使って計算
      var packageTotal = this.packageStrategy.calculate(basePrice, options);
      var serviceTotal = this.serviceStrategy.calculate(0, options);
      var grandTotal = packageTotal + serviceTotal;

      // 結果をオブザーバーに通知
      this.notifyObservers({
        packageTotal: packageTotal,
        serviceTotal: serviceTotal,
        grandTotal: grandTotal,
        basePrice: basePrice,
        travelers: travelers,
        packageName: selectedPackageName,
        selectedDate: selectedDate
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
  return _createClass(AdditionalServiceStrategy, [{
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
  return _createClass(PriceCalculationStrategy, [{
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

var StandardPriceStrategy = /*#__PURE__*/function (_PriceCalculationStra) {
  function StandardPriceStrategy() {
    _classCallCheck(this, StandardPriceStrategy);
    return _callSuper(this, StandardPriceStrategy, arguments);
  }
  _inherits(StandardPriceStrategy, _PriceCalculationStra);
  return _createClass(StandardPriceStrategy, [{
    key: "calculate",
    value: function calculate(basePrice, options) {
      return basePrice * options.travelers;
    }
  }]);
}(_PriceCalculationStrategy_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


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
      this.elements.packageTotal.textContent = "\uFFE5".concat(priceData.packageTotal.toLocaleString('ja-JP'));
      this.elements.grandTotal.textContent = "\uFFE5".concat(priceData.grandTotal.toLocaleString('ja-JP'));
      this.elements.paymentTotal.textContent = "\uFFE5".concat(priceData.grandTotal.toLocaleString('ja-JP'));
      this.elements.depositAmount.textContent = "\uFFE5".concat((priceData.grandTotal * 0.2).toLocaleString('ja-JP'));
      this.elements.serviceTotal.textContent = "\uFFE5".concat(priceData.serviceTotal.toLocaleString('ja-JP'));
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
/*!*****************************************!*\
  !*** ./resources/js/pages/tour_book.js ***!
  \*****************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_tourBook_BookingCalculator_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/tourBook/BookingCalculator.js */ "./resources/js/components/tourBook/BookingCalculator.js");

new _components_tourBook_BookingCalculator_js__WEBPACK_IMPORTED_MODULE_0__["default"]();
})();

/******/ })()
;