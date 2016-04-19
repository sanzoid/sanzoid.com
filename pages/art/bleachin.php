<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Bleachin\''; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>Currently obsessed with bleaching shirts. I've collected, edited, and made a bunch of designs that I would like to do, but do not have the shirts or the right materials to do them yet. Will update this page with designs and finished products later!</p>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
