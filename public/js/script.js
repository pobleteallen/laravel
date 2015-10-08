$(document).ready(function(){

	// scroll to top code
	// $(window).scroll(function(){
	// 	if($(window).scrollTop() > 0)
	// 	{
	// 		$('#scrolltotop').fadeIn('fast');
	// 		// alert('more');
	// 	}
	// 	else
	// 	{
	// 		$('#scrolltotop').fadeOut('fast');
	// 	}
	// });
	// $('#scrolltotop').click(function(){
	// 	$('html,body').animate({scrollTop : 0},'slow')
	// });

	//after user passed the header div fixed menu will appear
	$(window).scroll(function(){
		if($(window).scrollTop() == 0)
		{
			$('body').css('overflow','hidden');
		}
		else
		{
			$('body').css('overflow','auto');
		}
		
		if($(window).scrollTop() > 0)
		{
			if($(window).width() > 700)
			{
				$('#fixed-menu').removeClass('secondary')
				$('#fixed-menu .item:gt(0)').css('display','inline-block');
			}
			
		}
		else
		{
			$('#fixed-menu').addClass('secondary')
			$('#fixed-menu .item:gt(0)').css('display','none');
		}
	});

	//everytime the viewport change this will trigger
	$(window).resize(function(){
		//when ever the viewport is changing style of menu change
		if($(window).width() > 700)
		{
			if($(window).scrollTop() > $('#header')[0].scrollHeight)
			{
				$('#fixed-menu').removeClass('secondary')
				$('#fixed-menu .item:gt(0)').css('display','inline-block');
			}
			
		}
		else
		{
			$('#fixed-menu').addClass('secondary')
			$('#fixed-menu .item:gt(0)').css('display','none');
		}
	});


	//slide to navigate site
	$('#navigate-site').click(function(){
		$('html,body').animate({ scrollTop: $('#header')[0].scrollHeight },'slow', function(){
			$('body').css('overflow','auto');
		});
		
	});

	//menu internal link transition
	$('.menu .item').click(function(){
		$('html,body').animate({scrollTop : $($(this).attr('href')).offset().top},'slow');
		return false;
	});

	//header quote animate
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
	//$('.ui.sidebar').sidebar({overlay: true, scrollLock: true},'attach events','.mobile.item');
	$('#fixed-menu').on('click','.mobile.item',function(){
		$('.ui.sidebar').sidebar({overlay: true, scrollLock: true}).sidebar('show');
	});
	
	
});