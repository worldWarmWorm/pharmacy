function fixedFooter() {
	var footer = $('.footer');
	if (footer.length) {
		var height = $(window).height() - footer.position().top - footer.innerHeight();
		if (height > 0) {
			footer.css({
				'margin-top': height + 'px'
			});
		}
	}
}

function setEqualHeight(columns) {
	var tallestcolumn = 0;
	columns.each(function () {
		currentHeight = $(this).height();
		if (currentHeight > tallestcolumn) {
			tallestcolumn = currentHeight;
		}
	});
	columns.height(tallestcolumn);
}

function chooseCity() {
	var chosenCity = $('.city__current-on');

	$('.settings-right ul').on('click', 'li', function () {
		if (!$(this).hasClass('choosen-city')) {
			$('.settings-right ul li').removeClass('choosen-city');
			$(this).addClass('choosen-city');
			chosenCity.text($(this).text().split('\n')[2]);
		}
	});

	$('.settings-left ul').on('click', 'li', function () {
		if (!$(this).hasClass('choosen-region')) {
			$('.settings-left ul li').removeClass('choosen-region');
			$(this).addClass('choosen-region');

			var tab = $(this).data('tab');
			$('.settings-right > ul').removeClass('appear');
			$('.settings-right > ul').each(function () {
				if (tab == $(this).data('content')) {
					$(this).addClass('appear');
				}
			});
		}
	});
}

function setCatalog() {
	$('.catalog__tabs ul').on('click', 'li', function () {
		if (!$(this).hasClass('choosen-city')) {
			$('.catalog__tabs ul li').removeClass('active-tab');
			$(this).addClass('active-tab');

			var tab = $(this).data('tab');
			$('.catalog__changing-content ul').removeClass('appear');
			$('.catalog__changing-content ul').each(function () {
				if (tab == $(this).data('content')) {
					$(this).addClass('appear');
				}
			});
		}
	});

	$('.catalog__changing-content ul').on('click', 'li a', function () {
		if (!$(this).hasClass('chosen-good')) {
			$('.catalog__changing-content ul li a').removeClass('chosen-good');
			$(this).addClass('chosen-good');
		}
	});
}

$(function () {
	$('.settings__left').on('click', '.filter', function () {
		$(this).toggleClass('reverse');
		$(this).siblings('.filter').removeClass('active');
		$(this).addClass('active');
	});

	var slider = $('.stateble-elements');

	if (slider.length) {
		$(slider).slick({
			slidesToShow: 4,
			speed: 1000
		});
	}

	var sliderPopular = $('.stateble-elements-sub-category');

	if (sliderPopular.length) {
		$(sliderPopular).slick({
			slidesToShow: 3,
			speed: 1000
		});
	}

	$('.to-cart').hover(
		function () {
			$(this).closest('.slider-item').addClass('stateble-element_hover');
		},
		function () {
			$(this).closest('.slider-item').removeClass('stateble-element_hover');
		}
	);

	$('.to-cart').click(function () {
		var activeState = 'В корзине',
			defaultState = 'В корзину';

		if ($(this).text() == defaultState) {
			$(this).text(activeState);
		} else {
			$(this).text(defaultState);
		}

		$(this).closest('.stateble-element').toggleClass('stateble-element_picked');
	});

	setEqualHeight($(".sales__item"));
	setEqualHeight($(".popular__item"));
	setEqualHeight($(".analog__item"));

	// $(document).on('click', '.up', function(e) {
	// 	var input = $(this).siblings('.count'),
	// 		value = +input.val();

	// 	value = value + 1;
	// 	console.log(value)
	// });




	//счётчик в корзине
	// var body = jQuery('body');

	// body.on('click', '.counter-number_minus', function () {
	// 	var inp_data = jQuery(this).parent('.counter-number').find('input.counter-backet_input');
	// 	var data = parseInt(inp_data.val());
	// 	if (data > 1) var new_data = data - 1;
	// 	if (new_data == 0 || !(!!(new_data))) new_data = inp_data.attr('min');
	// 	inp_data.val(new_data).trigger('change');

	// 	if (jQuery('.additive').hasClass('active-add') && new_data == 0) {
	// 		inp_data.closest('.additive').removeClass('active-add');
	// 	}

	// });

	// body.on('click', '.counter-number_plus', function () {
	// 	var inp_data = jQuery(this).parent('.counter-number').find('input.counter-backet_input');
	// 	var data = parseInt(inp_data.val());
	// 	var new_data = data + 1;
	// 	inp_data.val(new_data).trigger('change');

	// 	if (new_data > 0) {
	// 		inp_data.closest('.additive').addClass('active-add');
	// 	}
	// });







});

$(function () {
	fixedFooter();
});

$(window).resize(function () {
	fixedFooter();
});