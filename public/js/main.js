/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
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
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
AOS.init();

// 要素の取得をまとめる
var header = document.querySelector(".js_header");
var headerSP = document.querySelector(".js_header_pc");
var titles = document.querySelectorAll(".js_title");

// ScrollTriggerの登録（1回だけで良い）
gsap.registerPlugin(ScrollTrigger);

// タイムラインのアニメーションをまとめる
var tl = gsap.timeline();
tl.to(titles, {
  y: 0,
  duration: 1
}).to([header, headerSP], {
  y: 0,
  duration: 1
}); // 両方のヘッダーを同時にアニメーション

// パララックス効果（1回だけで良い）
gsap.utils.toArray(".js-parallax").forEach(function (wrap) {
  var y = wrap.getAttribute("data-y") || -100;
  gsap.to(wrap, {
    y: y,
    scrollTrigger: {
      trigger: wrap,
      start: "top bottom",
      end: "bottom top",
      scrub: 0.5
      //markers: true
    }
  });
});

// ヘッダーのクラス切り替え
ScrollTrigger.create({
  start: "top 30%",
  trigger: ".js_title",
  end: function end() {
    return "+=".concat(document.documentElement.scrollHeight);
  },
  toggleClass: {
    targets: [".js_header", ".js_header_pc"],
    // 両方のヘッダーを対象に
    className: "header-active"
  }
});

// why choose japa tourのところの高さを合わせる

var mediaQuery = window.matchMedia("(min-width: 1201px)");
if (mediaQuery.matches) {
  var cards = document.querySelectorAll(".js_reason_card");
  var height = 0;
  cards.forEach(function (card) {
    if (card.clientHeight > height) {
      height = card.clientHeight;
    }
  });
  cards.forEach(function (card) {
    card.style.height = "".concat(height, "px");
  });
}
$('#js-slick').slick({
  // autoplay: true, //自動再生
  autoplaySpeed: 3000,
  //自動再生の速度
  arrows: true,
  //前へ・次への矢印ナビを表示
  dots: true,
  //ドット型のナビを表示,
  // centerMode: true,       // スライドを中央に表示
  centerPadding: '40px',
  // 両端に見えるスライドの幅を調整
  slidesToShow: 3,
  // 表示するスライドの数
  responsive: [_defineProperty(_defineProperty({
    breakpoint: 1000,
    // 画面幅1024px以下の場合
    settings: {
      slidesToShow: 2,
      // 2枚表示
      centerPadding: '30px' // 両端の幅を調整
    }
  }, "breakpoint", 650), "settings", {
    slidesToShow: 1,
    // 2枚表示
    centerPadding: '30px' // 両端の幅を調整
  })]
});
var submit_btn = document.getElementById("js_submit_btn");
submit_btn.addEventListener("click", function () {
  document.querySelector(".bg").classList.remove("hidden");
  document.querySelector(".loader").classList.remove("hidden");
});
var reviews = document.querySelectorAll(".js_review");
var mediaQuery1200 = window.matchMedia('(max-width: 1200px)');
var mediaQuery900 = window.matchMedia('(max-width: 900px)');
var mediaQuery800 = window.matchMedia('(max-width: 800px)');
var mediaQuery650 = window.matchMedia('(max-width: 650px)');
var mediaQuery450 = window.matchMedia('(max-width: 450px)');
var mediaQuery350 = window.matchMedia('(max-width: 350px)');
var MAX_LENGTH = mediaQuery350.matches ? 170 : mediaQuery450.matches ? 350 : mediaQuery650.matches ? 420 : mediaQuery800.matches ? 230 : mediaQuery900.matches ? 280 : mediaQuery1200.matches ? 240 : 310;
console.log(MAX_LENGTH);
reviews.forEach(function (review) {
  var text = review.textContent.trim();
  if (text.length > MAX_LENGTH) {
    // 元のテキストを切り取る
    var truncatedText = text.substring(0, MAX_LENGTH);

    // 既存の内容を消して、新しい構造を作成
    review.innerHTML = "\n\t\t\t<span>".concat(truncatedText, "</span>\n\t\t\t<span style=\"cursor: pointer; padding-left:8px; color: #007BFF;\" class=\"js_see_more\">... see more</span>\n\t\t");
  }
});
document.addEventListener("DOMContentLoaded", function () {
  // レビュー親要素の高さを一番高い要素に合わせる
  var containers = document.querySelectorAll(".js_review_container");
  var maxHeight = 0;
  containers.forEach(function (container) {
    if (container.clientHeight > maxHeight) {
      maxHeight = container.clientHeight;
    }
  });
  containers.forEach(function (container) {
    container.style.height = "".concat(maxHeight, "px");
  });
  var menus = document.querySelectorAll(".js_menu");
  menus.forEach(function (menu) {
    menu.addEventListener("click", function () {
      menu_modal.classList.remove("menu_active");
      menu_modal.classList.add("menu_close");
      document.body.style.overflowY = "auto";
      header_btn.classList.remove("is-active");
    });
  });

  // // 電話アイコン押したら電話をかける
  // const phone = document.getElementById("eld4n96c55y5")
  // phone.addEventListener("click", ()=>{
  // 	window.location.href = 'tel:090-6495-4567'
  // })
});
/******/ })()
;