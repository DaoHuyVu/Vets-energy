!function(e){var t={};function r(o){if(t[o])return t[o].exports;var n=t[o]={i:o,l:!1,exports:{}};return e[o].call(n.exports,n,n.exports,r),n.l=!0,n.exports}r.m=e,r.c=t,r.d=function(e,t,o){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(r.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)r.d(o,n,function(t){return e[t]}.bind(null,n));return o},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=16)}([function(e,t){e.exports=window.React},function(e,t){e.exports=window.wp.i18n},function(e,t){e.exports=window.wp.data},function(e,t){e.exports=window.wp.components},function(e,t){function r(t){return e.exports=r=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},e.exports.default=e.exports,e.exports.__esModule=!0,r(t)}e.exports=r,e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){e.exports=window.wp.element},function(e,t){e.exports=function(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){e.exports=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){function r(e,t){for(var r=0;r<t.length;r++){var o=t[r];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}e.exports=function(e,t,o){return t&&r(e.prototype,t),o&&r(e,o),e},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,r){var o=r(12);function n(t,r,u){return"undefined"!=typeof Reflect&&Reflect.get?(e.exports=n=Reflect.get,e.exports.default=e.exports,e.exports.__esModule=!0):(e.exports=n=function(e,t,r){var n=o(e,t);if(n){var u=Object.getOwnPropertyDescriptor(n,t);return u.get?u.get.call(r):u.value}},e.exports.default=e.exports,e.exports.__esModule=!0),n(t,r,u||t)}e.exports=n,e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,r){var o=r(13);e.exports=function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&o(e,t)},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,r){var o=r(14).default,n=r(15);e.exports=function(e,t){return!t||"object"!==o(t)&&"function"!=typeof t?n(e):t},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,r){var o=r(4);e.exports=function(e,t){for(;!Object.prototype.hasOwnProperty.call(e,t)&&null!==(e=o(e)););return e},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){function r(t,o){return e.exports=r=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},e.exports.default=e.exports,e.exports.__esModule=!0,r(t,o)}e.exports=r,e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){function r(t){return"function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?(e.exports=r=function(e){return typeof e},e.exports.default=e.exports,e.exports.__esModule=!0):(e.exports=r=function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e.exports.default=e.exports,e.exports.__esModule=!0),r(t)}e.exports=r,e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){e.exports=function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,r){"use strict";r.r(t),r.d(t,"cloudinaryBlocks",(function(){return T}));var o=r(6),n=r.n(o),u=(r(5),r(0)),i=r.n(u),a=r(1),s=r(2),c=r(3);function l(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function f(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?l(Object(r),!0).forEach((function(t){n()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):l(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var p={_init:function(){"undefined"!=typeof CLD_VIDEO_PLAYER&&wp.hooks.addFilter("blocks.registerBlockType","Cloudinary/Media/Video",(function(e,t){return"core/video"===t&&("off"!==CLD_VIDEO_PLAYER.video_autoplay_mode&&(e.attributes.autoplay.default=!0),"on"===CLD_VIDEO_PLAYER.video_loop&&(e.attributes.loop.default=!0),"off"===CLD_VIDEO_PLAYER.video_controls&&(e.attributes.controls.default=!1)),e}))}},d=p;p._init();wp.hooks.addFilter("blocks.registerBlockType","cloudinary/addAttributes",(function(e,t){return"core/image"!==t&&"core/video"!==t||(e.attributes||(e.attributes={}),e.attributes.overwrite_transformations={type:"boolean"},e.attributes.transformations={type:"boolean"}),e}));var b=function(e){var t=e.attributes.overwrite_transformations,r=e.setAttributes;return i.a.createElement(c.PanelBody,{title:Object(a.__)("Transformations","cloudinary")},i.a.createElement(c.ToggleControl,{label:Object(a.__)("Overwrite Global Transformations","cloudinary"),checked:t,onChange:function(e){r({overwrite_transformations:e})}}))},_=function(e){var t=e.setAttributes,r=e.media,o=wp.editor.InspectorControls;return r&&r.transformations&&t({transformations:!0}),i.a.createElement(o,null,i.a.createElement(b,e))};_=Object(s.withSelect)((function(e,t){return f(f({},t),{},{media:t.attributes.id?e("core").getMedia(t.attributes.id):null})}))(_);wp.hooks.addFilter("editor.BlockEdit","cloudinary/filterEdit",(function(e){return function(t){var r=t.name,o="core/image"===r||"core/video"===r;return i.a.createElement(i.a.Fragment,null,o?i.a.createElement(_,t):null,i.a.createElement(e,t))}}),20);var y=r(7),x=r.n(y),v=r(8),m=r.n(v),w=r(9),O=r.n(w),g=r(10),h=r.n(g),j=r(11),P=r.n(j),E=r(4),M=r.n(E);function k(e){var t=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}();return function(){var r,o=M()(e);if(t){var n=M()(this).constructor;r=Reflect.construct(o,arguments,n)}else r=o.apply(this,arguments);return P()(this,r)}}var S=function(e){return i.a.createElement(i.a.Fragment,null,e.modalClass&&i.a.createElement(c.ToggleControl,{label:Object(a.__)("Overwrite Transformations","cloudinary"),checked:e.overwrite_featured_transformations,onChange:function(t){return e.setOverwrite(t)}}))};S=Object(s.withSelect)((function(e){var t,r;return{overwrite_featured_transformations:null!==(t=null===(r=e("core/editor"))||void 0===r?void 0:r.getEditedPostAttribute("meta")._cloudinary_featured_overwrite)&&void 0!==t&&t}}))(S),S=Object(s.withDispatch)((function(e){return{setOverwrite:function(t){e("core/editor").editPost({meta:{_cloudinary_featured_overwrite:t}})}}}))(S);var D=function(e){return function(e){h()(r,e);var t=k(r);function r(){return x()(this,r),t.apply(this,arguments)}return m()(r,[{key:"render",value:function(){return i.a.createElement(i.a.Fragment,null,O()(M()(r.prototype),"render",this).call(this),!!this.props.value&&i.a.createElement(S,this.props))}}]),r}(e)},R={_init:function(){wp.hooks.addFilter("editor.MediaUpload","cloudinary/filter-featured-image",D)}};R._init();var C=R;window.$=window.jQuery;var T={Video:d,Featured:C}}]);