
$( document ).ready(function() {
    // your code here
	$('line').each(function() {
		var x = Math.floor(100*Math.random());
		x=x.toString();
		x="n"+x;
		$(this).attr("id", x);
	});
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
	
		$('.events1').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+800) {
				$(this).addClass("slideRight");
			}
		});
		
		$('.events2').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+800) {
				$(this).addClass("slideRight");
			}
		});
		
		$('.events3').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+800) {
				$(this).addClass("slideRight");
			}
		});
		
		$('#sponsorpic1').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+800) {
				$(this).addClass("slideRight");
			}
		});
		$('#sponsorpic2').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+800) {
				$(this).addClass("slideLeft");
				
			}
		});
	});

	
	// Inline popups
	$('.inline-popups').magnificPopup({
	  delegate: 'a',
	  removalDelay: 500, //delay removal by X to allow out-animation
	  callbacks: {
	    beforeOpen: function() {
	       this.st.mainClass = this.st.el.attr('data-effect');
	    }
	  },
	  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
	});


	// Image popups
	$('#image-popups').magnificPopup({
	  delegate: 'a',
	  type: 'image',
	  removalDelay: 500, //delay removal by X to allow out-animation
	  callbacks: {
	    beforeOpen: function() {
	      // just a hack that adds mfp-anim class to markup 
	       this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
	       this.st.mainClass = this.st.el.attr('data-effect');
	    }
	  },
	  closeOnContentClick: true,
	  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
	});


	// Hinge effect popup
	$('a.hinge').magnificPopup({
	  mainClass: 'mfp-with-fade',
	  removalDelay: 1000, //delay removal by X to allow out-animation
	  callbacks: {
	    beforeClose: function() {
	        this.content.addClass('hinge');
	    }, 
	    close: function() {
	        this.content.removeClass('hinge'); 
	    }
	  },
	  midClick: true
	});
	

	$('#firstball').addClass("slideDownX");
	$('#secondball').addClass("slideDownX slideDownX2");
	$('#thirdball').addClass("slideDownX slideDownX3");
	$('#fourthball').addClass("slideDownX slideDownX4");
	$('#fifthball').addClass("slideDownX slideDownX4");
	
	
	
	
	});