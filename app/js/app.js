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

	function showForm(e) {
		e.preventDefault();
		$('.nav.login').css('display', 'none');
		$('.loginForm').css('display', 'block');
	}

	function login(e) {
		e.preventDefault();
		var values = $(e.target).serializeArray();

		var user = values[0];
		var password = values[1];
		
		if(user.value === 'yawuar' && password.value === 'test123') {
			$('.nav.loginForm').css('display', 'none');
			$('.loggedIn').css('display', 'block');
		}

		return false;
	}

	function validateForm() {
		$('form#form').validate({
			rules: {
				what: {
					required: true,
				},
				artist: {
					required: true,
				},
				info: {
					required: true,
				},
			},
			highlight: function (element, errorClass, validClass) {
				//$(element).nextAll('.form-control-feedback').show().removeClass('glyphicon-ok').addClass('glyphicon-remove');
				$(element).addClass(errorClass).removeClass(validClass);
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				console.log(validClass);
			},
			success: function (element) {
				$(element).nextAll('.form-control-feedback').show().removeClass('glyphicon-remove').addClass('glyphicon-ok');
				element.closest('.form-group').removeClass('has-error').addClass('has-success');
				$(element).remove();
			}
		});
		$('form#add_form').validate({
			rules: {
				title: {
					required: true,
				},
				year: {
					required: true,
				},
				width: {
					required: true,
				},
				height: {
					required: true,
				},
				depth: {
					required: true,
				},
				description: {
					required: true,
				},
				origin: {
					required: true,
				},
				image: {
					required: true,
				},
				signature: {
					required: true,
				},
				optional: {
					required: true,
				},
				minimum: {
					required: true,
				},
				maximum: {
					required: true,
				},
				price: {
					required: true,
				},
				end: {
					required: true,
				},
			},
			highlight: function (element, errorClass, validClass) {
				//$(element).nextAll('.form-control-feedback').show().removeClass('glyphicon-ok').addClass('glyphicon-remove');
				$(element).addClass(errorClass).removeClass(validClass);
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				console.log(validClass);
			},
			success: function (element) {
				$(element).nextAll('.form-control-feedback').show().removeClass('glyphicon-remove').addClass('glyphicon-ok');
				element.closest('.form-group').removeClass('has-error').addClass('has-success');
				$(element).remove();
			}
		});
		$('form#register_form').validate({
			rules: {
				company: {
					required: true,
				},
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
				},
				password_confirmation: {
					required: true,
				},
				country: {
					required: true,
				},
				zipcode: {
					required: true,
				},
				city: {
					required: true,
				},
				address: {
					required: true,
				},
				'phone-code': {
					required: true,
				},
				'phone-number': {
					required: true,
				},
				'account_number': {
					required: true,
				},
				'vat-number': {
					required: true,
				},
				payment: {
					required: true,
				},
			},
			highlight: function (element, errorClass, validClass) {
				//$(element).nextAll('.form-control-feedback').show().removeClass('glyphicon-ok').addClass('glyphicon-remove');
				$(element).addClass(errorClass).removeClass(validClass);
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				console.log(validClass);
			},
			success: function (element) {
				$(element).nextAll('.form-control-feedback').show().removeClass('glyphicon-remove').addClass('glyphicon-ok');
				element.closest('.form-group').removeClass('has-error').addClass('has-success');
				$(element).remove();
			}
		});
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

		$('.login-btn').click(showForm);

		$('.login-form').submit(login);

		validateForm();
	}

	showImage(imageIndex);
	bindEvents();

})();