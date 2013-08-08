(function($){ 
	$(document).ready(function() {
			var $root = $('html, body');
			$('a').click(function(){
					$root.animate({
							scrollTop: $( $.attr(this, 'href') ).offset().top - 40
					}, 500);
    return false;
		});	
	
	}); 
	
})(jQuery);
