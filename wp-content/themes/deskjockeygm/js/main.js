(function($) {
	$(document).ready(function() {
		$('a').click(function(){
		    $('html, body').animate({
		        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
		    }, 1500);
		    return false;
		});
	});
})(jQuery);