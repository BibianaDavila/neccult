$(document).ready(function(){

	var windowsHeight = $(window).height(),
		headerHeight = $('header').outerHeight(),
		bodyHeight = windowsHeight - headerHeight,
		contentHeight = $('.content').height();

	if(bodyHeight>contentHeight){

		var positionTop = (windowsHeight/2) - (contentHeight/2);

		if (positionTop>headerHeight){
			$('.content').css('top',positionTop).addClass('center');
		}
	}

	/*====== Paginação ======*/
	$('.news-page span').click(function(event){
		var id = $(this).attr('href');
		
		/*== altera destaque da pagina ativa ==*/
		$(this).parents('li').addClass('active').siblings().removeClass('active');

		/*== altera a pg aberta ==*/
		$('.new-page').removeClass('opened');
		$('.new-page#'+id).addClass('opened');

	});
	
	$('.ellipsis').ellipsis();

});
$(window).resize(function() {
	$('.ellipsis').ellipsis();
});

