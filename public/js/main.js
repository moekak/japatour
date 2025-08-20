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
document.addEventListener('DOMContentLoaded', function () {
  var submitForm = document.querySelector(".js_form");
  if (submitForm) {
    submitForm.addEventListener('submit', function (e) {
      e.preventDefault(); // フォームの自動送信を防止
      grecaptcha.ready(function () {
        grecaptcha.execute('6LfsOIkrAAAAAK9nICyBNQeanLgdeQjHa2Go_Myb', {
          action: 'submit'
        }).then(function (token) {
          document.getElementById('recaptchaResponse').value = token;
          document.querySelector('form').submit(); // フォームを送信
        });
      });
    });
  } else {
    console.error('Submit button not found');
  }
});
var submit_btn = document.getElementById("js_submit_btn");
submit_btn.addEventListener("click", function () {
  document.querySelector(".js_sending").classList.remove("hidden");
  document.querySelector(".js_main").classList.add("hidden");
});
/******/ })()
;