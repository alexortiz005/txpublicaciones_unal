String.prototype.trunc = String.prototype.trunc ||
      function(n){
          return (this.length > n) ? this.substr(0, n-1) + '&hellip;' : this;
      };

$( document ).ready(function() {	

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
			window.open(
			  $(this).data('link'),
			  '_blank' // <- This is what makes it open in a new window.
			);
		}
	});
});