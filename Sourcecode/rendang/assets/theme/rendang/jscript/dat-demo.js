
(function($) {
	"use strict";
		
	var dat_demo_global = Array();
	if(!dat_img_dir){var dat_img_dir = "images/"}

	jQuery(document).ready(function () {
		jQuery('body').append('<div id="dat-demo-settings"><strong>Style Selector</strong><span class="dat-demo-button"><span><i class="fa fa-gear"></i>Change Style</span></span><div class="dat-demo-inner"></div></div>');


		jQuery("#dat-demo-settings .dat-demo-button").click(function () {
			jQuery("#dat-demo-settings").toggleClass("active");
			return false;
		});

		function __dat_demo_css(datDemoID, datDemoValue) {
			for (var i = dat_demo_global[datDemoID].length - 1; i >= 0; i--) {
				jQuery(dat_demo_global[datDemoID][i][0]).css(dat_demo_global[datDemoID][i][1], dat_demo_global[datDemoID][i][2] + datDemoValue);
				// console.log("#"+datDemoID+ " : "+dat_demo_global[datDemoID][i][0]+ ", "+dat_demo_global[datDemoID][i][2] + dat_demo_global[datDemoID][i][1]);
			};
			return true;
		}

		function __dat_demo(datDemoID, datDemoTitle, datDemoDescription, datDemoType, datDemoItems, datDemoCSS) {
			if(jQuery("#dat-demo-settings")){

				if(datDemoType == "select"){
					var build_list = "";
					for (var i = datDemoItems.length - 1; i >= 0; i--) {
						build_list = '<option value="'+datDemoItems[i][0]+'">'+datDemoItems[i][1]+'</option>' + build_list;
					};
					dat_demo_global[datDemoID] = datDemoCSS;
					jQuery('.dat-demo-inner').append('<div class="dat-demo-row"><strong>'+datDemoTitle+'</strong><i>'+datDemoDescription+'</i><div><label for="'+datDemoID+'"><select name="'+datDemoID+'" id="'+datDemoID+'">'+build_list+'</select></label></div></div>');
					jQuery('#'+datDemoID).bind("change", function () {
						__dat_demo_css(datDemoID, jQuery(this).val());
						return false;
					});
				}else

				if(datDemoType == "bulls"){
					var build_list = "";
					for (var i = datDemoItems.length - 1; i >= 0; i--) {
						build_list = '<a href="#" class="dat-demo-bull" rel="'+datDemoItems[i][1]+'" style="'+datDemoItems[i][0]+': '+datDemoItems[i][1]+';"></a>' + build_list;
					};
					dat_demo_global[datDemoID] = datDemoCSS;
					jQuery('.dat-demo-inner').append('<div class="dat-demo-row"><strong>'+datDemoTitle+'</strong><i>'+datDemoDescription+'</i><div class="dat-demo-bulls" id="'+datDemoID+'">'+build_list+'</div></div>');
					jQuery('#'+datDemoID+' .dat-demo-bull').bind("click", function () {
						__dat_demo_css(datDemoID, jQuery(this).attr("rel"));
						return false;
					});
				}

			}else{
				return false;
			}
			return true;
		}

		__dat_demo("datmainfont", "Main Font Family", "These are just a few fonts, in total there are 630+", "select",
			Array(["Rambla", "Rambla (Default)"], ["Open Sans", "Open Sans"], ["Roboto", "Roboto"], ["Oleo Script", "Oleo Script"], ["Rokkitt", "Rokkitt"], ["Roboto Condensed", "Roboto Condensed"]),
			Array(["#main-menu, #sidebar > .widget > h3, h1, h2, h3, h4, h5, h6, .content-wrapper, #footer, .upcomming-widget > span, .upcomming-widget > a", "font-family", ""]));

		__dat_demo("datcolor", "Predefined Color Scheme", "These are just a few color presets, in reality there are unlimited color possibilities", "bulls",
			Array(["background-color", "#332214"], ["background-color", "#235175"], ["background-color", "#2F7719"], ["background-color", "#911C1C"], ["background-color", "#303030"], ["background-color", "#000000"], ["background-color", "#4E3A9C"], ["background-color", "#288B87"], ["background-color", "#833283"], ["background-color", "#9B3863"], ["background-color", "#8A8A15"], ["background-color", "#5C8B14"]),
			Array(["#main-menu, #main-menu > ul > li > ul, .upcomming-widget .ch-countdown .count-num .count-flips i,a.button, .button, .staff-block .item .item-content h3 span, #footer, .pagination .page-numbers:hover, .pagination .page-numbers.current, #sidebar > .widget > h3, .button.invert:hover, #main-menu > ul > li > ul ul", "background-color", ""],
				[".button.invert, .pagination .page-numbers, .gallery-single .gallery-thumbs a.active, .staff-block .item .item-content .social-links a, .item-list > div.item i.fa, .item-list > div.item h3, .block-title, .huge-title, .item h3 a, .link-item a, .post-a, .upcomming-widget > a, .upper-menu li a, .upcomming-widget", "color", ""],
				[".button.invert, .pagination .page-numbers, .gallery-single .gallery-thumbs a.active, .staff-block .item .item-content .social-links a", "border", "1px solid "]));
		
		__dat_demo("dattexture", "Background Textures", "You can upload custom one", "bulls",
			Array(["background-image", "url("+dat_img_dir+"background.jpg)"], ["background-image", "url("+dat_img_dir+"back-2.jpg)"], ["background-image", "url("+dat_img_dir+"back-3.jpg)"], ["background-image", "url("+dat_img_dir+"back-4.jpg)"]),
			Array(["#dat-surround-inner", "background-image", ""]));

	});


})(jQuery);



// Webfont import

WebFontConfig = {
	google: { families: [ 'Open+Sans:400,600,700:latin', 'Roboto:400,500,700:latin', 'Roboto+Condensed:400,700:latin', 'Rokkitt:400,700:latin', 'Oleo+Script:400,700:latin' ] }
};
(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
})();