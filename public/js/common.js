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
// ハンバーガーメニュー
var header_btn = document.querySelector(".js_header_btn");
var menu_modal = document.querySelector(".menu_modal");
header_btn.addEventListener("click", function () {
  if (!menu_modal.classList.contains("menu_active")) {
    // アニメーションを開始
    menu_modal.classList.add("menu_active");
    menu_modal.classList.remove("menu_close");
    document.body.style.overflow = "hidden";
  } else {
    // アニメーションを終了
    menu_modal.classList.remove("menu_active");
    menu_modal.classList.add("menu_close");
    document.body.style.overflowY = "auto";
  }

  // ボタンの状態を切り替え
  header_btn.classList.toggle("is-active");
});
/******/ })()
;