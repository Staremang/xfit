/**
 * anchor.js - jQuery Plugin
 * Jump to a specific section smoothly
 *
 * @dependencies	jQuery v1.5.0 http://jquery.com
 * @author			Cornel Boppart <cornel@bopp-art.com>
 * @copyright		Author
 
 * @version		1.0.5 (02/11/2014)
 */

(function ($) {
	
	window.anchor = {
		
		/**
		 * Default settings
		 *
		 */
		settings: {
			transitionDuration: 2000,
			transitionTimingFunction: 'swing',
			labels: {
				error: 'Couldn\'t find any section'
			}
		},

		/**
		 * Initializes the plugin
		 *
		 * @param	{object}	options	The plugin options (Merged with default settings)
		 * @return	{object}	this	The current element itself
		 */
		init: function (options) {
			// Apply merged settings to the current object
			$(this).data('settings', $.extend(anchor.settings, options));

			return this.each(function () {
				var $this = $(this);

				$this.unbind('click').click(function (event) {
					event.preventDefault();
					anchor.jumpTo(
						anchor.getTopOffsetPosition($this),
						$this.data('settings')
					);
				});
			});
		},

		/**
		 * Gets the top offset position
		 *
		 * @param	{object}	$object				The root object to get sections position from
		 * @return	{int}		topOffsetPosition	The top offset position
		 */
		getTopOffsetPosition: function ($object) {
			var href = $object.attr('href'),
				$section = $($(href).get(0)),
				documentHeight = $(document).height(),
				browserHeight = $(window).height();

			if (!$section || $section.length < 1) {
				throw new ReferenceError(anchor.settings.labels.error);
			}

			if (($section.offset().top + browserHeight) > documentHeight) {
				return documentHeight - browserHeight;
			} else {
				return $section.offset().top;
			}
		},
		
		/**
		 * Jumps to the specific position
		 *
		 * @param	{int}		topOffsetPosition	The top offset position
		 * @param	{object}	settings			The object specific settings
		 * @return	{void}
		 */
		jumpTo: function (topOffsetPosition, settings) {
			var $viewport = $('html, body');

			$viewport.animate(
				{scrollTop: topOffsetPosition - 50},
				settings.transitionDuration,
				settings.transitionTimingFunction
			);

				// Stop the animation immediately, if a user manually scrolls during the animation.
			$viewport.bind('scroll mousedown DOMMouseScroll mousewheel keyup', function(event){
				if (event.which > 0 || event.type === 'mousedown' || event.type === 'mousewheel') {
					$viewport.stop().unbind('scroll mousedown DOMMouseScroll mousewheel keyup');
				}
			});
		}

	};

	$.fn.anchor = function (method) {
			// Method calling logic
		if (anchor[method]) {
			return anchor[method].apply(this, Array.prototype.slice.call(arguments, 1));
		} else if (typeof method === 'object' || !method) {
			return anchor.init.apply(this, arguments);
		} else {
			return $.error('Method ' + method + ' does not exist on jQuery.anchor');
		}
	};

})(jQuery);

if (typeof ymaps !== "undefined" && typeof addr !== "undefined") {
	ymaps.ready(init);
	var yaMap;
	function init() {
		ymaps.geocode(addr, {
			results: 1
		}).then(function (res) {

			var coords = res.geoObjects.get(0).geometry.getCoordinates(),
				myPlacemark = new ymaps.Placemark(coords);
			yaMap = new ymaps.Map("map",{
				center: coords,
				zoom: 16,
				controls: []
			});

			yaMap.geoObjects.add(myPlacemark);
		});
	}
}


$(document).ready(function () {
//	var yaMetrika = false;
//	$(document).on('yacounter49821397inited', function () {
//		yaMetrika = true;
//	})
	
	
	$("[data-fancybox]").fancybox({
		margin : [0, 0]
	});

	$('a[data-anchor]').anchor({
		transitionDuration : 1000
	});

	$('input[type=tel]').inputmask({
		'mask': '+7 (999) 999-99-99'
	})

	$('input[type=email]').inputmask({
		'alias': 'email'
	})


	 
//	if (document.documentElement.clientWidth >= 1040) {
//		document.addEventListener('mouseleave', handleMouseleave);
//	}
//	
//	function handleMouseleave (e) {
//		if (e.clientY > 20) return;
//		$.fancybox.open($('#stop-popup-form'));
//		document.removeEventListener('mouseleave', handleMouseleave);
//	}
	 
	
	if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
		$('.section-hero__video').hide();
//		$('.section-hero__video-overlay').hide();
	}

	
	
	
	
	$('[data-menu-btn]').click(function() {
		if ($(this).hasClass('open')) {
			$(this).removeClass('open');
			$('[data-menu]').removeClass('active');
			document.body.style.overflow = 'auto';
		} else {
			$(this).addClass('open');
			$('[data-menu]').addClass('active');
			document.body.style.overflow = 'hidden';
		}
	})
	$('[data-menu]').find('a').click(function () {
		document.querySelector('[data-menu]').classList.remove('active');
		document.querySelector('[data-menu-btn]').classList.remove('open');
		document.body.style.overflow = 'auto';
	})


	
	

	$('form').on('submit', function (e) {
		e.preventDefault();
		
		var form 			= $(this),
			data 			= $(this).serialize(),
			id 				= $(this).attr('id'),
			submitBtn 		= $(this).find('button[type="submit"]'),
			submitBtnText 	= submitBtn.text(),
			sentForms 		= JSON.parse(localStorage.getItem('sentForms'));
		
		if (!sentForms || sentForms == '') {
			sentForms = {
				"interview": false,
				"guestVisit": false,
				"gift": false,
				"callMe": false
			}
		}


		if (id == 'interview-form' && sentForms.interview) {
			alert('Вы уже проходили опрос!');
			return;
		} else if (id == 'guest-visit-form' && sentForms.guestVisit) {
			alert('Вы уже записались на гостевой визит!');
			$.fancybox.close();
			return;
		}

		
		
		$.ajax({
			type: "POST",
			url: url,
			data: data,
			beforeSend: function () {
				submitBtn.attr('disabled', '');
				submitBtn.text('Отправка...');
			},
			error: function (error) {
				alert('Ошибка ' + error.status + '. Повторите позднее.');
				submitBtn.removeAttr('disabled');
				submitBtn.text(submitBtnText);
			},
			success: function (data) {
				submitBtn.removeAttr('disabled');
				submitBtn.text(submitBtnText);
				
				data = JSON.parse(data);
				
				var targetName = '';
				
				if (data.sended) {
					switch (id) {
						case 'interview-form':

							if (!sentForms.gift) {
								$('#gift-parent-name').val($('#6-step-name').val());
								$.fancybox.open($('#thanks-and-gift-form'));
							} else {
								$.fancybox.open($('#thanks'));
							}

							targetName = 'karta';
							sentForms.interview = true;
							break;

						case 'guest-visit-form':


							if (!sentForms.gift) {
								$('#gift-parent-name').val($('#guest-visit-form__name').val());
								$.fancybox.open($('#thanks-and-gift-form'));
							} else {
								$.fancybox.open($('#thanks'));
							}

							targetName = 'gostevoi';
							sentForms.guestVisit = true;
							break; 

						case 'call-me-form':
							$.fancybox.close();
							$.fancybox.open($('#thanks'));

							switch (form.data('form')) {
								case 'promo-1':
									targetName = 'promo2';
									break;

								case 'promo-2':
									targetName = 'gost2';
									break;

								default:
									targetName = 'zvonok';
							}
							break;

						case 'thanks-and-gift-form':
							sentForms.gift = true;
							$.fancybox.close();
							$.fancybox.open($('#thanks'));

							targetName = 'podarok';
							break;

						case 'stop-popup-form':
							$.fancybox.close();
							$.fancybox.open($('#thanks'));

							targetName = 'popup';
							break;

						// Формы(2) "Узнать подробнее" на промо-строанице 1 (/promo)
						case 'promo-form-1':
						case 'promo-form-2':
							$.fancybox.close();
							$.fancybox.open($('#thanks'));

							targetName = 'promo1';
							break;

						// Формы(2) гостевого визита на промо-строанице 2 (/gostevoi)
						case 'guest-visit-promo-form-1':
						case 'guest-visit-promo-form-2':
							$.fancybox.close();
							$.fancybox.open($('#thanks'));

							targetName = 'gost1';
							break;
							
						case 'ask-a-question':
							$.fancybox.close();
							$.fancybox.open($('#thanks'));
							
							targetName = 'vopros';
							break;
							
						case 'anketa':
							$.fancybox.close();
							$.fancybox.open($('#thanks'));
							
							targetName = 'anketa';
							break;
					}
					
					if (typeof yaCounter49821397 != 'undefined') {
						yaCounter49821397.reachGoal(targetName);
					}

//					gtag('event', 'sendforms', { 'event_category': 'zayavka', 'event_action': 'podtverdit'});
					localStorage.setItem('sentForms', JSON.stringify(sentForms));

				} else {
					alert (data.message);
				}

			}
		});
	});

	
	
	
	

	var lastStep = 1;
	
	if (document.documentElement.clientWidth >= 1040) {
		$('.bonuses__count').text('1000');
		$('#bonus-1').addClass('active');
	} else {
		$('.bonuses__count').text('5000');
		$('.bonuses__item').addClass('active');
	}
	$('[data-step="1"]').addClass('active');
	$('[data-step-scale="1"]').addClass('active');
	$('.step__container').height($('[data-step="1"]').outerHeight());
	
	$('[data-interview-to]').click(function() {
		var to = $(this).attr('data-interview-to');
		
		var checked = true;
		for (var i = 1; i < to; i++) {
			$('[data-step="' + i + '"]').find('input').each(function (i, input) {
				if (!input.checkValidity()) {
					checked = false;
				}
			})
		}
		
		if (!checked) {
//			$('#interview-form').find('[type="submit"]').click();
			alert('Выберите ответ!')
			return;
		}
		
		if (lastStep < to) {
			lastStep = to;
		}
		
		$('[data-step-scale]').removeClass('active');
//		for (var i = 1; i <= to; i++) {
		$('[data-step-scale="' + i + '"]').addClass('active');
//		}
		
		$('[data-step]').removeClass('active');
		$('[data-step="' + to + '"]').addClass('active');
		$('.step__container').height($('[data-step="' + to + '"]').outerHeight());
		
		if (document.documentElement.clientWidth >= 1040) {
			if (lastStep == 2) {
				$('.bonuses__count').text('2000');
				$('#bonus-2').addClass('active');
			} else if (lastStep == 3) {
				$('.bonuses__count').text('3000');
				$('#bonus-3').addClass('active');
			} else if (lastStep == 4) {
				$('.bonuses__count').text('4000');
				$('#bonus-4').addClass('active');
			} else if (lastStep == 5) {
				$('.bonuses__count').text('5000');
				$('#bonus-5').addClass('active');
			}
		}
	})
	
	
	

	$('.scheme-list__item').hover(
		function() {
			$('.scheme-map__pin[data-pin="' + $(this).attr('data-pin') + '"]').addClass('active');
		},
		function() {
			$('.scheme-map__pin').removeClass('active');
		}
	);

	$('.scheme-map__pin').hover(
		function() {
			var el = $('.scheme-list__item[data-pin="' + $(this).attr('data-pin') + '"]'),
				pos = el.position().top + $('.scheme-list__container').scrollTop() - 60;

			console.log(pos);
			el.addClass('active');
			$('.scheme-list__container').animate({ scrollTop: pos }, 500)
		},
		function() {
			$('.scheme-list__item').removeClass('active');
		}
	)
	$('.scheme-list__btn-up').click(function() {
		$('.scheme-list__container').animate({ scrollTop: 0 }, 500);
	})
	$('.scheme-list__btn-down').click(function() {
		$('.scheme-list__container').animate({ scrollTop: 700 }, 500);
	})


	

	$('.trainer-slider').addClass('owl-carousel');
	$('.trainer-slider').owlCarousel({ 
		loop: true,
		nav: false,
		navText: [ '<button class="btn-arrow btn-arrow_left"></button>', '<button class="btn-arrow btn-arrow_right"></button>' ],
		items: 1,
		center: true,
		onInitialized: teamSliderChange,
		onTranslated: teamSliderChange,
		nav: true,
		responsive : {
			1040 : {
				items: 3
//				nav: true
			}
		}
	})
	function teamSliderChange () {
		var active = $('.trainer-slider').find('.owl-item.center').find('.trainer-slider__photo');
		$('.section-trainer__name').text(active.data('trainer-name'))
		$('.section-trainer__description').text(active.data('trainer-description'))
	}
	
	$('.gallery-slider').addClass('owl-carousel');
	$('.gallery-slider').owlCarousel({ 
		loop: true,
		nav: false,
		navText: [ '<button class="btn-arrow btn-arrow_left"></button>', '<button class="btn-arrow btn-arrow_right"></button>' ],
		items: 1,
		onInitialized: sliderChange,
		onTranslated: sliderChange,
		nav: true
	})
	function sliderChange (e) {

		var owlItems	= e.item.count,
			item			= e.item.index,
			calcItem	= Math.floor(item - (e.item.count / 2) + 1);

		if (calcItem === 0) {
			calcItem = owlItems;
		}
		if (calcItem > owlItems) {
			calcItem = 1;
		}
		
		if (calcItem < 10) {
			calcItem = '0' + String(calcItem);
		}
		if (owlItems < 10) {
			owlItems = '0' + String(owlItems);
		}
		$('.gallery__index').html(calcItem);
		$('.gallery__count').html(owlItems);
		$('.gallery__title').html($('.gallery-slider .owl-item.active').find('img').attr('alt'));

	}
})