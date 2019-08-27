<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	$base = dirname(getcwd());				// go up one level
	//$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'PoopTracker'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<!-- farts farts farts -->
<script src="http://code.onion.com/fartscroll.js"></script>
<script>
	$(document).ready(function() {
            fartscroll(800);
    });
</script>


<div id="pooptracker-main">

<p>PoopTracker is my passion project. It's that one project I keep doing over and over again to apply and solidfy the skills I've learned to make something that I have always wanted to make.</p>
<p>It's something I hope to release to the appstore one day, but it hasn't been ready. The first version was when I was just learning iOS development and the second version was when I was just learning Swift. I was still a student and still had a lot to learn. I do still think I have a lot to learn, but I feel that with a year of co-op and over a year of full-time iOS development, I have the necessary foundation to see this from start to finish.</p>
<p>The final version, PoopTracker 3.0, has not begun yet. But it's coming... it's coming like diarrhea in the middle of the night.</p>

<h2>Versions</h2>
<p>Here are the iterations of PoopTracker I had done at the time with documentation. I think it's pretty interesting to see my thought process and see all the idea unravel.</p>
<ul>
	<li><a href="pooptracker_v1.php">PoopTracker 1.0</a> [Objective-C] - Written right after I learned iOS Development by reading The Big Nerd Ranch Guide.</li>
	<li><a href="pooptracker_v2.php">PoopTracker 2.0</a> [Swift] - Written when I was learning Swift and thought I had a solid foundation.</li>
	<li><a href="pooptracker_v3.php">PoopTracker 3.0</a> [Swift] - Coming soon.</li>
</ul>


</div>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
