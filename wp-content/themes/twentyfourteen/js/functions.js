/**
 * Theme functions file
 *
 * Contains handlers for navigation, accessibility, header sizing
 * footer widgets and Featured Content slider
 *
 */


( function( $ ) {
	var body    = $( 'body' ),
		_window = $( window );

	// Enable menu toggle for small screens.
	( function() {
		var nav = $( '#primary-navigation' ), button, menu;
		if ( ! nav ) {
			return;
		}

		button = nav.find( '.menu-toggle' );
		if ( ! button ) {
			return;
		}

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle' ).on( 'click.twentyfourteen', function() {
			nav.toggleClass( 'toggled-on' );
		} );
	} )();

	/*
	 * Makes "skip to content" link work correctly in IE9 and Chrome for better
	 * accessibility.
	 *
	 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
	 */
	_window.on( 'hashchange.twentyfourteen', function() {
		var element = document.getElementById( location.hash.substring( 1 ) );

		if ( element ) {
			if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) {
				element.tabIndex = -1;
			}

			element.focus();

			// Repositions the window on jump-to-anchor to account for header height.
			window.scrollBy( 0, -80 );
		}
	} );

	$( function() {
	
		$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},800);
		});
		// Search toggle.
		$( '.search-toggle' ).on( 'click.twentyfourteen', function( event ) {
			var that    = $( this ),
				wrapper = $( '.search-box-wrapper' );

			that.toggleClass( 'active' );
			wrapper.toggleClass( 'hide' );

			if ( that.is( '.active' ) || $( '.search-toggle .screen-reader-text' )[0] === event.target ) {
				wrapper.find( '.search-field' ).focus();
			}
		} );

		/*
		 * Fixed header for large screen.
		 * If the header becomes more than 48px tall, unfix the header.
		 *
		 * The callback on the scroll event is only added if there is a header
		 * image and we are not on mobile.
		 */
		if ( _window.width() > 781 ) {
			var mastheadHeight = $( '#masthead' ).height(),
				toolbarOffset, mastheadOffset;

			if ( mastheadHeight > 48 ) {
				body.removeClass( 'masthead-fixed' );
			}

			if ( body.is( '.header-image' ) ) {
				toolbarOffset  = body.is( '.admin-bar' ) ? $( '#wpadminbar' ).height() : 0;
				mastheadOffset = $( '#masthead' ).offset().top - toolbarOffset;

				_window.on( 'scroll.twentyfourteen', function() {
					if ( ( window.scrollY > mastheadOffset ) && ( mastheadHeight < 49 ) ) {
						body.addClass( 'masthead-fixed' );
					} else {
						body.removeClass( 'masthead-fixed' );
					}
				} );
			}
		}

		// Focus styles for menus.
		$( '.primary-navigation, .secondary-navigation' ).find( 'a' ).on( 'focus.twentyfourteen blur.twentyfourteen', function() {
			$( this ).parents().toggleClass( 'focus' );
		} );
		
		/*-----------------------*/
		$('.modal').click(function(){
			$('.modal_form').css("display","block");
		});
		$('.form_x').click(function(){
			$('.modal_form').css("display","none");
		});
		var modal = document.getElementById('modal_forms');
		window.onclick = function(event) {
			if (event.target == modal) {
				$('.modal_form').css("display","none");
			}
		}
		
	} );

	_window.load( function() {
		// Arrange footer widgets vertically.
		if ( $.isFunction( $.fn.masonry ) ) {
			$( '#footer-sidebar' ).masonry( {
				itemSelector: '.widget',
				columnWidth: function( containerWidth ) {
					return containerWidth / 4;
				},
				gutterWidth: 0,
				isResizable: true,
				isRTL: $( 'body' ).is( '.rtl' )
			} );
			
		}

		// Initialize Featured Content slider.
		if ( body.is( '.slider' ) ) {
			$( '.featured-content' ).featuredslider( {
				selector: '.featured-content-inner > article',
				controlsContainer: '.featured-content'
			} );
		}

		$("input[name='your-name']").attr("placeholder","Ваше Имя*");
		$("input[name='tel-386']").attr("placeholder","Ваш номер телефона*");
		$("input[name='tel-386']").inputmask("+7 (999) 999-99-99");
    	
	} );


	if(window.location.pathname == "/production/") {
        $('.production').after('<div class="product-text"><h3>Благоустройство балкона</h3> <p>При небольшом размере и внутреннем объеме, балкон можно превратить в одну из функциональных частей дома. Для этого достаточно установить шкафчики, полки и тумбочки, отделанные под стиль его оформления. Можно использовать и готовую мебель, оставшуюся после ремонта кухни или ванной. Но получится не слишком красиво. Лучше всего заказать специальные конструкции по размеру балкона, плотно прилегающие к стенкам. Дверки нужно сделать не распашными, а сдвижными – так они не будут мешать при открывании и позволят поставить что-нибудь, например, кадку с растением прямо у шкафчика.</p> <h3>Материалы для шкафчиков и тумбочек</h3> <p>При благоустройстве остекленного балкона можно использовать те же материалы, что и для комнатной мебели. Это МДФ, ДСП, фанера, вагонка. Желательно, чтобы детали не были тяжелыми и не слишком нагружали плиту. Вся мебель устанавливается по периметру, плечо сил достаточно большое, а в сочетании с остеклением нагрузка получается значительной. От шкафчиков и полок не требуется большого запаса прочности, можно использовать самую тонкую фанеру или пластик, сделав из бруска прочный каркас. Чтобы упростить процесс уборки в будущем, желательно использовать водостойкие краски или ламинированное покрытие. Протерев дверки влажной тканью, легко сохранять  мебель в чистоте. Для удешевления благоустройства, целесообразно заказывать мебель при ремонте. Это позволит сэкономить на отделке участков, которые будут закрыты шкафами или полками. Для красоты некоторые из дверок можно застеклить обычным или цветным стеклом. О других вариантах рационального использования объема балкона и лоджии вам расскажут сотрудники компании «БалкСтрой». Фото с оригинальными решениями можно посмотреть на сайте.</p></div>');
    }


} )( jQuery );
