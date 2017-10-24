/**
 * Main Site Initialization Scripts
 */


jQuery.fn.doesExist = function(){
	return jQuery(this).length > 0;
};

(function ($, window, undefined) {
	"use strict";

	/*
	 Isotope Initialization
	 */
	if(jQuery().masonry) {
		var $container = $('.masonry-wrapper .blog-post-items');

		$container.imagesLoaded( function(){

		});

	}

	$(document).ready(function() {
		$(window).load(function(){

			if (typeof skrollr != 'undefined') {
				if (!(/Android|iPhone|iPad|iPod|BlackBerry/i).test(navigator.userAgent || navigator.vendor || window.opera)) {
					skrollr.init({forceHeight: false});
				} else {
					skrollr.init().destroy();
				}
			}

			$('input,textarea').placeholder();


			/*
			  Sticky Header
			 */
			function getCurrentScroll() {
				return window.pageYOffset || document.documentElement.scrollTop;
			}

			if ( $('body.sticky').length && $('#header-region').length ) {
				var positionHeader = 180;
				$(window).scroll(function () {
					var scroll = getCurrentScroll();
					if (scroll >= positionHeader) {
						$('#header-region').addClass('shrink-sticky');
					}
					else {
						$('#header-region').removeClass('shrink-sticky');
					}
				});

				var shrinkHeader = 280;
				$(window).scroll(function () {
					var scroll = getCurrentScroll();
					if (scroll >= shrinkHeader) {
						$('#header-region').addClass('shrink');
						$('#banner').addClass('header-shrink');
					}
					else {
						$('#header-region').removeClass('shrink');
						$('#banner').removeClass('header-shrink');
					}
				} );
			}


			/*
			 Menu
			 */
			$('.site_main_menu').smartmenus({
				subMenusSubOffsetX: 38,
				subMenusSubOffsetY: 21

			});

			$('.menu-button').click(function() {
				var $this = $(this);
				if ($this.hasClass('active'))
				{
					$('#header-region').addClass('menu-collapsed');
					$this.removeClass('active');
				} else {
					$('#header-region').removeClass('menu-collapsed');
					$this.addClass('active');
				}
				return false;
			});


			/*
			Header Search Bar
			 */
			var $bodyContainer = $(document.body);

			/* Search */
			$('a[href="#search-header"]').on('click', function(event) {
				event.preventDefault();
				$('#search-header').addClass('open');
				$bodyContainer.toggleClass('search-open');

				setTimeout(function(){
					$('#search-overlay-input').focus();
				}, 500);
			});

			$('#search-header, #search-header button.close').on('click keyup', function(event) {
				if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
					$(this).removeClass('open');
					$bodyContainer.toggleClass('search-open');
				}
			});


			/*
			Flip Cards
			*/
			if(jQuery().flip) {
				$(".card").flip({
					axis: 'y',
					trigger: 'hover'
				});
			}


			/*
			Slider Initialization
			*/
			$('.flexslider').each(function() {
				var has_controls 		= false,
					has_pips			= false,
					pause_on_action		= false,
					pause_on_hover		= false,
					randomize			= false,
					speed				= 7000,
					animation			= 'fade';

				if ( $(this).hasClass('has-controls') ) 		has_controls = true;
				if ( $(this).hasClass('has-item-navigation') )	has_pips = true;
				if ( $(this).hasClass('pause-on-action') ) 		pause_on_action = true;
				if ( $(this).hasClass('pause-on-hover') ) 		pause_on_hover = true;
				if ( $(this).hasClass('randomize') ) 			randomize = true;

				if ( $(this).hasClass('transition-slide') )		animation = 'slide';

				if ( $(this).data('speed'))  					speed = $(this).data('speed');

				$(this).flexslider(
						{
							'animation' : animation,
							'slideshowSpeed' : speed,
							'randomize' : randomize,
							'pauseOnAction' : pause_on_action,
							'pauseOnHover' : pause_on_hover,
							'controlNav' : has_pips,
							'directionNav' : has_controls
						}
				);
			});

			$('.flexslider-gallery').flexslider({
				randomize: true,
				controlNav: false,
				directionNav: true,
				slideshowSpeed: 3000
			});

			/*
			Gallery Lightbox Initialization
			*/

			if ( jQuery().featherlight && jQuery().featherlightGallery ) {
				$.featherlightGallery.prototype.afterContent = function () {
					var caption = this.$currentTarget.find('img').attr('alt');
					this.$instance.find('.featherlight-caption').remove();
					$('<p class="featherlight-caption">').text(caption).appendTo(this.$instance.find('.featherlight-content'));
				};
			}

			/*
			Modal Windows Initialization
			*/
			if( jQuery().featherlight ) {
				$.featherlight.defaults.beforeOpen = function(event){
					$('body').addClass('modal-view');
				};

				$.featherlight.defaults.afterClose = function(event){
					$('body').removeClass('modal-view');
				};
			}

			/*
			Scroll Up Arrow
			 */
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			});
			$('.scrollup').click(function () {
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});

			/*
			Maps
			*/
			if ( jQuery().initMap ) {
				$( ".map-widget-canvas" ).each(function() {
					var id = $( this ).attr( 'id' );
					var address = $ (this).data( 'location' );
					var type = $ (this).data( 'type' );
					var zoom = $ (this).data( 'zoom' );
					$('#' + id).initMap( {
								type: type,
								controls : {
									map_type: {
										type: ['roadmap', 'satellite', 'hybrid'],
										position: 'top_right',
										style: 'dropdown_menu'
									},
									overview: {opened: false},
									pan: false,
									rotate: false,
									scale: false,
									street_view: {position: 'top_center'},
									zoom: {
										position: 'top_left',
										style: 'small'
									}
								},
								center: address,
								markers : {
									marker1 : {
										position: address,
										info_window : {
											content : address,
											showOn: 'mouseover',
											hideOn: 'mouseout',
											maxWidth: 150,
											zIndex: 2
										}
									}
								},
								options :
								{
									zoom: zoom
								}
							}
					);
				});
			}

			/*
			Animations
			 */
			if (typeof WOW == 'function') {
				var is_mobile = false;
				if ( $('body' ).hasClass( 'has-mobile-anim' ) ) {
					is_mobile = true;
				}
				var wow = new WOW(
						{
							boxClass:     'inbound-wow',
							mobile:       is_mobile,
							live:         false
						}
				);
				wow.init();
			}

			/*
			WooCommerce
			 */
			function inbound_added_to_cart(e) {
				inbound_show_notification();
				setTimeout( inbound_hide_notification, 2000);
			}
			function inbound_hide_notification() {
				$('#header-cart-notification').addClass('collapsed');
			}
			function inbound_show_notification() {
				$('#header-cart-notification').removeClass('collapsed');
			}


			$('#header-cart')
					.mouseenter(function(){
						$(this).removeClass('collapsed');
						$("#header-search").addClass('collapsed');
					})
					.mouseleave(function(){
						$(this).addClass('collapsed');
					});


			$('body').bind('added_to_cart', inbound_added_to_cart);

			/*
			Countdown
			 */
			var cur = new Date(),
					curY = cur.getFullYear(),
					curM = cur.getMonth()+1,
					curD = cur.getDate();


			$('.countdown.wd').each(function() {
				var
						count_days = $(this).data('days'),
						count_hours = $(this).data('hours'),
						count_minutes = $(this).data('minutes'),
						count_seconds = $(this).data('seconds');

				$(this).oli_counter({
							'times_array': Array(1, 60, 3600, 86400),
							'group_text': Array( count_seconds, count_minutes, count_hours, count_days),
							'animation_speed':100
						});
			});


		});

		$(window).load(function(){
			$('.site_main_menu a[href^="#"], .so-panel a[href^="#"]').mPageScroll2id({
				offset: 91,
				highlightClass: "current-menu-item",
				highlightSelector: ".site_main_menu a",
				forceSingleHighlight: true,
				scrollSpeed: 900
			});
		});

		$(window).resize(function(){
			var loc=window.location.hash,
					to=(loc.indexOf("#/#")!==-1) ? loc.split("/")[1] : loc;
			$.mPageScroll2id("scrollTo",to);
		});

	});

})(jQuery, this);


/*
 * Smooth Scrolling for One Page Designs
 */

(function ($, window, undefined) {
	"use strict";


})(jQuery, this);



/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
 */
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
	var doc = w.document;
	if( !doc.querySelector ){ return; }
	var meta = doc.querySelector( "meta[name=viewport]" ),
			initialContent = meta && meta.getAttribute( "content" ),
			disabledZoom = initialContent + ",maximum-scale=1",
			enabledZoom = initialContent + ",maximum-scale=10",
			enabled = true,
			x, y, z, aig;
	if( !meta ){ return; }
	function restoreZoom(){
		meta.setAttribute( "content", enabledZoom );
		enabled = true; }
	function disableZoom(){
		meta.setAttribute( "content", disabledZoom );
		enabled = false; }
	function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
		if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );