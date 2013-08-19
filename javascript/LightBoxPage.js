(function($) {
	$(document).ready(function(){
		$("img.imageholder").each(function() {
			var src = $(this).attr('src');
			var a = $('<a/>').attr('href', src);
			a.addClass('lightwindow');
			$(this).wrap(a);
		});
		$(".captionImage.imageholder").removeClass('captionImage');
		$("p.caption.imageholder.left").each(function() {
			$(this).replaceWith("<small class='caption imageholder left'>" + $(this).text() + "</small>");
		});
	});
})(jQuery);
