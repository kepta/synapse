$( document ).ready(function() {
    // your code here

$(window).scroll(function() {
		$('#animatedElement').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});
	});
	
	

	$('#othershit').hover(function() {
		console.log("hi");
		$(this).addClass("slideUp");
	});
	
	console.log("checl");
	
	
	
	$('circle').hover( function() {
		$(this).addClass("slideUp");
	});
	
	});