(function() {

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

	function bindEvents() {
		$('ul.language li').click(activateLanguage);
		$('#style').niceSelect();

		// get the filter menu button
		$('.options a').click(showFilter);
	}

	bindEvents();

})();