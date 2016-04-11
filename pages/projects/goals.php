<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Goals'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>This page is for my goals.</p>

<p>Top goal: Go to Comic-Con.</p>

<p>When I have time, I'll go in greater depth. For now, here is a basic list of my goals.</p>
<ul>
	<li>Learn a wide range of programming languages</li>
	<li class="done"><strike>Make a website with a cool dropdown and responsive design</strike></li>
	<li>Make as many iOS apps as I need. Make OSX versions of all of them as well. Have them all sync up nicely.</li>
	<li>Learn how to make web extensions and make some useful ones.</li>
	<li>Flash or HTML5 games</li>
	<li>Text-based games</li>
	<li>Twitter Bots</li>
	<li>Take apart a computer</li>
	<li>Build a computer</li>
	<li>Craft DIY prop replicas from films and TV</li>
	<li>Review food on Youtube</li>
	<li>Not see the day robots take over the world</li>
	<li>Gain superpowers, but have to hide it from everyone.</li>
	<li>Speak fluent German</li>
</ul>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
