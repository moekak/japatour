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
/* harmony import */ var _calculator_StandardPriceStrategy_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./calculator/StandardPriceStrategy.js */ "./resources/js/components/tourBook/calculator/StandardPriceStrategy.js");
/* harmony import */ var _observer_SummaryDisplayObserver_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./observer/SummaryDisplayObserver.js */ "./resources/js/components/tourBook/observer/SummaryDisplayObserver.js");
/* harmony import */ var _observer_TourDataInputObserver_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./observer/TourDataInputObserver.js */ "./resources/js/components/tourBook/observer/TourDataInputObserver.js");
/* harmony import */ var _observer_TourDataSaveObserver_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./observer/TourDataSaveObserver.js */ "./resources/js/components/tourBook/observer/TourDataSaveObserver.js");
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
      this.registerObserver(new _observer_SummaryDisplayObserver_js__WEBPACK_IMPORTED_MODULE_1__["default"]({
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
      this.registerObserver(new _observer_TourDataSaveObserver_js__WEBPACK_IMPORTED_MODULE_3__["default"]({
        itineraryId: document.getElementById("js_itinerary_id"),
        itineraryTitle: document.getElementById("js_itinerary_name"),
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
      this.registerObserver(new _observer_TourDataInputObserver_js__WEBPACK_IMPORTED_MODULE_2__["default"]());
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
      var adultPriceTotal = _calculator_StandardPriceStrategy_js__WEBPACK_IMPORTED_MODULE_0__["default"].calculateAdultPrice(this.baseAdultPrice, options);
      var childPriceTotal = _calculator_StandardPriceStrategy_js__WEBPACK_IMPORTED_MODULE_0__["default"].calculateChildPrice(this.baseChildPrice, options);
      var total = adultPriceTotal + childPriceTotal;

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

/***/ "./resources/js/components/tourBook/BookingInformation.js":
/*!****************************************************************!*\
  !*** ./resources/js/components/tourBook/BookingInformation.js ***!
  \****************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ BookingInformation)
/* harmony export */ });
/* harmony import */ var _observer_PersonalInfoSaveObserver_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./observer/PersonalInfoSaveObserver.js */ "./resources/js/components/tourBook/observer/PersonalInfoSaveObserver.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }

var BookingInformation = /*#__PURE__*/function () {
  function BookingInformation() {
    _classCallCheck(this, BookingInformation);
    this.observers = [];
    this.initializeElements();
    this.initialzeEvents();
    this.resisterSaveObservers();
  }
  return _createClass(BookingInformation, [{
    key: "initializeElements",
    value: function initializeElements() {
      this.elements = {
        firstName: document.getElementById("first-name"),
        lastName: document.getElementById("last-name"),
        email: document.getElementById("email"),
        phone: document.getElementById("phone"),
        request: document.getElementById("special-requests")
      };
    }
  }, {
    key: "initialzeEvents",
    value: function initialzeEvents() {
      var _this = this;
      for (var element in this.elements) {
        this.elements[element].addEventListener("input", function () {
          _this.getAndNotify();
        });
      }
    }

    // オブザーバーへの通知メソッド
  }, {
    key: "notifyObservers",
    value: function notifyObservers(information) {
      this.observers.forEach(function (observer) {
        observer.update(information);
      });
    }

    // オブザーバー登録メソッド
  }, {
    key: "registerObserver",
    value: function registerObserver(observer) {
      this.observers.push(observer);
    }
  }, {
    key: "resisterSaveObservers",
    value: function resisterSaveObservers() {
      this.registerObserver(new _observer_PersonalInfoSaveObserver_js__WEBPACK_IMPORTED_MODULE_0__["default"]({
        firstName: document.getElementById("js_firstName"),
        lastName: document.getElementById("js_lastName"),
        email: document.getElementById("js_email"),
        phone: document.getElementById("js_phone"),
        request: document.getElementById("js_request")
      }));
    }
  }, {
    key: "getAndNotify",
    value: function getAndNotify() {
      var firstName = this.elements.firstName.value;
      var lastName = this.elements.lastName.value;
      var email = this.elements.email.value;
      var phone = this.elements.phone.value;
      var request = this.elements.request.value;
      var data = {
        firstName: firstName,
        lastName: lastName,
        email: email,
        phone: phone,
        request: request
      };
      console.log(data);
      this.notifyObservers(data);
    }
  }]);
}();


/***/ }),

/***/ "./resources/js/components/tourBook/TourReview.js":
/*!********************************************************!*\
  !*** ./resources/js/components/tourBook/TourReview.js ***!
  \********************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ TourReview)
/* harmony export */ });
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var TourReview = /*#__PURE__*/function () {
  function TourReview() {
    _classCallCheck(this, TourReview);
    this.initializeElements();
  }
  return _createClass(TourReview, [{
    key: "initializeElements",
    value: function initializeElements() {
      this.elements = {
        adult_number: document.querySelectorAll(".adult_number"),
        adult_price: document.querySelectorAll(".adult_price"),
        child_number: document.querySelectorAll(".child_number"),
        child_price: document.querySelectorAll(".child_price"),
        total_price: document.querySelectorAll(".total_price"),
        date: document.querySelectorAll(".date"),
        firstName: document.querySelectorAll(".firstName"),
        lastName: document.querySelectorAll(".lastName"),
        email: document.querySelectorAll(".email"),
        phone: document.querySelectorAll(".phone"),
        request: document.querySelectorAll(".request"),
        tour_name: document.querySelectorAll(".tour_name"),
        itinerary_name: document.querySelectorAll(".itinerary_name")
      };
    }
  }, {
    key: "updateReview",
    value: function updateReview() {
      var _this = this;
      var _loop = function _loop(element) {
        _this.elements[element].forEach(function (el) {
          el.innerHTML = document.getElementById("js_".concat(element)).value.toLocaleString('ja-JP');
        });
      };
      for (var element in this.elements) {
        _loop(element);
      }
    }
  }]);
}();


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

      console.log("子供の料金" + childPrice);
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

/***/ "./resources/js/components/tourBook/observer/PersonalInfoSaveObserver.js":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/tourBook/observer/PersonalInfoSaveObserver.js ***!
  \*******************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ PersonalInfoSaveObserver)
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

var PersonalInfoSaveObserver = /*#__PURE__*/function (_ObserverInterface) {
  function PersonalInfoSaveObserver(elements) {
    var _this;
    _classCallCheck(this, PersonalInfoSaveObserver);
    _this = _callSuper(this, PersonalInfoSaveObserver);
    _this.elements = elements;
    _this.reviewButton = document.getElementById("continue-to-step-3");
    return _this;
  }
  _inherits(PersonalInfoSaveObserver, _ObserverInterface);
  return _createClass(PersonalInfoSaveObserver, [{
    key: "update",
    value: function update(information) {
      this.elements.firstName.value = information.firstName;
      this.elements.lastName.value = information.lastName;
      this.elements.email.value = information.email;
      this.elements.phone.value = information.phone;
      this.elements.request.value = information.request;
      var hasAlldata = information.firstName && information.lastName && information.email && information.phone;
      this.reviewButton.disabled = !hasAlldata;
    }
  }]);
}(_ObserverInterface_js__WEBPACK_IMPORTED_MODULE_0__["default"]);


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


/***/ }),

/***/ "./resources/js/components/tourBook/observer/TourDataSaveObserver.js":
/*!***************************************************************************!*\
  !*** ./resources/js/components/tourBook/observer/TourDataSaveObserver.js ***!
  \***************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ TourDataSaveObserver)
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

var TourDataSaveObserver = /*#__PURE__*/function (_ObserverInterface) {
  function TourDataSaveObserver(elements) {
    var _this;
    _classCallCheck(this, TourDataSaveObserver);
    _this = _callSuper(this, TourDataSaveObserver);
    _this.elements = elements;
    return _this;
  }
  _inherits(TourDataSaveObserver, _ObserverInterface);
  return _createClass(TourDataSaveObserver, [{
    key: "update",
    value: function update(data) {
      this.elements.itineraryId.value = data.itineraryId;
      this.elements.itineraryTitle.value = data.itineraryTitle;
      this.elements.adultNumber.value = data.adultNumber;
      this.elements.adultPrice.value = data.adultPriceTotal;
      this.elements.childNumber.value = data.childNumber;
      this.elements.childPrice.value = data.childPriceTotal;
      this.elements.totalPrice.value = data.total;
      this.elements.date.value = data.selectedDate;
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
/*!***************************************!*\
  !*** ./resources/js/pages/booking.js ***!
  \***************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_tourBook_BookingCalculator_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/tourBook/BookingCalculator.js */ "./resources/js/components/tourBook/BookingCalculator.js");
/* harmony import */ var _components_tourBook_BookingInformation_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/tourBook/BookingInformation.js */ "./resources/js/components/tourBook/BookingInformation.js");
/* harmony import */ var _components_tourBook_TourReview_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../components/tourBook/TourReview.js */ "./resources/js/components/tourBook/TourReview.js");



new _components_tourBook_BookingCalculator_js__WEBPACK_IMPORTED_MODULE_0__["default"]();
new _components_tourBook_BookingInformation_js__WEBPACK_IMPORTED_MODULE_1__["default"]();
var tourReviewInstance = new _components_tourBook_TourReview_js__WEBPACK_IMPORTED_MODULE_2__["default"]();
document.getElementById('continue-to-step-2').addEventListener("click", function () {
  document.getElementById("step-2-content").classList.remove("hidden");
  document.getElementById("step-1-content").classList.add("hidden");
});
document.getElementById('back-to-step-1').addEventListener("click", function () {
  document.getElementById("step-1-content").classList.remove("hidden");
  document.getElementById("step-2-content").classList.add("hidden");
});
document.getElementById('continue-to-step-3').addEventListener("click", function () {
  document.getElementById("step-3-content").classList.remove("hidden");
  document.getElementById("step-2-content").classList.add("hidden");
  tourReviewInstance.updateReview();
});
document.getElementById('back-to-step-2').addEventListener("click", function () {
  document.getElementById("step-2-content").classList.remove("hidden");
  document.getElementById("step-3-content").classList.add("hidden");
});
})();

/******/ })()
;