$( document ).ready(function() {
	var uriBackground = $('#uri_background').val()
	$('.frame-jumbotron').each(function() {
		if($(this).find('.preview-publicaciones').length>0){
			$(this).css('background-image', 'url(' + uriBackground + ')');
			$(this).css( 'background-size', 'cover');
		}
	});
});