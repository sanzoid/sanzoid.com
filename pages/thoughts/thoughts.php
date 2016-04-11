<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Thoughts'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>My favourite hobby is thinking. I usually think a lot when I'm on the toilet or in the shower. </p>

<p>I'll add a full list of the weird and insane thoughts that I have had later. Here's one of my best ideas: </p>
<p>When you're living alone, put picture frames all around your place. For the photos, use photos of other people's families (you can get them from the internet or from friends). When people come to visit you, they'll be like, "Oh, cute photos. Wait a second, who are these people?!??!" <br>Serial killer spin: the photos actually came from people you murdered. You took a photo frame from each of the families you murdered as a trophy. Would be a great Criminal Minds episode.</p>

<p>More to come.</p>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
