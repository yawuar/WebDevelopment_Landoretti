(function() {

	function activateLanguage(e) {
		e.preventDefault();
		$('ul.language li').removeClass('active');
		$(e.currentTarget).addClass('active');
	}

	function bindEvents() {
		$('ul.language li').click(activateLanguage);
	}

	bindEvents();

})();