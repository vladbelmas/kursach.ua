$(document).ready(function($) {
	
	$(".smooth-scroll").on("click", function (event) {
        var menu = $(this).attr('href');
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top - 50;
        $('body,html').animate({scrollTop: top}, 1000);
	});
	
	var offset = 100,	
		offset_opacity = 300,	
		scroll_top_duration = 900,	
		$back_to_top = $('#main-logo');
		$back_to_top1 = $('#zakaz-form');
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
	
	$('.btn-zak').on('click', function (event) {
		event.preventDefault();
		$('body,html').animate({
				scrollTop: $('#idform'),
			}, scroll_top_duration
		);
		
    });
    

});