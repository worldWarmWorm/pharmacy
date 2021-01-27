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
	$('.form-address__content').on('click', 'label', function () {
		$('.form-address__content label').prop('class', false);
		$(this).toggleClass('checked-label');
	});

	$('.settings__left').on('click', '.filter', function () {
		$(this).toggleClass('reverse');
		$(this).siblings('.filter').removeClass('active');
		$(this).addClass('active');
	});

	var slider = $('.stateble-elements');

	if (slider.length) {
		$(slider).slick({
			slidesToShow: 4,
			speed: 1000,
			responsive: [{
					breakpoint: 1151,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 769,
					settings: {
						slidesToShow: 2
					}
				}
			]
		});
	}

	var sliderPopular = $('.stateble-elements-sub-category');

	if (sliderPopular.length) {
		$(sliderPopular).slick({
			slidesToShow: 3,
			speed: 1000,
			responsive: [{
				breakpoint: 1151,
				settings: {
					slidesToShow: 2
				}
			}]
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

	$('.show-content').click(function () {
		$(this).siblings('.products__indication-content').toggleClass('more-content');
	});

	$('.products__tabs').on('click', '.products__tab', function () {
		var tab = $(this).data('tab');

		$(this).siblings('.products__tab').removeClass('active-tab');
		$('.products__tab-content').removeClass('active-content');
		$(this).addClass('active-tab');

		$('.products__tab-content').each(function () {
			if ($(this).data('content') == tab) {
				$(this).addClass('active-content');
			}
		});
	});

	var menu_bar = $('.adaptive-nav');
	$('body').on('click', '.burger_main', function () {
		$(this).toggleClass('burder_active');
		menu_bar.slideToggle(300);
	});

	$('body').on('click', '.burger_cabinet', function () {
		$(this).toggleClass('burder_active');
		$(this).siblings('ul').slideToggle(300);
	});

	if ($(window).width() <= 1150) {
		$('.catalog').addClass('catalog_adaptive');
	}
});

$(function () {
	fixedFooter();
});

$(window).resize(function () {
	fixedFooter();
});