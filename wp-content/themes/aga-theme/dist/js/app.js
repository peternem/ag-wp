!function(n){var o={};function r(t){if(o[t])return o[t].exports;var e=o[t]={i:t,l:!1,exports:{}};return n[t].call(e.exports,e,e.exports,r),e.l=!0,e.exports}r.m=n,r.c=o,r.d=function(t,e,n){r.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="",r(r.s=0)}({"./node_modules/webpack/buildin/module.js":function(module,exports,__webpack_require__){"use strict";eval('\n\nmodule.exports = function (module) {\n\tif (!module.webpackPolyfill) {\n\t\tmodule.deprecate = function () {};\n\t\tmodule.paths = [];\n\t\t// module.parent = undefined by default\n\t\tif (!module.children) module.children = [];\n\t\tObject.defineProperty(module, "loaded", {\n\t\t\tenumerable: true,\n\t\t\tget: function get() {\n\t\t\t\treturn module.l;\n\t\t\t}\n\t\t});\n\t\tObject.defineProperty(module, "id", {\n\t\t\tenumerable: true,\n\t\t\tget: function get() {\n\t\t\t\treturn module.i;\n\t\t\t}\n\t\t});\n\t\tmodule.webpackPolyfill = 1;\n\t}\n\treturn module;\n};\n\n//# sourceURL=webpack:///(webpack)/buildin/module.js?')},"./node_modules/what-input/dist/what-input.js":function(module,exports,__webpack_require__){"use strict";eval("/* WEBPACK VAR INJECTION */(function(module) {var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;\n\nvar _typeof = typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; };\n\n/**\n * what-input - A global utility for tracking the current input method (mouse, keyboard or touch).\n * @version v5.2.6\n * @link https://github.com/ten1seven/what-input\n * @license MIT\n */\n(function webpackUniversalModuleDefinition(root, factory) {\n\tif (( false ? undefined : _typeof(exports)) === 'object' && ( false ? undefined : _typeof(module)) === 'object') module.exports = factory();else if (true) !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),\n\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?\n\t\t\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),\n\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));else {}\n})(undefined, function () {\n\treturn (/******/function (modules) {\n\t\t\t// webpackBootstrap\n\t\t\t/******/ // The module cache\n\t\t\t/******/var installedModules = {};\n\n\t\t\t/******/ // The require function\n\t\t\t/******/function __webpack_require__(moduleId) {\n\n\t\t\t\t/******/ // Check if module is in cache\n\t\t\t\t/******/if (installedModules[moduleId])\n\t\t\t\t\t/******/return installedModules[moduleId].exports;\n\n\t\t\t\t/******/ // Create a new module (and put it into the cache)\n\t\t\t\t/******/var module = installedModules[moduleId] = {\n\t\t\t\t\t/******/exports: {},\n\t\t\t\t\t/******/id: moduleId,\n\t\t\t\t\t/******/loaded: false\n\t\t\t\t\t/******/ };\n\n\t\t\t\t/******/ // Execute the module function\n\t\t\t\t/******/modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);\n\n\t\t\t\t/******/ // Flag the module as loaded\n\t\t\t\t/******/module.loaded = true;\n\n\t\t\t\t/******/ // Return the exports of the module\n\t\t\t\t/******/return module.exports;\n\t\t\t\t/******/\n\t\t\t}\n\n\t\t\t/******/ // expose the modules object (__webpack_modules__)\n\t\t\t/******/__webpack_require__.m = modules;\n\n\t\t\t/******/ // expose the module cache\n\t\t\t/******/__webpack_require__.c = installedModules;\n\n\t\t\t/******/ // __webpack_public_path__\n\t\t\t/******/__webpack_require__.p = \"\";\n\n\t\t\t/******/ // Load entry module and return exports\n\t\t\t/******/return __webpack_require__(0);\n\t\t\t/******/\n\t\t}(\n\t\t/************************************************************************/\n\t\t/******/[\n\t\t/* 0 */\n\t\t/***/function (module, exports) {\n\n\t\t\t'use strict';\n\n\t\t\tmodule.exports = function () {\n\t\t\t\t/*\n     * bail out if there is no document or window\n     * (i.e. in a node/non-DOM environment)\n     *\n     * Return a stubbed API instead\n     */\n\t\t\t\tif (typeof document === 'undefined' || typeof window === 'undefined') {\n\t\t\t\t\treturn {\n\t\t\t\t\t\t// always return \"initial\" because no interaction will ever be detected\n\t\t\t\t\t\task: function ask() {\n\t\t\t\t\t\t\treturn 'initial';\n\t\t\t\t\t\t},\n\n\t\t\t\t\t\t// always return null\n\t\t\t\t\t\telement: function element() {\n\t\t\t\t\t\t\treturn null;\n\t\t\t\t\t\t},\n\n\t\t\t\t\t\t// no-op\n\t\t\t\t\t\tignoreKeys: function ignoreKeys() {},\n\n\t\t\t\t\t\t// no-op\n\t\t\t\t\t\tspecificKeys: function specificKeys() {},\n\n\t\t\t\t\t\t// no-op\n\t\t\t\t\t\tregisterOnChange: function registerOnChange() {},\n\n\t\t\t\t\t\t// no-op\n\t\t\t\t\t\tunRegisterOnChange: function unRegisterOnChange() {}\n\t\t\t\t\t};\n\t\t\t\t}\n\n\t\t\t\t/*\n     * variables\n     */\n\n\t\t\t\t// cache document.documentElement\n\t\t\t\tvar docElem = document.documentElement;\n\n\t\t\t\t// currently focused dom element\n\t\t\t\tvar currentElement = null;\n\n\t\t\t\t// last used input type\n\t\t\t\tvar currentInput = 'initial';\n\n\t\t\t\t// last used input intent\n\t\t\t\tvar currentIntent = currentInput;\n\n\t\t\t\t// UNIX timestamp of current event\n\t\t\t\tvar currentTimestamp = Date.now();\n\n\t\t\t\t// check for a `data-whatpersist` attribute on either the `html` or `body` elements, defaults to `true`\n\t\t\t\tvar shouldPersist = 'false';\n\n\t\t\t\t// form input types\n\t\t\t\tvar formInputs = ['button', 'input', 'select', 'textarea'];\n\n\t\t\t\t// empty array for holding callback functions\n\t\t\t\tvar functionList = [];\n\n\t\t\t\t// list of modifier keys commonly used with the mouse and\n\t\t\t\t// can be safely ignored to prevent false keyboard detection\n\t\t\t\tvar ignoreMap = [16, // shift\n\t\t\t\t17, // control\n\t\t\t\t18, // alt\n\t\t\t\t91, // Windows key / left Apple cmd\n\t\t\t\t93 // Windows menu / right Apple cmd\n\t\t\t\t];\n\n\t\t\t\tvar specificMap = [];\n\n\t\t\t\t// mapping of events to input types\n\t\t\t\tvar inputMap = {\n\t\t\t\t\tkeydown: 'keyboard',\n\t\t\t\t\tkeyup: 'keyboard',\n\t\t\t\t\tmousedown: 'mouse',\n\t\t\t\t\tmousemove: 'mouse',\n\t\t\t\t\tMSPointerDown: 'pointer',\n\t\t\t\t\tMSPointerMove: 'pointer',\n\t\t\t\t\tpointerdown: 'pointer',\n\t\t\t\t\tpointermove: 'pointer',\n\t\t\t\t\ttouchstart: 'touch',\n\t\t\t\t\ttouchend: 'touch'\n\n\t\t\t\t\t// boolean: true if the page is being scrolled\n\t\t\t\t};var isScrolling = false;\n\n\t\t\t\t// store current mouse position\n\t\t\t\tvar mousePos = {\n\t\t\t\t\tx: null,\n\t\t\t\t\ty: null\n\n\t\t\t\t\t// map of IE 10 pointer events\n\t\t\t\t};var pointerMap = {\n\t\t\t\t\t2: 'touch',\n\t\t\t\t\t3: 'touch', // treat pen like touch\n\t\t\t\t\t4: 'mouse'\n\n\t\t\t\t\t// check support for passive event listeners\n\t\t\t\t};var supportsPassive = false;\n\n\t\t\t\ttry {\n\t\t\t\t\tvar opts = Object.defineProperty({}, 'passive', {\n\t\t\t\t\t\tget: function get() {\n\t\t\t\t\t\t\tsupportsPassive = true;\n\t\t\t\t\t\t}\n\t\t\t\t\t});\n\n\t\t\t\t\twindow.addEventListener('test', null, opts);\n\t\t\t\t} catch (e) {}\n\t\t\t\t// fail silently\n\n\n\t\t\t\t/*\n     * set up\n     */\n\n\t\t\t\tvar setUp = function setUp() {\n\t\t\t\t\t// add correct mouse wheel event mapping to `inputMap`\n\t\t\t\t\tinputMap[detectWheel()] = 'mouse';\n\n\t\t\t\t\taddListeners();\n\t\t\t\t};\n\n\t\t\t\t/*\n     * events\n     */\n\n\t\t\t\tvar addListeners = function addListeners() {\n\t\t\t\t\t// `pointermove`, `MSPointerMove`, `mousemove` and mouse wheel event binding\n\t\t\t\t\t// can only demonstrate potential, but not actual, interaction\n\t\t\t\t\t// and are treated separately\n\t\t\t\t\tvar options = supportsPassive ? { passive: true } : false;\n\n\t\t\t\t\tdocument.addEventListener('DOMContentLoaded', setPersist);\n\n\t\t\t\t\t// pointer events (mouse, pen, touch)\n\t\t\t\t\tif (window.PointerEvent) {\n\t\t\t\t\t\twindow.addEventListener('pointerdown', setInput);\n\t\t\t\t\t\twindow.addEventListener('pointermove', setIntent);\n\t\t\t\t\t} else if (window.MSPointerEvent) {\n\t\t\t\t\t\twindow.addEventListener('MSPointerDown', setInput);\n\t\t\t\t\t\twindow.addEventListener('MSPointerMove', setIntent);\n\t\t\t\t\t} else {\n\t\t\t\t\t\t// mouse events\n\t\t\t\t\t\twindow.addEventListener('mousedown', setInput);\n\t\t\t\t\t\twindow.addEventListener('mousemove', setIntent);\n\n\t\t\t\t\t\t// touch events\n\t\t\t\t\t\tif ('ontouchstart' in window) {\n\t\t\t\t\t\t\twindow.addEventListener('touchstart', setInput, options);\n\t\t\t\t\t\t\twindow.addEventListener('touchend', setInput);\n\t\t\t\t\t\t}\n\t\t\t\t\t}\n\n\t\t\t\t\t// mouse wheel\n\t\t\t\t\twindow.addEventListener(detectWheel(), setIntent, options);\n\n\t\t\t\t\t// keyboard events\n\t\t\t\t\twindow.addEventListener('keydown', setInput);\n\t\t\t\t\twindow.addEventListener('keyup', setInput);\n\n\t\t\t\t\t// focus events\n\t\t\t\t\twindow.addEventListener('focusin', setElement);\n\t\t\t\t\twindow.addEventListener('focusout', clearElement);\n\t\t\t\t};\n\n\t\t\t\t// checks if input persistence should happen and\n\t\t\t\t// get saved state from session storage if true (defaults to `false`)\n\t\t\t\tvar setPersist = function setPersist() {\n\t\t\t\t\tshouldPersist = !(docElem.getAttribute('data-whatpersist') || document.body.getAttribute('data-whatpersist') === 'false');\n\n\t\t\t\t\tif (shouldPersist) {\n\t\t\t\t\t\t// check for session variables and use if available\n\t\t\t\t\t\ttry {\n\t\t\t\t\t\t\tif (window.sessionStorage.getItem('what-input')) {\n\t\t\t\t\t\t\t\tcurrentInput = window.sessionStorage.getItem('what-input');\n\t\t\t\t\t\t\t}\n\n\t\t\t\t\t\t\tif (window.sessionStorage.getItem('what-intent')) {\n\t\t\t\t\t\t\t\tcurrentIntent = window.sessionStorage.getItem('what-intent');\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t} catch (e) {\n\t\t\t\t\t\t\t// fail silently\n\t\t\t\t\t\t}\n\t\t\t\t\t}\n\n\t\t\t\t\t// always run these so at least `initial` state is set\n\t\t\t\t\tdoUpdate('input');\n\t\t\t\t\tdoUpdate('intent');\n\t\t\t\t};\n\n\t\t\t\t// checks conditions before updating new input\n\t\t\t\tvar setInput = function setInput(event) {\n\t\t\t\t\tvar eventKey = event.which;\n\t\t\t\t\tvar value = inputMap[event.type];\n\n\t\t\t\t\tif (value === 'pointer') {\n\t\t\t\t\t\tvalue = pointerType(event);\n\t\t\t\t\t}\n\n\t\t\t\t\tvar ignoreMatch = !specificMap.length && ignoreMap.indexOf(eventKey) === -1;\n\n\t\t\t\t\tvar specificMatch = specificMap.length && specificMap.indexOf(eventKey) !== -1;\n\n\t\t\t\t\tvar shouldUpdate = value === 'keyboard' && eventKey && (ignoreMatch || specificMatch) || value === 'mouse' || value === 'touch';\n\n\t\t\t\t\t// prevent touch detection from being overridden by event execution order\n\t\t\t\t\tif (validateTouch(value)) {\n\t\t\t\t\t\tshouldUpdate = false;\n\t\t\t\t\t}\n\n\t\t\t\t\tif (shouldUpdate && currentInput !== value) {\n\t\t\t\t\t\tcurrentInput = value;\n\n\t\t\t\t\t\tpersistInput('input', currentInput);\n\t\t\t\t\t\tdoUpdate('input');\n\t\t\t\t\t}\n\n\t\t\t\t\tif (shouldUpdate && currentIntent !== value) {\n\t\t\t\t\t\t// preserve intent for keyboard interaction with form fields\n\t\t\t\t\t\tvar activeElem = document.activeElement;\n\t\t\t\t\t\tvar notFormInput = activeElem && activeElem.nodeName && (formInputs.indexOf(activeElem.nodeName.toLowerCase()) === -1 || activeElem.nodeName.toLowerCase() === 'button' && !checkClosest(activeElem, 'form'));\n\n\t\t\t\t\t\tif (notFormInput) {\n\t\t\t\t\t\t\tcurrentIntent = value;\n\n\t\t\t\t\t\t\tpersistInput('intent', currentIntent);\n\t\t\t\t\t\t\tdoUpdate('intent');\n\t\t\t\t\t\t}\n\t\t\t\t\t}\n\t\t\t\t};\n\n\t\t\t\t// updates the doc and `inputTypes` array with new input\n\t\t\t\tvar doUpdate = function doUpdate(which) {\n\t\t\t\t\tdocElem.setAttribute('data-what' + which, which === 'input' ? currentInput : currentIntent);\n\n\t\t\t\t\tfireFunctions(which);\n\t\t\t\t};\n\n\t\t\t\t// updates input intent for `mousemove` and `pointermove`\n\t\t\t\tvar setIntent = function setIntent(event) {\n\t\t\t\t\tvar value = inputMap[event.type];\n\n\t\t\t\t\tif (value === 'pointer') {\n\t\t\t\t\t\tvalue = pointerType(event);\n\t\t\t\t\t}\n\n\t\t\t\t\t// test to see if `mousemove` happened relative to the screen to detect scrolling versus mousemove\n\t\t\t\t\tdetectScrolling(event);\n\n\t\t\t\t\t// only execute if scrolling isn't happening\n\t\t\t\t\tif ((!isScrolling && !validateTouch(value) || isScrolling && event.type === 'wheel' || event.type === 'mousewheel' || event.type === 'DOMMouseScroll') && currentIntent !== value) {\n\t\t\t\t\t\tcurrentIntent = value;\n\n\t\t\t\t\t\tpersistInput('intent', currentIntent);\n\t\t\t\t\t\tdoUpdate('intent');\n\t\t\t\t\t}\n\t\t\t\t};\n\n\t\t\t\tvar setElement = function setElement(event) {\n\t\t\t\t\tif (!event.target.nodeName) {\n\t\t\t\t\t\t// If nodeName is undefined, clear the element\n\t\t\t\t\t\t// This can happen if click inside an <svg> element.\n\t\t\t\t\t\tclearElement();\n\t\t\t\t\t\treturn;\n\t\t\t\t\t}\n\n\t\t\t\t\tcurrentElement = event.target.nodeName.toLowerCase();\n\t\t\t\t\tdocElem.setAttribute('data-whatelement', currentElement);\n\n\t\t\t\t\tif (event.target.classList && event.target.classList.length) {\n\t\t\t\t\t\tdocElem.setAttribute('data-whatclasses', event.target.classList.toString().replace(' ', ','));\n\t\t\t\t\t}\n\t\t\t\t};\n\n\t\t\t\tvar clearElement = function clearElement() {\n\t\t\t\t\tcurrentElement = null;\n\n\t\t\t\t\tdocElem.removeAttribute('data-whatelement');\n\t\t\t\t\tdocElem.removeAttribute('data-whatclasses');\n\t\t\t\t};\n\n\t\t\t\tvar persistInput = function persistInput(which, value) {\n\t\t\t\t\tif (shouldPersist) {\n\t\t\t\t\t\ttry {\n\t\t\t\t\t\t\twindow.sessionStorage.setItem('what-' + which, value);\n\t\t\t\t\t\t} catch (e) {\n\t\t\t\t\t\t\t// fail silently\n\t\t\t\t\t\t}\n\t\t\t\t\t}\n\t\t\t\t};\n\n\t\t\t\t/*\n     * utilities\n     */\n\n\t\t\t\tvar pointerType = function pointerType(event) {\n\t\t\t\t\tif (typeof event.pointerType === 'number') {\n\t\t\t\t\t\treturn pointerMap[event.pointerType];\n\t\t\t\t\t} else {\n\t\t\t\t\t\t// treat pen like touch\n\t\t\t\t\t\treturn event.pointerType === 'pen' ? 'touch' : event.pointerType;\n\t\t\t\t\t}\n\t\t\t\t};\n\n\t\t\t\t// prevent touch detection from being overridden by event execution order\n\t\t\t\tvar validateTouch = function validateTouch(value) {\n\t\t\t\t\tvar timestamp = Date.now();\n\n\t\t\t\t\tvar touchIsValid = value === 'mouse' && currentInput === 'touch' && timestamp - currentTimestamp < 200;\n\n\t\t\t\t\tcurrentTimestamp = timestamp;\n\n\t\t\t\t\treturn touchIsValid;\n\t\t\t\t};\n\n\t\t\t\t// detect version of mouse wheel event to use\n\t\t\t\t// via https://developer.mozilla.org/en-US/docs/Web/API/Element/wheel_event\n\t\t\t\tvar detectWheel = function detectWheel() {\n\t\t\t\t\tvar wheelType = null;\n\n\t\t\t\t\t// Modern browsers support \"wheel\"\n\t\t\t\t\tif ('onwheel' in document.createElement('div')) {\n\t\t\t\t\t\twheelType = 'wheel';\n\t\t\t\t\t} else {\n\t\t\t\t\t\t// Webkit and IE support at least \"mousewheel\"\n\t\t\t\t\t\t// or assume that remaining browsers are older Firefox\n\t\t\t\t\t\twheelType = document.onmousewheel !== undefined ? 'mousewheel' : 'DOMMouseScroll';\n\t\t\t\t\t}\n\n\t\t\t\t\treturn wheelType;\n\t\t\t\t};\n\n\t\t\t\t// runs callback functions\n\t\t\t\tvar fireFunctions = function fireFunctions(type) {\n\t\t\t\t\tfor (var i = 0, len = functionList.length; i < len; i++) {\n\t\t\t\t\t\tif (functionList[i].type === type) {\n\t\t\t\t\t\t\tfunctionList[i].fn.call(undefined, type === 'input' ? currentInput : currentIntent);\n\t\t\t\t\t\t}\n\t\t\t\t\t}\n\t\t\t\t};\n\n\t\t\t\t// finds matching element in an object\n\t\t\t\tvar objPos = function objPos(match) {\n\t\t\t\t\tfor (var i = 0, len = functionList.length; i < len; i++) {\n\t\t\t\t\t\tif (functionList[i].fn === match) {\n\t\t\t\t\t\t\treturn i;\n\t\t\t\t\t\t}\n\t\t\t\t\t}\n\t\t\t\t};\n\n\t\t\t\tvar detectScrolling = function detectScrolling(event) {\n\t\t\t\t\tif (mousePos.x !== event.screenX || mousePos.y !== event.screenY) {\n\t\t\t\t\t\tisScrolling = false;\n\n\t\t\t\t\t\tmousePos.x = event.screenX;\n\t\t\t\t\t\tmousePos.y = event.screenY;\n\t\t\t\t\t} else {\n\t\t\t\t\t\tisScrolling = true;\n\t\t\t\t\t}\n\t\t\t\t};\n\n\t\t\t\t// manual version of `closest()`\n\t\t\t\tvar checkClosest = function checkClosest(elem, tag) {\n\t\t\t\t\tvar ElementPrototype = window.Element.prototype;\n\n\t\t\t\t\tif (!ElementPrototype.matches) {\n\t\t\t\t\t\tElementPrototype.matches = ElementPrototype.msMatchesSelector || ElementPrototype.webkitMatchesSelector;\n\t\t\t\t\t}\n\n\t\t\t\t\tif (!ElementPrototype.closest) {\n\t\t\t\t\t\tdo {\n\t\t\t\t\t\t\tif (elem.matches(tag)) {\n\t\t\t\t\t\t\t\treturn elem;\n\t\t\t\t\t\t\t}\n\n\t\t\t\t\t\t\telem = elem.parentElement || elem.parentNode;\n\t\t\t\t\t\t} while (elem !== null && elem.nodeType === 1);\n\n\t\t\t\t\t\treturn null;\n\t\t\t\t\t} else {\n\t\t\t\t\t\treturn elem.closest(tag);\n\t\t\t\t\t}\n\t\t\t\t};\n\n\t\t\t\t/*\n     * init\n     */\n\n\t\t\t\t// don't start script unless browser cuts the mustard\n\t\t\t\t// (also passes if polyfills are used)\n\t\t\t\tif ('addEventListener' in window && Array.prototype.indexOf) {\n\t\t\t\t\tsetUp();\n\t\t\t\t}\n\n\t\t\t\t/*\n     * api\n     */\n\n\t\t\t\treturn {\n\t\t\t\t\t// returns string: the current input type\n\t\t\t\t\t// opt: 'intent'|'input'\n\t\t\t\t\t// 'input' (default): returns the same value as the `data-whatinput` attribute\n\t\t\t\t\t// 'intent': includes `data-whatintent` value if it's different than `data-whatinput`\n\t\t\t\t\task: function ask(opt) {\n\t\t\t\t\t\treturn opt === 'intent' ? currentIntent : currentInput;\n\t\t\t\t\t},\n\n\t\t\t\t\t// returns string: the currently focused element or null\n\t\t\t\t\telement: function element() {\n\t\t\t\t\t\treturn currentElement;\n\t\t\t\t\t},\n\n\t\t\t\t\t// overwrites ignored keys with provided array\n\t\t\t\t\tignoreKeys: function ignoreKeys(arr) {\n\t\t\t\t\t\tignoreMap = arr;\n\t\t\t\t\t},\n\n\t\t\t\t\t// overwrites specific char keys to update on\n\t\t\t\t\tspecificKeys: function specificKeys(arr) {\n\t\t\t\t\t\tspecificMap = arr;\n\t\t\t\t\t},\n\n\t\t\t\t\t// attach functions to input and intent \"events\"\n\t\t\t\t\t// funct: function to fire on change\n\t\t\t\t\t// eventType: 'input'|'intent'\n\t\t\t\t\tregisterOnChange: function registerOnChange(fn, eventType) {\n\t\t\t\t\t\tfunctionList.push({\n\t\t\t\t\t\t\tfn: fn,\n\t\t\t\t\t\t\ttype: eventType || 'input'\n\t\t\t\t\t\t});\n\t\t\t\t\t},\n\n\t\t\t\t\tunRegisterOnChange: function unRegisterOnChange(fn) {\n\t\t\t\t\t\tvar position = objPos(fn);\n\n\t\t\t\t\t\tif (position || position === 0) {\n\t\t\t\t\t\t\tfunctionList.splice(position, 1);\n\t\t\t\t\t\t}\n\t\t\t\t\t},\n\n\t\t\t\t\tclearStorage: function clearStorage() {\n\t\t\t\t\t\twindow.sessionStorage.clear();\n\t\t\t\t\t}\n\t\t\t\t};\n\t\t\t}();\n\n\t\t\t/***/\n\t\t}]\n\t\t/******/)\n\t);\n});\n;\n/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../webpack/buildin/module.js */ \"./node_modules/webpack/buildin/module.js\")(module)))\n\n//# sourceURL=webpack:///./node_modules/what-input/dist/what-input.js?")},"./src/js/app.js":function(module,exports,__webpack_require__){"use strict";eval("\n\nvar _jquery = __webpack_require__(/*! jquery */ \"jquery\");\n\nvar _jquery2 = _interopRequireDefault(_jquery);\n\nvar _whatInput = __webpack_require__(/*! what-input */ \"./node_modules/what-input/dist/what-input.js\");\n\nvar _whatInput2 = _interopRequireDefault(_whatInput);\n\nfunction _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }\n\n// import 'retinajs/dist/retina.min';\n// // import 'slick-carousel/slick/slick.min';\n//\n// import './freesiaempire-main.js'\n// import './freesiaempire-sticky-scroll.js';\n// import './navigation.js';\n\n(0, _jquery2.default)(document).ready(function () {\n\n    // Bootstrap specific functions and styling\n    function wpex_staticheader() {\n        var header_height = jQuery('.navbar').outerHeight();\n        jQuery('#page').css({\n            paddingTop: header_height\n        });\n\n        if (jQuery('#wpadminbar').length) {\n            var admin_height = jQuery('#wpadminbar').outerHeight();\n            jQuery('.navbar').css({\n                position: 'fixed',\n                top: admin_height\n            });\n        }\n    }\n\n    wpex_staticheader();\n\n    jQuery(window).resize(function () {\n        wpex_staticheader();\n    });\n\n    jQuery(window).bind('orientationchange', function () {\n        var header_height = jQuery('.navbar').outerHeight();\n        jQuery('#page').css({\n            paddingTop: header_height\n        });\n\n        if (jQuery('#wpadminbar').length) {\n            var admin_height = jQuery('#wpadminbar').outerHeight();\n            jQuery('.navbar').css({\n                position: 'fixed',\n                top: admin_height\n            });\n        }\n    });\n\n    // here for each comment reply link of WordPress\n    jQuery('.fscf-div-clear .fscf-div-field-left').addClass('form-group');\n    jQuery('.fscf-div-field .fscf-input-text').addClass('form-control');\n    jQuery('.fscf-div-field .fscf-input-textarea').addClass('form-control');\n\n    jQuery('.comment-reply-link').addClass('btn btn-sm btn-default');\n\n    // here for the submit button of the comment reply form\n    jQuery('#submit, button[type=submit], button, html input[type=button], input[type=reset], input[type=submit]').addClass('btn btn-default');\n\n    // Now we'll add some classes for the WordPress default widgets - let's go\n    jQuery('.widget_rss ul').addClass('media-list');\n\n    // Add Bootstrap style for drop-downs\n    jQuery('.postform').addClass('form-control');\n\n    // Add Bootstrap styling for tables\n    jQuery('table#wp-calendar').addClass('table table-striped');\n\n    jQuery('#submit, .tagcloud, button[type=submit], .comment-reply-link, .widget_rss ul, .postform, table#wp-calendar').show(\"fast\");\n\n    jQuery(function () {\n        jQuery('.pop').click(function () {\n            jQuery('#imagemodal .imagepreview').attr('src', jQuery(this).attr('data-img-url'));\n            jQuery('#imagemodal .modal-title').html(jQuery(this).attr('data-img-alt'));\n            jQuery('#imagemodal').modal('show');\n        });\n    });\n\n    //Check to see if the window is top if not then display button\n    jQuery(window).scroll(function () {\n        if (jQuery(this).scrollTop() > 100) {\n            jQuery('.scroll-to-top').fadeIn();\n        } else {\n            jQuery('.scroll-to-top').fadeOut();\n        }\n    });\n\n    //Click event to scroll to top\n    jQuery('.scroll-to-top').click(function () {\n        jQuery('html, body').animate({ scrollTop: 0 }, 800);\n        return false;\n    });\n\n    (0, _jquery2.default)(function () {\n        (0, _jquery2.default)('.carousel-caption a[href*=#]:not([href=#]), .jumbo-caption a[href*=#]:not([href=#])').click(function () {\n            if (location.pathname.replace(/^\\//, '') === this.pathname.replace(/^\\//, '') && location.hostname === this.hostname) {\n                var target = jQuery(this.hash);\n                target = target.length ? target : (0, _jquery2.default)('[name=' + this.hash.slice(1) + ']');\n                if (target.length) {\n                    (0, _jquery2.default)('html,body').animate({\n                        scrollTop: target.offset().top - 50\n                    }, 1000);\n                    return false;\n                }\n            }\n        });\n        (0, _jquery2.default)('.opt-jumpmenu a[href*=#]:not([href=#])').click(function () {\n            if (location.pathname.replace(/^\\//, '') === this.pathname.replace(/^\\//, '') && location.hostname === this.hostname) {\n                var target = (0, _jquery2.default)(this.hash);\n                target = target.length ? target : (0, _jquery2.default)('[name=' + this.hash.slice(1) + ']');\n                if (target.length) {\n                    (0, _jquery2.default)('html,body').animate({\n                        scrollTop: target.offset().top - 125\n                    }, 1000);\n                    return false;\n                }\n            }\n        });\n    });\n});\n\n//# sourceURL=webpack:///./src/js/app.js?")},0:function(module,exports,__webpack_require__){eval('module.exports = __webpack_require__(/*! /Users/mattpeternell/Sites/ag-wp/wp-content/themes/aga-theme/src/js/app.js */"./src/js/app.js");\n\n\n//# sourceURL=webpack:///multi_./src/js/app.js?')},jquery:function(module,exports){eval("module.exports = jQuery;\n\n//# sourceURL=webpack:///external_%22jQuery%22?")}});