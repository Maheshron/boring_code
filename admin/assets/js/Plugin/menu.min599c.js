/*!
 * Remark (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */

!function(global,factory){if("function"==typeof define&&define.amd)define("/Plugin/menu",["Plugin"],factory);else if("undefined"!=typeof exports)factory(require("Plugin"));else{var mod={exports:{}};factory(global.Plugin),global.PluginMenu=mod.exports}}(this,function(_Plugin2){"use strict";var _Plugin3=babelHelpers.interopRequireDefault(_Plugin2),Menu=function(_Plugin){function Menu(){var _ref;babelHelpers.classCallCheck(this,Menu);for(var _len=arguments.length,args=Array(_len),_key=0;_key<_len;_key++)args[_key]=arguments[_key];var _this=babelHelpers.possibleConstructorReturn(this,(_ref=Menu.__proto__||Object.getPrototypeOf(Menu)).call.apply(_ref,[this].concat(args)));return _this.folded=!0,_this.foldAlt=!0,_this.outerHeight=0,_this}return babelHelpers.inherits(Menu,_Plugin),babelHelpers.createClass(Menu,[{key:"getName",value:function(){return"menu"}},{key:"render",value:function(){this.bindEvents(),this.$el.data("menuApi",this)}},{key:"bindEvents",value:function(){var self=this;this.$el.on("mouseenter.site.menu",".site-menu-item",function(){var $item=$(this);if($item.is(".has-sub")&&$item.parent(".site-menu").length>0){var $sub=$item.children(".site-menu-sub");self.position($item,$sub)}$item.addClass("hover")}).on("mouseleave.site.menu",".site-menu-item",function(){var $item=$(this);$item.is(".has-sub")&&$item.parent(".site-menu").length>0&&$item.children(".site-menu-sub").css("max-height",""),$item.removeClass("hover")}).on("open.site.menu",".site-menu-item",function(e){var $item=$(this);self.expand($item,function(){$item.addClass("open")}),$item.siblings(".open").trigger("close.site.menu"),e.stopPropagation()}).on("close.site.menu",".site-menu-item.open",function(e){var $item=$(this);self.collapse($item,function(){$item.removeClass("open")}),e.stopPropagation()}).on("click.site.menu ",".site-menu-item",function(e){var $item=$(this);0===$item.parent(".site-menu").length&&$item.is(".has-sub")&&$(e.target).closest(".site-menu-item").is(this)&&($item.is(".open")?$item.trigger("close.site.menu"):$item.trigger("open.site.menu")),e.stopPropagation()}).on("touchstart.site.menu",".site-menu-item",function(){$(this).one("touchend.site.menu",function(){var $item=$(this);if($item.off("touchmove.site.menu"),$item.is(".has-sub")&&$item.parent(".site-menu").length>0)if($item.siblings(".hover").each(function(){var $item=$(this);$item.is(".has-sub")&&$item.parent(".site-menu").length>0&&$item.children(".site-menu-sub").css("max-height",""),$item.removeClass("hover")}),$item.is(".hover"))$item.is(".has-sub")&&$item.parent(".site-menu").length>0&&$item.children(".site-menu-sub").css("max-height",""),$item.removeClass("hover");else{if($item.is(".has-sub")&&$item.parent(".site-menu").length>0){var $sub=$item.children(".site-menu-sub");self.position($item,$sub)}$item.addClass("hover")}}).one("touchmove.site.menu",function(){$(this).off("touchend.site.menu")})}).on("scroll.site.menu",".site-menu-sub",function(e){e.stopPropagation()})}},{key:"collapse",value:function($item,callback){var self=this;$item.children(".site-menu-sub").show().slideUp(this.options.speed,function(){$(this).css("display",""),$(this).find("> .site-menu-item").removeClass("is-shown"),callback&&callback(),self.$el.trigger("collapsed.site.menu")})}},{key:"expand",value:function($item,callback){var self=this,$sub=$item.children(".site-menu-sub"),$children=$sub.children(".site-menu-item").addClass("is-hidden");$sub.hide().slideDown(this.options.speed,function(){$(this).css("display",""),callback&&callback(),self.$el.trigger("expanded.site.menu")}),setTimeout(function(){$children.addClass("is-shown"),$children.removeClass("is-hidden")},0)}},{key:"refresh",value:function(){this.$el.find(".open").filter(":not(.active)").removeClass("open")}},{key:"position",value:function($item,$dropdown){var itemHeight=$item.find("> a").outerHeight(),menubarHeight=this.outerHeight,offsetTop=$item.position().top;$dropdown.removeClass("site-menu-sub-up").css("max-height",""),offsetTop>menubarHeight/2?($dropdown.addClass("site-menu-sub-up"),this.foldAlt&&(offsetTop-=itemHeight),$dropdown.css("max-height",offsetTop+itemHeight)):(this.foldAlt&&(offsetTop+=itemHeight),$dropdown.removeClass("site-menu-sub-up"),$dropdown.css("max-height",menubarHeight-offsetTop))}}],[{key:"getDefaults",value:function(){return{speed:250}}}]),Menu}(_Plugin3.default);_Plugin3.default.register("menu",Menu)});