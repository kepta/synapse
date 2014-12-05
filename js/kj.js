
$( document ).ready(function() {
    // your code here
	//$('#othershit').addClass("slideUp");
	
	$(window).scroll(function() {
		
		$('#othershit').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
			//	$(this).addClass("slideDown");
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
			if (imagePos < topOfWindow+600) {
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
	
	
$('circle').addClass("pulse");
	
	console.log("checl");
	
	
	
	$('circle').hover( function() {
		console.log("checkkkk");
		$(this).addClass("slideUp");
	});
	
	});