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
var headerSP = document.querySelector(".js_header_pc");
var title2 = document.querySelectorAll(".js_title");
var tl2 = gsap.timeline();
tl2.to(title2, {
  y: 0,
  duration: 1
});
tl2.to(headerSP, {
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
  responsive: [{
    breakpoint: 1200,
    // 画面幅1024px以下の場合
    settings: {
      slidesToShow: 2,
      // 2枚表示
      centerPadding: '30px' // 両端の幅を調整
    }
  }]

  // infinite: true //無限ループ
});
var submit_btn = document.getElementById("js_submit_btn");
submit_btn.addEventListener("click", function () {
  document.querySelector(".bg").classList.remove("hidden");
  document.querySelector(".loader").classList.remove("hidden");
});

// reviewの文字制限

var reviews = document.querySelectorAll(".js_review");
// const review_containers = document.querySelectorAll(".js_review_container")
// let max_height = 0

// review_containers.forEach((container)=>{
//   if(container.clientHeight > max_height){
//     max_height = container.clientHeight
//   }

//   container.style.height = `${max_height}px`

// })

var mediaQuery1200 = window.matchMedia('(max-width: 1200px)');
var mediaQuery900 = window.matchMedia('(max-width: 900px)');
var mediaQuery800 = window.matchMedia('(max-width: 800px)');
// let MAX_LENGTH = mediaQuery1200.matches ? 500: 310;
// let MAX_LENGTH = mediaQuery1200.matches ? 500: (mediaQuery900.matches ? 200 : 310);
var MAX_LENGTH = mediaQuery800.matches ? 230 : mediaQuery900.matches ? 280 : mediaQuery1200.matches ? 400 : 310;
console.log(MAX_LENGTH);
reviews.forEach(function (review) {
  var text = review.textContent.trim();
  if (text.length > MAX_LENGTH) {
    // 元のテキストを切り取る
    var truncatedText = text.substring(0, MAX_LENGTH);

    // 既存の内容を消して、新しい構造を作成
    review.innerHTML = "\n      <span>".concat(truncatedText, "</span>\n      <span style=\"cursor: pointer; padding-left:8px; color: #007BFF;\" class=\"js_see_more\">... see more</span>\n    ");
  }
});

// ハンバーガーメニュー
var header_btn = document.querySelector(".js_header_btn");
header_btn.addEventListener("click", function () {
  header_btn.classList.toggle('is-active');
});
/******/ })()
;