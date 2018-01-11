(function() {

	var imageIndex = 1;

	function activateLanguage(e) {
		e.preventDefault();
		$('ul.language li').removeClass('active');
		$(e.currentTarget).addClass('active');
	}

	function showFilter(e) {
		e.preventDefault();
		$('#overview-filter').toggleClass("active");
		$('.options a').toggleClass('rotate');
	}

	function carousel(e) {
		var $isRight = $(e.target).hasClass('right');
		var index = -1;
		if($isRight) {
			index = 1;
		}

		showImage(imageIndex += index);
	}

	function currentImage(e) {
		showImage(imageIndex = $(e.currentTarget).data('id'));
	}

	function showImage(n) {
		var i;
		var images = $('.carousel-images .carousel-image');
		var dots = $('.dots .dot');

		if(n > images.length) {
			imageIndex = 1;
		}

		if (n < 1) {
			imageIndex = images.length;
		}

		for (i = 0; i < images.length; i++) {
			images.eq(i).css('display', 'none');
		}

		for (i = 0; i < dots.length; i++) {
			dots.eq(i).removeClass('active');
		}

		images.eq(imageIndex - 1).css('display', 'block');
		dots.eq(imageIndex - 1).toggleClass('active');
	}

	function bindEvents() {
		$('ul.language li').click(activateLanguage);
		$('#style').niceSelect();

		// get the filter menu button
		$('.options a').click(showFilter);

		// Carousel
		$('.left').click(carousel);
		$('.right').click(carousel);

		$('.dots .dot').click(currentImage);
	}

	showImage(imageIndex);
	bindEvents();

})();