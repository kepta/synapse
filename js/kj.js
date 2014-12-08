
$( document ).ready(function() {
    // your code here
	 $(".loader").fadeOut("slow");
	$('line').each(function() {
		var x = Math.floor(150*Math.random());
		x=x.toString();
		x="n"+x;
		$(this).attr("id", x);
	});
	
	$(".pop-clickable").hoverIntent({
		over:function() {
		console.log("hover");
		$(this).children().next().show("slow");
		
		
	},out:function(){
		$(this).children().next().hide("slow");
	},timeout:500});
	$(".btnmine" ).mouseenter(function() {
		$(".intro").css("background-color","#de4f4f");
		$(".stats").css("background-color","#de4f4f");
		$('line').each(function() {
			
			$(this).attr("class", "redLine");
			$(this).attr("id", " ");
		});
	}).mouseleave(function() {
		$(".intro").css("background-color","#27272b");
		$(".stats").css("background-color","#27272b")
		$('line').each(function() {
			
			$(this).attr("class", " ");
			var x = Math.floor(150*Math.random());
			x=x.toString();
			x="n"+x;
			$(this).attr("id", x);
		});
	});
	
$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        padding : 0
    });
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
			if (imagePos < topOfWindow+620) {
				$(this).addClass("slideDown");
			}
		});
		
		$('#ramp').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+580) {
				$(this).addClass("slideDown");
			}
		});
		$('#piano').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+540) {
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
	
	
	$(function(){
	  $("#slides").slidesjs({
	    width: 500,
	    height: 500,
		  navigation: {
		        active: false,
		          // [boolean] Generates next and previous buttons.
		          // You can set to false and use your own buttons.
		          // User defined buttons must have the following:
		          // previous button: class="slidesjs-previous slidesjs-navigation"
		          // next button: class="slidesjs-next slidesjs-navigation"
		        effect: "slide"
		          // [string] Can be either "slide" or "fade".
		      },
			  pagination: {
				  active:false
			  },
			  play: {
				  auto:true,interval: 3000
			  }
	  });
	});
	
	
	$(function(){
	  $("#slide-intro").slidesjs({
	    width: 300,
	    height: 50,
		  navigation: {
		        active: false,
		          // [boolean] Generates next and previous buttons.
		          // You can set to false and use your own buttons.
		          // User defined buttons must have the following:
		          // previous button: class="slidesjs-previous slidesjs-navigation"
		          // next button: class="slidesjs-next slidesjs-navigation"
		        effect: "slide"
		          // [string] Can be either "slide" or "fade".
		      },
			  pagination: {
				  active:false
			  },
			  play: {
				  auto:true,interval: 9000
			  }
	  });
	});
	
	
	});
	
	
	
	(function($){$.fn.hoverIntent=function(handlerIn,handlerOut,selector){var cfg={interval:100,sensitivity:6,timeout:0};if(typeof handlerIn==="object"){cfg=$.extend(cfg,handlerIn)}else{if($.isFunction(handlerOut)){cfg=$.extend(cfg,{over:handlerIn,out:handlerOut,selector:selector})}else{cfg=$.extend(cfg,{over:handlerIn,out:handlerIn,selector:handlerOut})}}var cX,cY,pX,pY;var track=function(ev){cX=ev.pageX;cY=ev.pageY};var compare=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);if(Math.sqrt((pX-cX)*(pX-cX)+(pY-cY)*(pY-cY))<cfg.sensitivity){$(ob).off("mousemove.hoverIntent",track);ob.hoverIntent_s=true;return cfg.over.apply(ob,[ev])}else{pX=cX;pY=cY;ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}};var delay=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);ob.hoverIntent_s=false;return cfg.out.apply(ob,[ev])};var handleHover=function(e){var ev=$.extend({},e);var ob=this;if(ob.hoverIntent_t){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t)}if(e.type==="mouseenter"){pX=ev.pageX;pY=ev.pageY;$(ob).on("mousemove.hoverIntent",track);if(!ob.hoverIntent_s){ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}}else{$(ob).off("mousemove.hoverIntent",track);if(ob.hoverIntent_s){ob.hoverIntent_t=setTimeout(function(){delay(ev,ob)},cfg.timeout)}}};return this.on({"mouseenter.hoverIntent":handleHover,"mouseleave.hoverIntent":handleHover},cfg.selector)}})(jQuery);