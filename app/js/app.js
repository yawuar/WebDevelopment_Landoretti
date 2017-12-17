(function() {

	function activateLanguage(e) {
		e.preventDefault();
		$('ul.language li').removeClass('active');
		$(e.currentTarget).addClass('active');
	}

	function showOverlay(e) {
		console.log(e);
	}

	function bindEvents() {
		$('ul.language li').click(activateLanguage);
		$('.popular .overlay').hover(showOverlay);
	}

	bindEvents();

})();