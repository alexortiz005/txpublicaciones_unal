function clickTipo(tipo) {	

	$('.publicacion').each(function(index,value) {

		if($(this).data('tipos').indexOf(tipo)>=0){
			$(this).show()
		}else{
			$(this).hide()
		}
		
	});

	loadMasonry();

}

function loadMasonry(){
	$('.grid').masonry({
	  itemSelector: '.grid-item',
	  columnWidth: '.grid-sizer',
	  percentPosition: true
	});	
}

loadMasonry();
