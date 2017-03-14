
(function($) {
	"use strict";

	jQuery(document).ready(function() {

		jQuery(".accordion .accordion-tab > a").click(function () {
			var thisel = jQuery(this).parent();
			if(!thisel.hasClass("active")){
				thisel.siblings(".accordion-tab.active").children(".accordion-block").animate({
					opacity: 'toggle',
					padding: 'toggle',
					height: 'toggle'
				}, 200, function () {
					jQuery(this).parent().removeClass("active");
				});
			}
			thisel.children(".accordion-block").animate({
				opacity: 'toggle',
				padding: 'toggle',
				height: 'toggle'
			}, 200, function () {
				jQuery(this).parent().toggleClass("active");
			});
			return false;
		});

		jQuery(".info-message .close-info").click(function() {
			jQuery(this).parent().fadeOut();
			return false;
		});

		jQuery(".faq-short > a").click(function() {
			jQuery(this).parent().toggleClass("active");
			return false;
		});

		jQuery(".slider-navi").each(function() {
			var curelement = jQuery(this);
			var count = curelement.siblings(".slider-content").children(".slide").size();

			for (var i = count - 1; i >= 0; i--) {
				curelement.append('<a href="#" class="slide-button">&nbsp;</a>');
			};

			curelement.children(".slide-button").eq(0).addClass("active");
			curelement.siblings(".slider-content").children(".slide").eq(0).addClass("active");
		});

		jQuery(".slider-navi .slide-button").click(function() {
			var curelement = jQuery(this);
			var curindex = jQuery(this).index();
			curelement.addClass("active").siblings(".active").removeClass("active");
			curelement.parent().siblings(".slider-content").children(".slide").eq(curindex).addClass("active").siblings(".active").removeClass("active");
			return false;
		});

		jQuery("#main-menu").append('<a href="#dat-menu" class="responsive-menu-link">Show Menu</a>')

	});

})(jQuery);
