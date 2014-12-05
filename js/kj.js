
$( document ).ready(function() {
    // your code here
	
	$(".fancybox").fancybox();
	$(window).scroll(function() {
		
		
		$('#firstball').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+1000) {
				$(this).addClass("slideDown");
			}
		});
		$('#cyno').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+800) {
				$(this).addClass("slideDown");
			}
		});
		
		$('#ramp').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+700) {
				$(this).addClass("slideDown");
			}
		});
		$('#piano').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+600) {
				$(this).addClass("slideDown");
			}
		});
		
		$('#rock').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+500) {
				$(this).addClass("slideDown");
			}
		});
		$('#eventzone').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+500) {
				$(this).addClass("slideDown");
			}
		});
		
	});

	

	$('#firstball').addClass("slideDownX");
	$('#secondball').addClass("slideDownX slideDownX2");
	$('#thirdball').addClass("slideDownX slideDownX3");
	$('#fourthball').addClass("slideDownX slideDownX4");
	$('#fifthball').addClass("slideDownX slideDownX4");
	
	
	
	
	});