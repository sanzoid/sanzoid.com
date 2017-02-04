<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'PoopTracker Redesign'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>I am redesigning and rewriting PoopTracker. It is February 4, 2017 and my goal is to release it to the public before May 2017. I will update my progress on this page to document the design and development process, and also to motivate me. I was supposed to begin during the holidays in December 2016, but I was too lazy. This time I cannot be lazy. The fate of my future and everyone's pooping depends on it. WE'VE GOT 3 MONTHS TO SAVE THE WORLD. </p>

<h2>Progress</h2>
<ul>
	<li>2017-02-04: <em>The promise to complete this app.</em> <br>Previously I had some of the data architecture mapped out. Will have to rethink some things and develop each component as isolated as possible in case some of it needs to be reworked.</li>
</ul>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
