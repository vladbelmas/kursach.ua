jQuery(document).ready(function($) {	
	var offset = 100,	
		offset_opacity = 300,	
		scroll_top_duration = 900,	
		$back_to_top = $('#main-logo');
        $(window).scroll(function(){
            if ($(this).scrollTop()>0){
                $back_to_top.addClass("min-logo");
            }
            else{
                $back_to_top.removeClass("min-logo");
            }
        });
	/*$(window).scroll(function () {
		( $(this).scrollTop() > 0 ) ? $back_to_top.addClass('min-logo') : $back_to_top.removeClass('min-logo');
		if ($(this).scrollTop() > offset_opacity) {
			$back_to_top.addClass('fade-out');
		}
	});*/
	
	/*$back_to_top.on('click', function (event) {
		event.preventDefault();
		$('body,html').animate({
				scrollTop: 0,
			}, scroll_top_duration
		);
    });*/
    

});