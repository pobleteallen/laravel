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

	$('.menu .item').click(function(){
		$('html,body').animate({scrollTop : $($(this).attr('href')).offset().top},'slow');
		return false;
	});

	//header slide
	$('#header .ui.header span li:gt(0)').hide();
	setInterval(function(){
		$('#header .ui.header span li:first')
		.transition({ animation: 'slide down', duration: '1s', displayType: 'inline-block' })
		.next()
		.transition({ animation: 'slide up', duration: '1s', displayType: 'inline-block' })
		.end()
		.appendTo('#header .ui.header span')
	},3000);

	// feedback slide
	$('.testi:gt(0)').hide();
	setInterval(function(){
		$('.testi:first')
		.transition('slide right', 1000)
		.next()
		.transition('slide left', 1000)
		.end()
		.appendTo('.testimonial-holder');
	}, 5000);

	//mobile menu
	$('#mainmenu').on('click','.mobile.item',function(){
		$('.ui.sidebar').sidebar('show');
	});
	
	
});