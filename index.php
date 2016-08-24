<?php 
	//$base = "/home/a1257259/public_html"; 
	$base = getcwd();	// index-specific 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Hello World!'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->

<p>Welcome to my website. I have re-designed and re-implemented this many times, but I think I'm going to settle on this current design and implementation. I coded it from scratch using HTML, CSS, Javascript/jQuery, and PHP.</p>

<p>The reasons for this website are:</p>
<ol>
	<li>I love websites</li>
	<li>I love building websites</li>
	<li>I love having a space where I can show the world who I am and what I can do</li>
</ol>
<p>Hopefully this site can give you some insight as to who I am.</p>

<hr>

<p>Check out my <a href="/pages/things/Fall2016Schedule/Fall2016Schedule.html">Fall 2016 TV Schedule</a>! I'll be home with a TV to watch 2-3 hours of TV every night! :D</p>

<hr>

<p>AUG 24: Added new page - <a href="/pages/art/stickers.php">STICKERS!!!</a></p>

<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>