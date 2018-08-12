<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Things'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>Random things will go here.</p>
<hr>
<p>TV Schedules: </p>
<ul>
	<li><a href="/pages/things/Fall2014Schedule/Fall2014Schedule.html">Fall 2014 TV Schedule</a> (Doing this basically taught me HTML and CSS)</li>
	<li><a href="/pages/things/Fall2015Schedule/Fall2015Schedule.html">Fall 2015 TV Schedule</a> (Responsive)</li>
	<li><a href="/pages/things/Fall2016Schedule/Fall2016Schedule.html">Fall 2016 TV Schedule</a></li>
	<li><a href="/pages/things/Fall2017Schedule/Fall2017Schedule.php">Fall 2017 TV Schedule</a> (Rendered with PHP - a much quicker process)</li>
</ul>

<p><a href="/pages/things/notes.php">University Notes</a></p>
<p><a href="/pages/things/favourites.php">These are a few of my favourite things.</a></p>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
