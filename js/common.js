$(document).ready(function() {

	// Resize bg_image
	function heightDetect() {
		$(".main_head").css("height", $(window).height());
		$(".main_head").css("background", "rgba(0,0,0,.5");
	};
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});

	// Pop_up form
	$(".mymagicoverbox").click(function()
	{
				$('#myfond_gris').fadeIn(300);
				var iddiv = $(this).attr("iddiv");
				$('#'+iddiv).fadeIn(300);
				$('#myfond_gris').attr('opendiv',iddiv);
				return false;
	});

	$('#modal_close, #myfond_gris, .mymagicoverbox_fermer').click(function()
	{
				var iddiv = $("#myfond_gris").attr('opendiv');
				$('#myfond_gris').fadeOut(300);
				$('#'+iddiv).fadeOut(300);
	});


	// Scroll to id
	$("a[href*='#']").mPageScroll2id();

	// Burger
	$(document).delegate('.open', 'click', function(event){
	$(this).addClass('oppenned');
		event.stopPropagation();
	});
	
	$(document).delegate('body', 'click', function(event) {
		$('.open').removeClass('oppenned');
	});
	
	$(document).delegate('.oppenned', 'click', function(event){
		$('.open').removeClass('oppenned');
		event.stopPropagation();
	});

	//Fixed header 
	var nav = document.getElementById("navigation");
	var current_position = 0;
	var window_position;

	window.addEventListener('scroll', function() {
	  window_position = window.pageYOffset;

	  if (window_position > current_position) { // Scroll down
	    nav.classList.add("hideNav");
	  } else { // Scroll up
	    nav.classList.remove("hideNav");
	    nav.classList.add("showNav");
	  }
	  current_position = window_position;
	  if (current_position == 0) {
	  	$(".showNav").css("background", "transparent");
	  } else {
	  	$(".showNav").css("background", "#021246");
	  }
	});

	// Readmore
	$('article').readmore({
		speed: 200,
		maxHeight: 750
	});
	

// Acordeon 	
	$('#acordeon .headerAcc').click(function() {			
		if(!$(this).siblings('#acordeon .contentAcc').is(":visible")){
			$('#acordeon').find('.contentAcc').slideUp();
			$('#acordeon').find('.headerAcc').removeClass("selected");
			$(this).siblings('.contentAcc').slideDown();
			$(this).addClass("selected");
		}			
		return false;
	});	


}); 