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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.initNav = initNav;

__webpack_require__(5);

var rootUrl = "https://www.apollographql.com/";

function url(path) {
  return rootUrl + path + "/";
}

var nav = [{
  title: "Home",
  href: "/",
  class: "home"
}, {
  title: "Client",
  href: "/client",
  class: "client",
  children: [{
    title: "Features",
    href: "/client/"
  }, {
    title: "React + React Native",
    href: "/docs/react/"
  }, {
    title: "Angular",
    href: "/docs/angular/"
  }, {
    title: "Vue.js",
    href: "https://github.com/akryum/vue-apollo",
    newPage: true
  }, {
    title: "Apollo Link",
    href: "/docs/link/"
  }, {
    title: "Native iOS",
    href: "/docs/ios/"
  }, {
    title: "Native Android",
    href: "https://github.com/apollographql/apollo-android",
    newPage: true
  }]
}, {
  title: "Engine",
  href: "/engine",
  class: "engine",
  children: [{
    title: "Features",
    href: "/engine/"
  }, {
    title: "Docs",
    href: "/docs/engine/"
  }]
}, {
  title: "Servers",
  href: "/servers",
  class: "servers",
  children: [{
    title: "Features",
    href: "/servers/"
  }, {
    title: "Apollo Server",
    href: "/docs/apollo-server/"
  }, {
    title: "graphql-tools",
    href: "/docs/graphql-tools/"
  }, {
    title: "Schema Stitching",
    href: "/docs/graphql-tools/schema-stitching.html"
  }, {
    title: "GraphQL Subscriptions",
    href: "/docs/graphql-subscriptions/"
  }, {
    title: "Apollo Tracing",
    href: "https://github.com/apollographql/apollo-tracing",
    newPage: true
  }, {
    title: "Apollo Cache Control",
    href: "https://github.com/apollographql/apollo-cache-control",
    newPage: true
  }]
}, {
  title: "Docs",
  href: "/docs/",
  class: "docs",
  children: [{
    title: "Index",
    href: "/docs/"
  }, {
    title: "React + React Native",
    href: "/docs/react/"
  }, {
    title: "Angular",
    href: "/docs/angular/"
  }, {
    title: "Vue.js",
    href: "https://github.com/akryum/vue-apollo",
    newPage: true
  }, {
    title: "Apollo Link",
    href: "/docs/link/"
  }, {
    title: "Native iOS",
    href: "/docs/ios/"
  }, {
    title: "Native Android",
    href: "https://github.com/apollographql/apollo-android",
    newPage: true
  }, {
    title: "Apollo Engine",
    href: "/docs/engine/"
  }, {
    title: "Apollo Server",
    href: "/docs/apollo-server/"
  }, {
    title: "graphql-tools",
    href: "/docs/graphql-tools/"
  }, {
    title: "Schema Stitching",
    href: "/docs/graphql-tools/schema-stitching.html"
  }, {
    title: "GraphQL Subscriptions",
    href: "/docs/graphql-subscriptions/"
  }, {
    title: "Contribute",
    href: "/docs/community/"
  }]
}, {
  title: "Support",
  href: "/support/",
  class: "support"
}, {
  title: "Community",
  href: "/docs/community/",
  class: "community",
  children: [{
    title: "Get Involved",
    href: "/docs/community/"
  }, {
    title: "Blog",
    href: "https://dev-blog.apollodata.com/",
    newPage: true
  }, {
    title: "Slack",
    href: "#slack"
  }, {
    title: "Twitter",
    href: "https://twitter.com/apollographql",
    newPage: true
  }, {
    title: "YouTube",
    href: "https://www.youtube.com/c/ApolloGraphQL",
    newPage: true
  }, {
    title: "Contribute",
    href: "/docs/community/"
  }, {
    title: "GraphQL Summit",
    href: "https://summit.graphql.com/",
    newPage: true
  }, {
    title: "Explore GraphQL",
    href: "https://www.graphql.com/",
    newPage: true
  }]
}];

function navHtml(options) {
  return "\n  <nav id=\"" + options.id + "\" class=\"" + options.theme + "\">\n    <div class=\"nav-header\">\n      <a class=\"nav-logo\" href=\"/\">" + apolloLogoSvg + "</a>\n      <a id=\"nav-root-menu-button\" class=\"menu-button mobile-only\">" + menuIconSvg + "</a>\n    </div>\n\n    <div class=\"nav-menu " + options.page + "\">\n      " + nav.map(function (item) {
    if (item.children) {
      return "<div class=\"sub-menu\" id=\"" + item.class + "\">\n            " + navLink(item) + "\n            <div class=\"popup\">\n              <div class=\"menu-content\">\n                " + item.children.map(function (child) {
        return "\n                    <a class=\"nav-item\" href=\"" + child.href + "\"\n                        " + (child.newPage ? 'target="_blank"' : '') + ">\n                      <span>" + child.title + "</span>\n                    </a>\n                  ";
      }).join('') + "\n              </div>\n            </div>\n          </div>";
    } else {
      return navLink(item);
    }
  }).join('') + "\n    </div>\n  </nav>\n\n";
}

function navLink(item) {
  return "<a class=\"nav-item main " + item.class + "\" href=\"" + item.href + "\" " + (item.newPage ? 'target="_blank"' : '') + ">\n    <span>" + item.title + "</span>\n  </a>";
}

function $id(id) {
  return document.getElementById(id);
}

function initNav() {
  var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : { id: 'nav' };
  var targetId = arguments[1];

  options.id = options.id || 'nav';

  $id(targetId).innerHTML = navHtml(options);

  var btn = $id('nav-root-menu-button');
  var nav = $id(options.id);
  var allSubNavs = nav.querySelectorAll('.sub-menu');
  var mq = window.matchMedia("(max-width: 600px)");

  if (!btn) return;
  btn.addEventListener('click', function (e) {
    if (nav.classList.contains('menu-open')) {
      nav.classList.remove('menu-open');
      allSubNavs.forEach(function (otherElement) {
        if (otherElement.classList.contains('open')) {
          otherElement.classList.remove('open');
        }
      });
    } else {
      nav.classList.add('menu-open');
    }
  });

  if (mq.matches) {
    allSubNavs.forEach(function (element) {
      element.addEventListener('click', function (event) {
        // sub menu is open: close it and follow link
        if (element.classList.contains('open')) {
          element.classList.remove('open');

          // sub menu is not open
        } else {
          event.preventDefault();
          // close other sub menus that may be open
          allSubNavs.forEach(function (otherElement) {
            if (otherElement.classList.contains('open')) {
              otherElement.classList.remove('open');
            }
          });
          element.classList.add('open');
        }
      });
    });
  }
}

var apolloLogoSvg = "<svg viewBox=\"0,0,816,240\">\n<path class=\"apollo\" d=\"M169.68,161.48h-22l-25.27-71.7L108.22,129h21.84l6,17.07H102.89l-5.74,15.43h-22l35.1-91.1h24.31Zm392.25,0V144.41H523.41v-74H503.88v91.1Zm112.57,0V144.41H636v-74H616.44v91.1ZM395.71,86.71A29.29,29.29,0,1,0,425,116a29.32,29.32,0,0,0-29.29-29.29m0-17.83A47.12,47.12,0,1,1,348.6,116a47.12,47.12,0,0,1,47.12-47.12ZM764.28,86.71A29.29,29.29,0,1,0,793.57,116a29.32,29.32,0,0,0-29.29-29.29m0-17.83A47.12,47.12,0,1,1,717.16,116a47.12,47.12,0,0,1,47.12-47.12Zm-466,31.38c0,16.19-13.12,29.87-29.32,29.87H245.9v31.35H226.5V70.38H269C285.17,70.38,298.29,84.06,298.29,100.25Zm-17.83,0c0-6.33-5.15-12-11.49-12H245.9V112.3H269C275.31,112.3,280.47,106.59,280.47,100.25Zm-70.71,88.87a5,5,0,0,0-4.09,2.12s-4.37,5-6.73,7.35a108.71,108.71,0,1,1-8.49-161.28A12.25,12.25,0,1,0,197.3,30a118.67,118.67,0,1,0,16,167.71,5,5,0,0,0-3.55-8.56Z\" transform=\"translate(-3.46 -3.12)\"/>\n</svg>\n";

var menuIconSvg = "<svg version=\"1.1\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">\n<path d=\"M3 6h18v2.016h-18v-2.016zM3 12.984v-1.969h18v1.969h-18zM3 18v-2.016h18v2.016h-18z\"></path>\n</svg>\n  ";

// Make sure our docs have a single URL
// We have to do this redirect in-browser because Netlify doesn't know we are
// putting a new URL on top.
if (window.location.pathname.startsWith('/docs/link/')) {
  if (!window.location.hostname.startsWith('deploy-preview') && window.location.hostname.indexOf('netlify') !== -1) {
    window.location.hostname = 'www.apollographql.com';
  }
}

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.initOverlays = initOverlays;
function $id(id) {
  return document.getElementById(id);
}

function clearHash() {
  history.replaceState(null, document.title, window.location.pathname + window.location.search);
}

function close(target) {
  if (!$id(target)) {
    // You can't close what's not there
    return;
  }

  document.removeEventListener("keydown", escapeListener, false);
  $id(target).setAttribute("class", "overlay");
  clearHash();
}

function open(target) {
  document.addEventListener("keydown", escapeListener);
  $id(target).setAttribute("class", "overlay visible");
  location.hash = target.replace("-overlay", "");
}

function escapeListener(event) {
  if (event.keyCode === 27) {
    closeAll();
    document.removeEventListener("keydown", escapeListener, false);
  }
}

function closeAll() {
  close("slack-overlay");
  close("contact-sales-overlay");
  close("contact-us-overlay");
}

function route() {
  if (location.hash == "#slack") {
    open("slack-overlay");
  } else if (location.hash == "#contact-sales") {
    open("contact-sales-overlay");
  } else if (location.hash == "#contact-us") {
    open("contact-us-overlay");
  }
}

function initOverlays() {
  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = document.getElementsByClassName("overlay-close")[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var el = _step.value;

      el.addEventListener("click", function () {
        closeAll();
      });
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator.return) {
        _iterator.return();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }

  route();
  window.onhashchange = function () {
    route();
  };

  var slackFormEl = $id("slack-form");
  if (slackFormEl) {
    slackFormEl.addEventListener("submit", function (event) {
      event.preventDefault();
      var inputs = $id("slack-form").getElementsByTagName("input");
      for (var i = 0; i < inputs.length; i++) {
        inputs[i].disabled = true;
      }
      var email = event.target.email.value;

      var i = document.createElement("img");
      var inviteURI = "https://29268947-a94c-4d45-baa2-9641a9848cad.trayapp.io?email=" + email;
      i.src = inviteURI;
      setTimeout(function () {
        close("slack-overlay");
      }, 2000);
    });
  }
}

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _nav = __webpack_require__(0);

var _overlays = __webpack_require__(1);

window.ApolloNav = {
  initNav: _nav.initNav
};

window.addEventListener("load", function () {
  (0, _overlays.initOverlays)();
  //initNav();
}, false);

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(4)(false);
// imports


// module
exports.push([module.i, ".font-x1 {\n  font-size: 56px;\n  line-height: 1;\n}\n.gradient-light-bottom-blue {\n  background-image: linear-gradient(-178deg, #FFFFFF 0%, #FFFFFF 85%, #EFF2F6 100%);\n}\nnav {\n  padding-left: 1.25rem;\n  padding-right: 1.25rem;\n  padding-top: 1.25rem;\n  padding-bottom: 1.25rem;\n  position: absolute;\n  left: 0;\n  right: 0;\n  top: 0;\n  display: flex;\n  flex-direction: row;\n  justify-content: space-between;\n  align-items: center;\n}\n@media screen and (min-width: 1000px) {\n  nav {\n    max-width: 1000px;\n    margin-left: auto;\n    margin-right: auto;\n  }\n}\n@media screen and (min-width: 600px) {\n  nav {\n    padding-left: 1.875rem;\n    padding-right: 1.875rem;\n  }\n}\n@media screen and (min-width: 600px) {\n  nav {\n    padding-top: 1.875rem;\n    padding-bottom: 1.875rem;\n  }\n}\nnav .nav-logo {\n  width: 100px;\n  display: inline-block;\n  margin-top: 7px;\n}\nnav .nav-logo svg {\n  width: 100%;\n}\nnav .nav-logo svg path {\n  fill: #444;\n}\nnav .nav-menu {\n  flex: 2;\n  text-align: right;\n}\nnav .nav-item,\nnav .sub-menu {\n  display: inline-block;\n  vertical-align: top;\n}\nnav .nav-item {\n  padding-top: 10px;\n  padding-bottom: 10px;\n}\nnav .nav-menu > * + * {\n  margin-left: 40px;\n}\nnav .sub-menu {\n  position: relative;\n  padding: 0;\n}\nnav .sub-menu .popup {\n  position: absolute;\n  top: 100%;\n  right: -20px;\n  z-index: 1000;\n}\nnav .sub-menu .menu-content {\n  margin-top: 5px;\n}\nnav .sub-menu .menu-content .nav-item {\n  display: block;\n  text-align: right;\n  white-space: nowrap;\n  padding-left: 20px;\n  padding-right: 20px;\n}\nnav .sub-menu .menu-content .nav-item:hover {\n  background-color: rgba(102, 102, 102, 0.15);\n}\nnav .sub-menu .popup {\n  -webkit-transition: all 350ms ease-in-out;\n  -moz-transition: all 350ms ease-in-out;\n  -o-transition: all 350ms ease-in-out;\n  transition: all 350ms ease-in-out;\n  pointer-events: none;\n  opacity: 0;\n  padding: 5px;\n  margin: -5px;\n  -webkit-transform: translate3d(0, -5px, 0);\n  -moz-transform: translate3d(0, -5px, 0);\n  -o-transform: translate3d(0, -5px, 0);\n  -ms-transform: translate3d(0, -5px, 0);\n  transform: translate3d(0, -5px, 0);\n}\nnav .sub-menu:hover .popup {\n  opacity: 1;\n  -webkit-transition: all 80ms ease-in-out;\n  -moz-transition: all 80ms ease-in-out;\n  -o-transition: all 80ms ease-in-out;\n  transition: all 80ms ease-in-out;\n  pointer-events: all;\n  -webkit-transform: translate3d(0, 0, 0);\n  -moz-transform: translate3d(0, 0, 0);\n  -o-transform: translate3d(0, 0, 0);\n  -ms-transform: translate3d(0, 0, 0);\n  transform: translate3d(0, 0, 0);\n}\nnav .sub-menu .menu-content {\n  background-color: #f8f8f8;\n  -webkit-box-shadow: 0px 2px 4px rgba(51, 51, 51, 0.3);\n  -moz-box-shadow: 0px 2px 4px rgba(51, 51, 51, 0.3);\n  box-shadow: 0px 2px 4px rgba(51, 51, 51, 0.3);\n}\n.mobile-only {\n  display: none;\n}\n@media (max-width: 600px) {\n  .mobile-only {\n    display: block;\n  }\n  nav {\n    position: static;\n    margin-top: -50px;\n    top: 0;\n    left: 0;\n    right: 0;\n    flex-direction: column;\n    text-align: left;\n    align-items: stretch;\n    padding-left: 0;\n    padding-right: 0;\n  }\n  nav .nav-header {\n    display: flex;\n    flex-direction: row;\n    justify-content: space-between;\n    width: 100%;\n    align-items: center;\n  }\n  nav .nav-header .menu-button {\n    margin-right: 20px;\n  }\n  nav .nav-logo {\n    margin-left: 20px;\n    margin-right: 20px;\n    margin-bottom: 10px;\n  }\n  nav .nav-menu {\n    padding-bottom: 10px;\n  }\n  nav .nav-menu > * {\n    display: block;\n    text-align: left;\n    padding-left: 20px;\n    padding-right: 20px;\n  }\n  nav .nav-menu > * + * {\n    margin-left: 0;\n  }\n  nav .nav-menu .nav-item.main {\n    color: #ffffff !important;\n  }\n  nav .nav-menu .sub-menu {\n    padding-left: 0;\n  }\n  nav .nav-menu .sub-menu.open {\n    background: #1a1c22;\n  }\n  nav .nav-menu .sub-menu.open .popup {\n    padding: 0;\n    display: block;\n    position: relative;\n    /* Rectangle 13: */\n    background-image: linear-gradient(179deg, #2C2F39 2%, #363944 14%, #32353D 100%);\n  }\n  nav .nav-menu .sub-menu.open .popup .menu-content {\n    background: transparent;\n    box-shadow: none;\n  }\n  nav .nav-menu .sub-menu.open .popup .menu-content .nav-item {\n    text-align: left;\n    padding-left: 40px;\n    font-weight: normal;\n    color: white;\n  }\n  nav .nav-menu .sub-menu .nav-item.main {\n    margin-left: 20px;\n  }\n  nav .nav-menu .sub-menu .popup {\n    display: none;\n    margin: 0;\n    margin-left: -20px;\n  }\n  nav .nav-menu {\n    display: none;\n  }\n  nav.menu-open .nav-menu {\n    display: block;\n  }\n  nav.dark .nav-menu {\n    /* Rectangle 3: */\n    background-image: linear-gradient(-180deg, #000000 5%, #1E1E1E 100%);\n  }\n  nav.dark .menu-button path {\n    fill: #fff;\n  }\n}\nnav a {\n  font-weight: 600;\n}\nnav.dark a {\n  color: #FFB9DE;\n}\nnav.dark a:hover {\n  color: #fff;\n  text-shadow: 0px 0px 3px rgba(255, 255, 255, 0.2);\n}\nnav.dark .nav-logo svg path {\n  fill: #fff;\n}\nnav.dark .menu-content {\n  background-color: transparent;\n  background-image: linear-gradient(180deg, #D15E95 0%, #C45D50 100%);\n  box-shadow: 0 3px 6px 0 rgba(30, 30, 30, 0.6);\n}\nnav.dark .menu-content .nav-item {\n  color: #fff;\n}\nnav.dark .menu-content .nav-item:hover {\n  background-color: rgba(134, 44, 59, 0.57);\n}\n", ""]);

// exports


/***/ }),
/* 4 */
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function(useSourceMap) {
	var list = [];

	// return the list of modules as css string
	list.toString = function toString() {
		return this.map(function (item) {
			var content = cssWithMappingToString(item, useSourceMap);
			if(item[2]) {
				return "@media " + item[2] + "{" + content + "}";
			} else {
				return content;
			}
		}).join("");
	};

	// import a list of modules into the list
	list.i = function(modules, mediaQuery) {
		if(typeof modules === "string")
			modules = [[null, modules, ""]];
		var alreadyImportedModules = {};
		for(var i = 0; i < this.length; i++) {
			var id = this[i][0];
			if(typeof id === "number")
				alreadyImportedModules[id] = true;
		}
		for(i = 0; i < modules.length; i++) {
			var item = modules[i];
			// skip already imported module
			// this implementation is not 100% perfect for weird media query combinations
			//  when a module is imported multiple times with different media queries.
			//  I hope this will never occur (Hey this way we have smaller bundles)
			if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
				if(mediaQuery && !item[2]) {
					item[2] = mediaQuery;
				} else if(mediaQuery) {
					item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
				}
				list.push(item);
			}
		}
	};
	return list;
};

function cssWithMappingToString(item, useSourceMap) {
	var content = item[1] || '';
	var cssMapping = item[3];
	if (!cssMapping) {
		return content;
	}

	if (useSourceMap && typeof btoa === 'function') {
		var sourceMapping = toComment(cssMapping);
		var sourceURLs = cssMapping.sources.map(function (source) {
			return '/*# sourceURL=' + cssMapping.sourceRoot + source + ' */'
		});

		return [content].concat(sourceURLs).concat([sourceMapping]).join('\n');
	}

	return [content].join('\n');
}

// Adapted from convert-source-map (MIT)
function toComment(sourceMap) {
	// eslint-disable-next-line no-undef
	var base64 = btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap))));
	var data = 'sourceMappingURL=data:application/json;charset=utf-8;base64,' + base64;

	return '/*# ' + data + ' */';
}


/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(3);
if(typeof content === 'string') content = [[module.i, content, '']];
// Prepare cssTransformation
var transform;

var options = {"hmr":true}
options.transform = transform
// add the styles to the DOM
var update = __webpack_require__(6)(content, options);
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!../../node_modules/css-loader/index.js!../../node_modules/less-loader/dist/cjs.js!./nav.import.less", function() {
			var newContent = require("!!../../node_modules/css-loader/index.js!../../node_modules/less-loader/dist/cjs.js!./nav.import.less");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/

var stylesInDom = {};

var	memoize = function (fn) {
	var memo;

	return function () {
		if (typeof memo === "undefined") memo = fn.apply(this, arguments);
		return memo;
	};
};

var isOldIE = memoize(function () {
	// Test for IE <= 9 as proposed by Browserhacks
	// @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
	// Tests for existence of standard globals is to allow style-loader
	// to operate correctly into non-standard environments
	// @see https://github.com/webpack-contrib/style-loader/issues/177
	return window && document && document.all && !window.atob;
});

var getElement = (function (fn) {
	var memo = {};

	return function(selector) {
		if (typeof memo[selector] === "undefined") {
			var styleTarget = fn.call(this, selector);
			// Special case to return head of iframe instead of iframe itself
			if (styleTarget instanceof window.HTMLIFrameElement) {
				try {
					// This will throw an exception if access to iframe is blocked
					// due to cross-origin restrictions
					styleTarget = styleTarget.contentDocument.head;
				} catch(e) {
					styleTarget = null;
				}
			}
			memo[selector] = styleTarget;
		}
		return memo[selector]
	};
})(function (target) {
	return document.querySelector(target)
});

var singleton = null;
var	singletonCounter = 0;
var	stylesInsertedAtTop = [];

var	fixUrls = __webpack_require__(7);

module.exports = function(list, options) {
	if (typeof DEBUG !== "undefined" && DEBUG) {
		if (typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
	}

	options = options || {};

	options.attrs = typeof options.attrs === "object" ? options.attrs : {};

	// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
	// tags it will allow on a page
	if (!options.singleton && typeof options.singleton !== "boolean") options.singleton = isOldIE();

	// By default, add <style> tags to the <head> element
	if (!options.insertInto) options.insertInto = "head";

	// By default, add <style> tags to the bottom of the target
	if (!options.insertAt) options.insertAt = "bottom";

	var styles = listToStyles(list, options);

	addStylesToDom(styles, options);

	return function update (newList) {
		var mayRemove = [];

		for (var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];

			domStyle.refs--;
			mayRemove.push(domStyle);
		}

		if(newList) {
			var newStyles = listToStyles(newList, options);
			addStylesToDom(newStyles, options);
		}

		for (var i = 0; i < mayRemove.length; i++) {
			var domStyle = mayRemove[i];

			if(domStyle.refs === 0) {
				for (var j = 0; j < domStyle.parts.length; j++) domStyle.parts[j]();

				delete stylesInDom[domStyle.id];
			}
		}
	};
};

function addStylesToDom (styles, options) {
	for (var i = 0; i < styles.length; i++) {
		var item = styles[i];
		var domStyle = stylesInDom[item.id];

		if(domStyle) {
			domStyle.refs++;

			for(var j = 0; j < domStyle.parts.length; j++) {
				domStyle.parts[j](item.parts[j]);
			}

			for(; j < item.parts.length; j++) {
				domStyle.parts.push(addStyle(item.parts[j], options));
			}
		} else {
			var parts = [];

			for(var j = 0; j < item.parts.length; j++) {
				parts.push(addStyle(item.parts[j], options));
			}

			stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
		}
	}
}

function listToStyles (list, options) {
	var styles = [];
	var newStyles = {};

	for (var i = 0; i < list.length; i++) {
		var item = list[i];
		var id = options.base ? item[0] + options.base : item[0];
		var css = item[1];
		var media = item[2];
		var sourceMap = item[3];
		var part = {css: css, media: media, sourceMap: sourceMap};

		if(!newStyles[id]) styles.push(newStyles[id] = {id: id, parts: [part]});
		else newStyles[id].parts.push(part);
	}

	return styles;
}

function insertStyleElement (options, style) {
	var target = getElement(options.insertInto)

	if (!target) {
		throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
	}

	var lastStyleElementInsertedAtTop = stylesInsertedAtTop[stylesInsertedAtTop.length - 1];

	if (options.insertAt === "top") {
		if (!lastStyleElementInsertedAtTop) {
			target.insertBefore(style, target.firstChild);
		} else if (lastStyleElementInsertedAtTop.nextSibling) {
			target.insertBefore(style, lastStyleElementInsertedAtTop.nextSibling);
		} else {
			target.appendChild(style);
		}
		stylesInsertedAtTop.push(style);
	} else if (options.insertAt === "bottom") {
		target.appendChild(style);
	} else if (typeof options.insertAt === "object" && options.insertAt.before) {
		var nextSibling = getElement(options.insertInto + " " + options.insertAt.before);
		target.insertBefore(style, nextSibling);
	} else {
		throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
	}
}

function removeStyleElement (style) {
	if (style.parentNode === null) return false;
	style.parentNode.removeChild(style);

	var idx = stylesInsertedAtTop.indexOf(style);
	if(idx >= 0) {
		stylesInsertedAtTop.splice(idx, 1);
	}
}

function createStyleElement (options) {
	var style = document.createElement("style");

	options.attrs.type = "text/css";

	addAttrs(style, options.attrs);
	insertStyleElement(options, style);

	return style;
}

function createLinkElement (options) {
	var link = document.createElement("link");

	options.attrs.type = "text/css";
	options.attrs.rel = "stylesheet";

	addAttrs(link, options.attrs);
	insertStyleElement(options, link);

	return link;
}

function addAttrs (el, attrs) {
	Object.keys(attrs).forEach(function (key) {
		el.setAttribute(key, attrs[key]);
	});
}

function addStyle (obj, options) {
	var style, update, remove, result;

	// If a transform function was defined, run it on the css
	if (options.transform && obj.css) {
	    result = options.transform(obj.css);

	    if (result) {
	    	// If transform returns a value, use that instead of the original css.
	    	// This allows running runtime transformations on the css.
	    	obj.css = result;
	    } else {
	    	// If the transform function returns a falsy value, don't add this css.
	    	// This allows conditional loading of css
	    	return function() {
	    		// noop
	    	};
	    }
	}

	if (options.singleton) {
		var styleIndex = singletonCounter++;

		style = singleton || (singleton = createStyleElement(options));

		update = applyToSingletonTag.bind(null, style, styleIndex, false);
		remove = applyToSingletonTag.bind(null, style, styleIndex, true);

	} else if (
		obj.sourceMap &&
		typeof URL === "function" &&
		typeof URL.createObjectURL === "function" &&
		typeof URL.revokeObjectURL === "function" &&
		typeof Blob === "function" &&
		typeof btoa === "function"
	) {
		style = createLinkElement(options);
		update = updateLink.bind(null, style, options);
		remove = function () {
			removeStyleElement(style);

			if(style.href) URL.revokeObjectURL(style.href);
		};
	} else {
		style = createStyleElement(options);
		update = applyToTag.bind(null, style);
		remove = function () {
			removeStyleElement(style);
		};
	}

	update(obj);

	return function updateStyle (newObj) {
		if (newObj) {
			if (
				newObj.css === obj.css &&
				newObj.media === obj.media &&
				newObj.sourceMap === obj.sourceMap
			) {
				return;
			}

			update(obj = newObj);
		} else {
			remove();
		}
	};
}

var replaceText = (function () {
	var textStore = [];

	return function (index, replacement) {
		textStore[index] = replacement;

		return textStore.filter(Boolean).join('\n');
	};
})();

function applyToSingletonTag (style, index, remove, obj) {
	var css = remove ? "" : obj.css;

	if (style.styleSheet) {
		style.styleSheet.cssText = replaceText(index, css);
	} else {
		var cssNode = document.createTextNode(css);
		var childNodes = style.childNodes;

		if (childNodes[index]) style.removeChild(childNodes[index]);

		if (childNodes.length) {
			style.insertBefore(cssNode, childNodes[index]);
		} else {
			style.appendChild(cssNode);
		}
	}
}

function applyToTag (style, obj) {
	var css = obj.css;
	var media = obj.media;

	if(media) {
		style.setAttribute("media", media)
	}

	if(style.styleSheet) {
		style.styleSheet.cssText = css;
	} else {
		while(style.firstChild) {
			style.removeChild(style.firstChild);
		}

		style.appendChild(document.createTextNode(css));
	}
}

function updateLink (link, options, obj) {
	var css = obj.css;
	var sourceMap = obj.sourceMap;

	/*
		If convertToAbsoluteUrls isn't defined, but sourcemaps are enabled
		and there is no publicPath defined then lets turn convertToAbsoluteUrls
		on by default.  Otherwise default to the convertToAbsoluteUrls option
		directly
	*/
	var autoFixUrls = options.convertToAbsoluteUrls === undefined && sourceMap;

	if (options.convertToAbsoluteUrls || autoFixUrls) {
		css = fixUrls(css);
	}

	if (sourceMap) {
		// http://stackoverflow.com/a/26603875
		css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
	}

	var blob = new Blob([css], { type: "text/css" });

	var oldSrc = link.href;

	link.href = URL.createObjectURL(blob);

	if(oldSrc) URL.revokeObjectURL(oldSrc);
}


/***/ }),
/* 7 */
/***/ (function(module, exports) {


/**
 * When source maps are enabled, `style-loader` uses a link element with a data-uri to
 * embed the css on the page. This breaks all relative urls because now they are relative to a
 * bundle instead of the current page.
 *
 * One solution is to only use full urls, but that may be impossible.
 *
 * Instead, this function "fixes" the relative urls to be absolute according to the current page location.
 *
 * A rudimentary test suite is located at `test/fixUrls.js` and can be run via the `npm test` command.
 *
 */

module.exports = function (css) {
  // get current location
  var location = typeof window !== "undefined" && window.location;

  if (!location) {
    throw new Error("fixUrls requires window.location");
  }

	// blank or null?
	if (!css || typeof css !== "string") {
	  return css;
  }

  var baseUrl = location.protocol + "//" + location.host;
  var currentDir = baseUrl + location.pathname.replace(/\/[^\/]*$/, "/");

	// convert each url(...)
	/*
	This regular expression is just a way to recursively match brackets within
	a string.

	 /url\s*\(  = Match on the word "url" with any whitespace after it and then a parens
	   (  = Start a capturing group
	     (?:  = Start a non-capturing group
	         [^)(]  = Match anything that isn't a parentheses
	         |  = OR
	         \(  = Match a start parentheses
	             (?:  = Start another non-capturing groups
	                 [^)(]+  = Match anything that isn't a parentheses
	                 |  = OR
	                 \(  = Match a start parentheses
	                     [^)(]*  = Match anything that isn't a parentheses
	                 \)  = Match a end parentheses
	             )  = End Group
              *\) = Match anything and then a close parens
          )  = Close non-capturing group
          *  = Match anything
       )  = Close capturing group
	 \)  = Match a close parens

	 /gi  = Get all matches, not the first.  Be case insensitive.
	 */
	var fixedCss = css.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function(fullMatch, origUrl) {
		// strip quotes (if they exist)
		var unquotedOrigUrl = origUrl
			.trim()
			.replace(/^"(.*)"$/, function(o, $1){ return $1; })
			.replace(/^'(.*)'$/, function(o, $1){ return $1; });

		// already a full url? no change
		if (/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/)/i.test(unquotedOrigUrl)) {
		  return fullMatch;
		}

		// convert the url to a full url
		var newUrl;

		if (unquotedOrigUrl.indexOf("//") === 0) {
		  	//TODO: should we add protocol?
			newUrl = unquotedOrigUrl;
		} else if (unquotedOrigUrl.indexOf("/") === 0) {
			// path should be relative to the base url
			newUrl = baseUrl + unquotedOrigUrl; // already starts with '/'
		} else {
			// path should be relative to current directory
			newUrl = currentDir + unquotedOrigUrl.replace(/^\.\//, ""); // Strip leading './'
		}

		// send back the fixed url(...)
		return "url(" + JSON.stringify(newUrl) + ")";
	});

	// send back the fixed css
	return fixedCss;
};


/***/ })
/******/ ]);