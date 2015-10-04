$(document).ready(function(){

	// scroll to top code
	$(window).scroll(function(){
		if($(window).scrollTop() > 0)
		{
			$('#scrolltotop').fadeIn('fast');
			// alert('more');
		}
		else
		{
			$('#scrolltotop').fadeOut('fast');
		}
	});
	$('#scrolltotop').click(function(){
		$('html,body').animate({scrollTop : 0},'slow')
	});

	$('.menu .item').click(function(e){
		$('html,body').animate({scrollTop : $($(this).attr('href')).offset().top},'slow');
		return false;
	});

	$('#testimonial > div.testi:gt(0)').hide();


});