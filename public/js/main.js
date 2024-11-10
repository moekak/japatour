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
var header = document.querySelector(".js_header");
var title = document.querySelectorAll(".js_title");
var tl = gsap.timeline();
tl.to(title, {
  y: 0,
  duration: 1
});
tl.to(header, {
  y: 0,
  duration: 1
});
gsap.registerPlugin(ScrollTrigger);
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
ScrollTrigger.create({
  start: "top 30%",
  trigger: ".js_title",
  end: function end() {
    return "+=".concat(document.documentElement.scrollHeight);
  },
  toggleClass: {
    targets: ".js_header",
    className: "header-active"
  }
});
AOS.init();

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
  // arrows: true, //前へ・次への矢印ナビを表示
  dots: true,
  //ドット型のナビを表示,
  // centerMode: true,       // スライドを中央に表示
  centerPadding: '40px',
  // 両端に見えるスライドの幅を調整
  slidesToShow: 3,
  // 表示するスライドの数

  variableWidth: true

  // infinite: true //無限ループ
});
var submit_btn = document.getElementById("js_submit_btn");
submit_btn.addEventListener("click", function () {
  document.querySelector(".bg").classList.remove("hidden");
  document.querySelector(".loader").classList.remove("hidden");
});
/******/ })()
;