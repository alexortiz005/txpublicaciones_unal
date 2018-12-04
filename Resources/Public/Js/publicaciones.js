var flag=true;

function loadMasonry(){
	$('.grid').masonry({
	  itemSelector: '.grid-item',
	  columnWidth: '.grid-sizer',
	  percentPosition: true
	});	
}

$('.botonTipoPublicacion').click(function() {

	var tipo=$(this).data('tipo')

	if(tipo>=0){

		flag=false;
	  	$('.publicacion').each(function(index,value) {

			if($(this).data('tipos').indexOf(tipo)>=0){
				$(this).show()
			}else{
				$(this).hide()
			}
			
		});
	}else{
		$('.publicacion').show();		
	}

	loadMasonry();	

	$('.botonTipoPublicacion').removeClass('active');
	$(this).addClass('active');

});

window.onload = function () {
	$('.tipoGlobal').trigger('click')
	$('.publicaciones-loader').hide();
}
