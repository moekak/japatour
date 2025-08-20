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
/*!********************************!*\
  !*** ./resources/js/common.js ***!
  \********************************/
__webpack_require__.r(__webpack_exports__);
var menuBtn = document.querySelector('button[aria-controls="mobile-menu"]');
var mobileMenu = document.getElementById('mobile-menu');
menuBtn.addEventListener('click', function () {
  var isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
  menuBtn.setAttribute('aria-expanded', String(!isExpanded));
  if (isExpanded) {
    mobileMenu.classList.add('max-h-0', 'hidden');
    mobileMenu.classList.remove('max-h-96');
  } else {
    mobileMenu.classList.remove('hidden');
    mobileMenu.classList.remove('max-h-0');
    mobileMenu.classList.add('max-h-96');
  }
});
var links = document.querySelectorAll('#mobile-menu a');
links.forEach(function (link) {
  link.addEventListener('click', function () {
    // メニューを閉じる（アニメーション付き）
    mobileMenu.classList.add('max-h-0');

    // ボタンの状態もリセット！
    menuBtn.setAttribute('aria-expanded', 'false');

    // 完全に非表示にする
    setTimeout(function () {
      mobileMenu.classList.add('hidden');
    }, 300); // animation durationと合わせる
  });
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    var target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});
/******/ })()
;