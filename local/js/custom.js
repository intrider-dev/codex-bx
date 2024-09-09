/*Selector arrays*/
/*array_of_selectors = {
	class: [min_width, max_width, core_width, scale]
}*/
selector_list_array = [
	selector_list_lg = {
		'.tariff-tab': [1200, 10000, 1200, 0.80023],
		'.tariff-container': [1200, 10000, 1200, 0.80023],

		'.universal-tab': [1200, 10000, 1200, 0.80023],
		'.universal-subtext': [1200, 10000, 1200, 1.00023],
		'.universal-header-h5': [1200, 10000, 1200, 1.00023],
		'.universal-header-h2': [1200, 10000, 1200, 0.80023],
		'.universal-detail-button-inner': [1200, 10000, 1200, 1.00023],

		'.custom-detail-text': [1200, 10000, 1200, 0.80023],
		'.custom-detail-picture img': [1200, 10000, 1200, 0.80023],
		'.custom-detail-h2': [1200, 10000, 1200, 1.40023],
		'.custom-detail-button': [1200, 10000, 1200, 0.80023],

		'.error-wrapper': [980, 10000, 1200, 0.80023],

		'.footer-form-tg-button': [980, 10000, 1200, 0.80023],
		'.footer-second-column': [980, 10000, 1200, 0.80023],
		'.footer-first-column': [980, 10000, 1200, 0.80023],
		'.footer-bottom': [1159, 10000, 1200, 0.80023],

		'.tags-block': [1159, 10000, 1200, 0.70023],

		'.competition-button-wrapper': [1159, 10000, 1200, 1.00023],
		'.competencies-item': [1159, 10000, 1200, 1.00023],
		'.competencies-header-h2': [1159, 10000, 1200, 1.00023],
		'.competencies-header-h5': [1159, 10000, 1200, 1.00023],
		'.text-block-main': [1159, 10000, 1200, 1.00023],

		'.card-brend-header-h2': [1159, 10000, 1200, 0.90023],
		'.card-brend-header-h5': [1159, 10000, 1200, 1.00023],
		'.card-brend-wrapper': [1159, 10000, 1200, 1.00023],
		'.card':[1159, 10000, 1200, 1.00023],

		'header .menu-links-block':[1159, 10000, 1200, 0.90023],
		'header .logo-block': [1200, 10000, 1200, 0.80023],

		'footer .logo-block': [1200, 10000, 1200, 0.80023],
		'footer .menu-link': [1200, 10000, 1200, 1.00023],
		'.contact-subblock a:not(.footer-button)': [1200, 10000, 1200, 1.00023],
		'.footer-button': [1200, 10000, 1200, 0.90023],
		'.copyright': [1200, 10000, 1200, 1.00023],
		'.address': [1200, 10000, 1200, 1.00023],
		'.author': [1200, 10000, 1200, 1.00023],

		'.banner-text-wrapper h1': [1200, 10000, 1200, 1.00023], 
		'.banner .puslating': [1200, 10000, 1200, 1.00023],  
		'.card-button': [1200, 10000, 1200, 1.00023],  
	},
	selector_list_md = {
		'.tariff-tab div': [640, 1199, 640, 0.50023],
		'.tariff-container': [640, 1199, 640, 0.80023],

		'.universal-tab': [640, 1199, 640, 0.80023],
		'.universal-subtext': [640, 1199, 640, 0.80023],
		'.universal-header-h5': [640, 1199, 640, 0.80023],
		'.universal-header-h2': [640, 1199, 640, 0.80023],
		'.universal-detail-button-inner': [640, 1199, 640, 0.70023],

		'.custom-detail-text': [640, 1199, 640, 0.70023],
		'.custom-detail-picture img': [640, 1199, 640, 0.60023],
		'.custom-detail-h2': [640, 1199, 640, 0.80023],
		'.custom-detail-button': [640, 1199, 640, 0.80023],

		'.dropdown-menu': [640, 1199, 640, 0.80023],
		'.error-wrapper': [640, 979, 640, 0.80023],

		'.footer-form-tg-button': [640, 979, 640, 0.80023],
		'.footer-second-column': [640, 979, 640, 0.80023],
		'.footer-first-column': [640, 959, 640, 0.80023],

		'.tab-plus-item': [640, 1199, 640, 0.70023],
		'.tab-header': [640, 1199, 640, 0.70023],
		'.tab-text': [640, 1199, 640, 0.70023],

		'.competition-button-wrapper': [640, 1199, 640, 0.80023],
		'.competencies-item': [640, 1199, 640, 0.80023],
		'.competencies-header-h2': [640, 1199, 640, 0.80023],
		'.competencies-header-h5': [640, 1199, 640, 0.80023],

		'.text-block-main': [640, 1199, 640, 0.70023],
		'.card-brend-header-h2': [640, 1199, 640, 0.80023],
		'.card-brend-header-h5': [640, 1199, 640, 0.80023],
		'.card-brend-wrapper': [640, 1199, 640, 0.80023],
		'.card': [640, 959, 480, 1.00023], 

		'header .menu-links-block': [640, 1159, 640, 0.70023],
		'header .logo-block': [640, 1159, 640, 0.60023],

		'footer .logo-block': [640, 1199, 640, 0.80023],
		'footer .menu-link': [640, 1199, 640, 0.80023],

		'.copyright': [640, 1199, 640, 0.80023],
		'.address': [640, 1199, 640, 0.80023],
		'.author': [640, 1199, 640, 0.80023],
		'.contact-subblock a': [640, 1199, 640, 0.80023],
		'.policy-link a': [640, 1199, 640, 0.80023],

		'.banner-text-wrapper h1': [640, 1199, 640, 0.80023],
		'.banner .puslating': [640, 1199, 640, 0.80023],
		'.card-button': [640, 1199, 640, 0.80023], 
	},
	selector_list_sm = {
		'.tariff-tab div': [1, 639, 320, 0.80023],
		'.d-flex.flex-row.flex-wrap.justify-content-center .tariff-main-item .tariff-name': [1, 639, 320, 0.45023],
		'.tariff-container': [1, 639, 320, 0.80023],
		'.tariff-button': [1, 639, 320, 0.80023],

		'.universal-tab': [1, 639, 320, 0.80023],
		'.universal-subtext': [1, 639, 320, 0.80023],
		'.universal-header-h5': [1, 639, 320, 0.80023],
		'.universal-header-h2': [1, 639, 320, 0.80023],
		'.universal-detail-button-inner': [1200, 10000, 1200, 1.00023],

		'.custom-detail-text': [1, 639, 320, 0.80023],
		'.custom-detail-picture img': [1, 639, 320, 0.80023],
		'.custom-detail-h2': [1, 639, 320, 0.80023],
		'.custom-detail-button': [1, 639, 320, 0.80023],

		'.dropdown-menu': [1, 639, 320, 0.80023],
		'.error-wrapper': [1, 640, 480, 1.00023],

		'.footer-form-tg-button': [1, 640, 480, 1.00023],
		'.footer-second-column': [1, 640, 480, 1.00023],
		'.footer-first-column': [1, 640, 480, 1.00023],

		'.tab-plus-item': [1, 640, 480, 0.70023],
		'.tab-header': [1, 640, 480, 1.00023],
		'.tab-text': [1, 640, 480, 1.00023],

		'.competition-button-wrapper': [1, 640, 480, 1.00023],
		'.competencies-item': [1, 640, 480, 1.00023],
		'.competencies-header-h2': [1, 640, 480, 1.00023],
		'.competencies-header-h5': [1, 640, 480, 1.00023],

		'.text-block-main': [1, 640, 480, 1.00023],
		'.card-brend-header-h2': [1, 640, 480, 1.00023],
		'.card-brend-header-h5': [1, 640, 480, 1.00023],
		'.card-brend-wrapper': [1, 640, 480, 1.00023],
		'.card': [1, 640, 480, 1.00023],

		'header .menu-links-block': [1, 639, 320, 0.70023],
		'header .menu-links-block-mobile': [1, 639, 320, 0.70023],
		'header .logo-block': [1, 639, 320, 0.50023],

		'.contact-subblock a:not(.footer-button)': [1, 639, 320, 1.00023],
		'footer.menu-link': [1, 639, 320, 0.80023],
		'.copyright': [1, 639, 320, 0.80023],
		'.address': [1, 639, 320, 0.80023],
		'.author': [1, 639, 320, 0.80023],

		'.banner-text-wrapper h1': [1, 639, 320, 0.50023],
		'.banner .puslating': [1, 639, 320, 0.80023],
		'.card-button': [1, 639, 320, 0.80023], 
	},
];

function bannerTop() {
	nav = $('nav.navbar');
	banner = $('.banner-text-wrapper');
	if(banner.length != 0) {
		banner[0].style.top = ('-'+nav[0].offsetHeight+'px');
	}
}

/*Resizing function*/
function resize(){
	selector_list_array.forEach(selector_list => {
		for (var key in selector_list) {
			if(($('html')[0].offsetWidth < selector_list[key][1]) && ($('html')[0].offsetWidth > selector_list[key][0])){
				zoom_f = $('html')[0].offsetWidth / selector_list[key][2] * selector_list[key][3];
				zoom = parseFloat(zoom_f.toFixed(4));
				$(key).each(function(){
					_this = $(this);
					_this[0].style.zoom = zoom;
				});
			}
		}
	});
}

/*Adaptive Nav function*/
function adaptiveNav(){
	nav = $('.navbar');
	menu_container = $('.menu-container');
	menu_container_height_f  = menu_container[0].offsetHeight + parseFloat(nav.css("padding-top")) + parseFloat(nav.css("padding-bottom"));
	menu_container_height = parseFloat(menu_container_height_f.toFixed(2));
	nav_width_f = nav[0].offsetWidth - parseFloat(nav.css("padding-left")) - parseFloat(nav.css("padding-right"));
	nav_width = parseFloat(nav_width_f.toFixed(2));
	nav[0].setAttribute('style', 'height:' + menu_container_height + 'px;');
	nav[0].children[0].setAttribute('style', 'width:' + nav_width + 'px;');
}

function AdaptiveFooter(){
	window_width = $('html')[0].offsetWidth;
	if((window_width < 1200) && (window_width > 640)){
		footer_img_width = $('footer .logo-block img:visible')[0].offsetWidth;
		$('.footer-text:visible')[0].style.width = footer_img_width;
	}else if(window_width > 1201){
		footer_img_width = $('footer .logo-block img:visible')[0].offsetWidth;
		$('.footer-text:visible')[0].style.width = footer_img_width * 1.50;
	}else{
		$('.footer-text:visible')[0].setAttribute('style', '');
	}
}

/* Dropdown hover */

$(document).on('mouseover', '.dropdown-wrapper:not(.menu-links-block-mobile .dropdown-wrapper)', function(){
    $('.dropdown-menu:not(.menu-links-block-mobile .dropdown-menu)')[0].style.display = 'flex'; 
});
$(document).on('mouseout', '.dropdown-wrapper:not(.menu-links-block-mobile .dropdown-wrapper)', function(){
    $('.dropdown-menu:not(.menu-links-block-mobile .dropdown-menu)')[0].style.display = 'none'; 
});
$(document).on('mouseover', '.menu-links-block-mobile .dropdown-wrapper', function(){
    $('.menu-links-block-mobile .dropdown-menu')[0].style.display = 'flex'; 
});
$(document).on('mouseout', '.menu-links-block-mobile .dropdown-wrapper', function(){
    $('.menu-links-block-mobile .dropdown-menu')[0].style.display = 'none'; 
});

/*Resizing initialization*/
$(window).on('load', function(){
	$(window).on('resize', function(){
		bannerTop();
		resize();
		adaptiveNav();
		AdaptiveFooter();
	});
	bannerTop();
	resize();
	adaptiveNav();
	AdaptiveFooter();
});