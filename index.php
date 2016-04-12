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

<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>