/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************************!*\
  !*** ./resources/vendors/js/hide_input.js ***!
  \********************************************/
// -----------------------------------------------------------------------------
// This file contains all hide input js.
// -----------------------------------------------------------------------------
// var $ = require('jquery');
$(".toggle-password").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));

  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
/******/ })()
;