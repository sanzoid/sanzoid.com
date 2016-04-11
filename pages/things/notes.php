<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Notes'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>When typing notes in HTML is suitable for one of my classes, I'll put them here. </p>

<ul>
	<li><a href="/pages/notes/PSYCH232/notes-psych232.html">PSYCH 232 - Psychology of Evil</a> (Completed)</li>
	<li><a href="/pages/notes/PSYCH232/notes-psych232-baumeistertext.html">PSYCH 232 - Psychology of Evil Text Notes</a> - Evil: Inside Human Violence and Cruelty by Roy F. Baumeister. Notes for the chapters I took the time to write notes for.</li>
	<li><a href="/pages/notes/PSYCH218/PSYCH218Notes.html">PSYCH 218 - Psychology of Death and Dying</a> (Completed)</li>
	<li><a href="/pages/notes/PSYCH253/PSYCH253Notes.html">PSYCH 253 - Social Psychology</a> (Stopped after Lecture 6 because the prof went too fast and it was easier to just add notes to the slides).</li>

</ul>


<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
