;(function($){
    // your code

	/*function myFunction() {
	    var obj = document.getElementById("h01");
	    obj.innerHTML = "Hello jQuery";
	}
	onload = myFunction;*/
	function myFunction2() {
	    $("#h01").html("Hello jQuery2");
	}
	$(document).ready(myFunction2);

	// Close all submenus 
	function closeAllSubmenus() {
		$("#navbar .menu > li .submenu").slideUp();
	}

	/*$(document).ready(function(){
	    $("p").click(function(){
	        alert($(this).html());
	    });
	});*/

	// Calculate top of navigation position for stickiness 
	var navbarPos; 
	$(document).ready(function() { 
/*			var windowWidth = $(window).width();

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				// calculate the width of each navigation button 
				// div#navbar ul.menu > li
				var navButtonWidth = (windowWidth / 7); 
				alert(navButtonWidth); 
				var navFontSize = navButtonWidth * 0.4; 
				$("div#navbar ul.menu > li").css({"max-width":navButtonWidth, "font-size" : navFontSize + "px"});


		}*/


		navbarPos = $("#navbar").offset().top;


		// Toggle submenu by click 
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$("#navbar .menu > li").click(function(e) {
				//alert("0");
				//var clicked = $(this).data("clicked"); 
				//alert(clicked);
				var submenuOpened = $(this).hasClass("submenuOpened"); 
				if(submenuOpened) {
					//alert("clicked" + clicked);
					//$(this).data("clicked", false);
					// go to link 
					//$(this).removeClass("submenuOpened");
					
				} else {	// It has not been clicked. Open the submenu only if it has a submenu 
					//alert("not clicked" + clicked);
					//$(this).data("clicked", true); 
					var $element = $(".submenu", this);	// what we are toggling 
					if($element.length) {	// only if the submenu exists do we do something else. Otherwise, it will just go to the menu link
						//alert("wee");
						$("#navbar .menu > li > .submenu").not($element).slideUp(); // slide up other elements 
						$("#navbar .menu > li").not(this).removeClass("submenuOpened");
						$(this).addClass("submenuOpened");  
						$element.stop(true, true).slideToggle(400); 	// toggle element 
						return false;
					}
				}
				/*
				if(clicked) {	// 1 - if it's been clicked, this is our second click 
					$(this).data("clicked", false); 
				else {	// 0 - first click 
					$(this).data("clicked", true); 
					alert("2");
					var $element = $(".submenu", this);	// what we are toggling 
					closeAllSubmenus();
					$("#navbar > li > .submenu").not($element).slideUp(); // slide up other elements 
					$element.stop(true, true).slideToggle(400); 	// toggle element 
				}

				return false; */
			});

			$("#navbar .menu > li > .submenu > li").click(function(e) {
				e.stopPropagation(); 	// stop events from bubbling from submenu clicks 
			});

			$(document).on('vclick', function(e) {
				//alert("wee");
				e.stopPropagation(); 
					//if(!$(e.target).is("#navbar .menu > li")) {
				if($(e.target).parents("#navbar").length == 0) {
					//alert("boom");
					$("#navbar .menu > li").removeClass("submenuOpened");
					$("#navbar .menu > li  > .submenu").slideUp();
				}
			});

		}
	});

	// display submenu on click 	
	/*	$("#navbar .menu > li").click(function() {
			closeAllSubmenus();
			$(this).find(".submenu").css({"display" : "block"});
		});*/



/*		$("#navbar .menu > li").on('click', function(e) {
		$(this).find(".submenu").css({"display" : "block"});
	});
	$(document).on('click', function(e) {
		closeAllSubmenus(); 
	});
*/
/*
	$(document).click(function(){
		var openSubmenu = false;
		$("#navbar .menu > li").each(function() {
			$(this).css({"color" : "red"});
			$(this).find(".submenu").css({"color" : "green"});
			if($(this).find(".submenu").attr("display") == "block") {
				openSubmenu = true; 
				alert("wee");
			}
		});
		if(openSubmenu) {
			closeAllSubmenus();
		}
	});
*/

	$(document).scroll(function() {
		var scrollPos = $(document).scrollTop();
		var windowWidth = $(window).width();

		// sticky navbar - stick to top when past the original navbar position. unstick when back to that position 
		if(scrollPos >= navbarPos) {
			$("#navbar").addClass("stick");
			$("#navbar .home-logo").addClass("logo-reposition");
		} else {
			$("#navbar").removeClass("stick");
			$("#navbar .home-logo").removeClass("logo-reposition");
		}
	});

	

	$(window).bind("load resize scroll",function(e){ 
		var windowWidth = $(window).width();
		//$("#test").text(windowWidth);
		var bannerTitleWidth = $("#banner .title").outerWidth(); 
		var bannerImageWidth = windowWidth - bannerTitleWidth - 60; 
		$("#banner .image").width(bannerImageWidth); 


		var contentWidth = $("#content").outerWidth();
		var profileWidth = $("#profile").outerWidth(); 
		var contentAndProfileWidth = contentWidth + profileWidth; 

		/*if(windowWidth > 960) {
			//$("#test").text(contentWidth + " " + profileWidth + " " + " " + contentAndProfileWidth);
			$("#banner").width(contentAndProfileWidth);
			bannerImageWidth = contentAndProfileWidth - bannerTitleWidth - 10;
			$("#banner .image").width(bannerImageWidth);
		} */

		// set navbar-container to be same height as navbar so there is never a hole when it sticks
		var navbarHeight = $("#navbar").outerHeight(); 
		if(windowWidth > 400) {
			$("#navbar-container").height(navbarHeight);
		}

		// dynamic banner 
		if(windowWidth > 400) {
			// calculate the percentage width of left and right banner divs 
			var bannerMidWidth = $("#banner .mid").width(); 
			// (windowWidth - bannerMidWidth) / 2 = % 
			var bannerLeftRightWidth = ((windowWidth - bannerMidWidth) / 2) - 40; 
			if(bannerLeftRightWidth > 0) {
				$("#banner .left").width(bannerLeftRightWidth); 
				$("#banner .right").width(bannerLeftRightWidth); 
				$("#banner .left").css({"display" : "inline-block"});
				$("#banner .right").css({"display" : "inline-block"});
			} else {
				$("#banner .left").css({"display" : "none"});
				$("#banner .right").css({"display" : "none"});
			}
		} 



	});
	})(jQuery);

/*function lastMod() {
	return document.lastModified; 
}*/
