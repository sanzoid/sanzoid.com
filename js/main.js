<script>
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

	$( document ).on( "mobileinit", function() {
    	$.mobile.ajaxEnabled=false;
	});

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

		$.event.special.tap = {
		    setup: function(data, namespaces) {
		        var $elem = $(this);
		        $elem.bind('touchstart', $.event.special.tap.handler)
		             .bind('touchmove', $.event.special.tap.handler)
		             .bind('touchend', $.event.special.tap.handler);
		    },

		    teardown: function(namespaces) {
		        var $elem = $(this);
		        $elem.unbind('touchstart', $.event.special.tap.handler)
		             .unbind('touchmove', $.event.special.tap.handler)
		             .unbind('touchend', $.event.special.tap.handler);
		    },

		    handler: function(event) {
		        event.preventDefault();
		        var $elem = $(this);
		        $elem.data(event.type, 1);
		        if (event.type === 'touchend' && !$elem.data('touchmove')) {
		            event.type = 'tap';
		            $.event.handle.apply(this, arguments);
		        } else if ($elem.data('touchend')) {
		            $elem.removeData('touchstart touchmove touchend');
		        }
		    }
		};



		// Toggle submenu by click 
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$("#navbar ul.menu > li ul.submenu").addClass("mobile");

			$("#navbar .menu > li").on('touchstart', function(e) {
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

			$("#navbar .menu > li > .submenu > li").on('touchstart', function(e) {
				e.stopPropagation(); 	// stop events from bubbling from submenu clicks 
			});

			$(document).on('touchstart', function(e) {
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

/*
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
		} */



	});
	})(jQuery);

/*function lastMod() {
	return document.lastModified; 
}*/
</script>


<script language="javascript">
function stairsDays()
{
	var startDate = new Date(2017, 05, 03); 
	var today = new Date(); 

	var diffDays = Math.floor((today.getTime() - startDate.getTime())/(1000*60*60*24)); 

	return diffDays;
}

// Trailing text cursor 
/*
var text='0 1 1 2 3 5 8 13 21 34 55 89';
var delay=15; // speed of trail
var Xoff=6; // pixel count from the left of the cursor (- values go to left)
var Yoff=7; // pixel count from the top of the cursor (- values go up)
var txtw=0;  // amount of pixel space each character occupies
var beghtml='<font color="#1C1C1C" style="font-family:"Comic Sans";text-transform:uppercase;"><b>';  // optional html code that effects whole text string such as font color, size, etc.
var endhtml='</b></font>';  
ns4 = (navigator.appName.indexOf("Netscape")>=0 && document.layers)? true : false;
ie4 = (document.all && !document.getElementById)? true : false;
ie5 = (document.all && document.getElementById)? true : false;
ns6 = (document.getElementById && navigator.appName.indexOf("Netscape")>=0 )? true: false;
var txtA=new Array();
text=text.split('');
var x1=0;
var y1=-1000;
var t='';
for(i=1;i<=text.length;i++){
t+=(ns4)? '<layer left="0" top="-100" width="'+txtw+'" name="txt'+i+'" height="1">' : '<div id="txt'+i+'" style="position:absolute; top:-100px; left:0px; height:1px; width:'+txtw+'; visibility:visible;">';
t+=beghtml+text[i-1]+endhtml;
t+=(ns4)? '</layer>' : '</div>';
}
document.write(t);
function moveid(id,x,y){
if(ns4)id.moveTo(x,y);
else{
id.style.left=x+'px';
id.style.top=y+'px';
}}
function animate(evt){
x1=Xoff+((ie4||ie5)?event.clientX+document.body.scrollLeft:evt.pageX);
y1=Yoff+((ie4||ie5)?event.clientY+document.body.scrollTop:evt.pageY);
}
function getidleft(id){
if(ns4)return id.left;
else return parseInt(id.style.left);
}
function getidtop(id){
if(ns4)return id.top;
else return parseInt(id.style.top);
}
function getwindowwidth(){
if(ie4||ie5)return document.body.clientWidth+document.body.scrollLeft;
else return window.innerWidth+pageXOffset;
}
function movetxts(){
for(i=text.length;i>1;i=i-1){
if(getidleft(txtA[i-1])+txtw*2>=getwindowwidth()){
moveid(txtA[i-1],0,-1000);
moveid(txtA[i],0,-1000);
}else moveid(txtA[i], getidleft(txtA[i-1])+txtw, getidtop(txtA[i-1]));
}
moveid(txtA[1],x1,y1);
}
window.onload=function(){
for(i=1;i<=text.length;i++)txtA[i]=(ns4)?document.layers['txt'+i]:(ie4)?document.all['txt'+i]:document.getElementById('txt'+i);
if(ns4)document.captureEvents(Event.MOUSEMOVE);
document.onmousemove=animate;
setInterval('movetxts()',delay);
}*/
</script>

