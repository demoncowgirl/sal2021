/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /home/beth/repos/cross-stitch/resources/js/app.js: Unexpected token, expected \",\" (6:63)\n\n\u001b[0m \u001b[90m 4 | \u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 5 | \u001b[39m    \u001b[36mvar\u001b[39m colors \u001b[33m=\u001b[39m [\u001b[32m'#0088A1'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'#C14B1E'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'#F3A230'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'#6D1B16'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'#DB6400'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'#EEAF42'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'#90BEC1'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'#873113'\u001b[39m]\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 6 | \u001b[39m    \u001b[36mvar\u001b[39m randomNumber \u001b[33m=\u001b[39m \u001b[33mMath\u001b[39m\u001b[33m.\u001b[39mfloor(\u001b[33mMath\u001b[39m\u001b[33m,\u001b[39mrandom()\u001b[33m*\u001b[39mcolors\u001b[33m.\u001b[39mlength()\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m   | \u001b[39m                                                               \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 7 | \u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 8 | \u001b[39m    \u001b[36mreturn\u001b[39m randomColour\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 9 | \u001b[39m}\u001b[0m\n    at Parser._raise (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:748:17)\n    at Parser.raiseWithData (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:741:17)\n    at Parser.raise (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:735:17)\n    at Parser.unexpected (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:9101:16)\n    at Parser.expect (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:9087:28)\n    at Parser.parseCallExpressionArguments (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:10334:14)\n    at Parser.parseCoverCallAndAsyncArrowHead (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:10258:29)\n    at Parser.parseSubscript (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:10194:19)\n    at Parser.parseSubscripts (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:10167:19)\n    at Parser.parseExprSubscripts (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:10156:17)\n    at Parser.parseUpdate (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:10130:21)\n    at Parser.parseMaybeUnary (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:10119:17)\n    at Parser.parseExprOps (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:9989:23)\n    at Parser.parseMaybeConditional (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:9963:23)\n    at Parser.parseMaybeAssign (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:9926:21)\n    at /home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:9893:39\n    at Parser.allowInAnd (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:11541:16)\n    at Parser.parseMaybeAssignAllowIn (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:9893:17)\n    at Parser.parseVar (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:12339:70)\n    at Parser.parseVarStatement (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:12151:10)\n    at Parser.parseStatementContent (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:11743:21)\n    at Parser.parseStatement (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:11676:17)\n    at Parser.parseBlockOrModuleBlockBody (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:12258:25)\n    at Parser.parseBlockBody (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:12249:10)\n    at Parser.parseBlock (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:12233:10)\n    at Parser.parseFunctionBody (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:11221:24)\n    at Parser.parseFunctionBodyAndFinish (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:11205:10)\n    at /home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:12391:12\n    at Parser.withTopicForbiddingContext (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:11516:14)\n    at Parser.parseFunction (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:12390:10)\n    at Parser.parseFunctionStatement (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:12024:17)\n    at Parser.parseStatementContent (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:11714:21)\n    at Parser.parseStatement (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:11676:17)\n    at Parser.parseBlockOrModuleBlockBody (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:12258:25)\n    at Parser.parseBlockBody (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:12249:10)\n    at Parser.parseTopLevel (/home/beth/repos/cross-stitch/node_modules/@babel/parser/lib/index.js:11607:10)");

/***/ }),

/***/ 0:
/*!***********************************************************!*\
  !*** multi ./resources/js/app.js ./resources/css/app.css ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/beth/repos/cross-stitch/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /home/beth/repos/cross-stitch/resources/css/app.css */"./resources/css/app.css");


/***/ })

/******/ });