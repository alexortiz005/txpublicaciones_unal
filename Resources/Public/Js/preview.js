String.prototype.trunc = String.prototype.trunc ||
      function(n){
          return (this.length > n) ? this.substr(0, n-1) + '&hellip;' : this;
      };

$( document ).ready(function() {
	var uriBackground = $('#uri_background').val()
	$('.frame-jumbotron').each(function() {
		if($(this).find('.preview-publicaciones').length>0){
			$(this).css('background-image', 'url(' + uriBackground + ')');
			$(this).css( 'background-size', 'cover');
		}
	});

	$('.croptext').find('p').each(function() {
		var text=$(this).html()
		$(this).html(text.trunc(135))
		console.log()
	});

	$(".preview-publicacion").click(function()
	{
		if($(this).data('link')=="NULL"){
			alert('Unavailable');
		}else{
	    	document.location.href = $(this).data('link');
		}
	});
});