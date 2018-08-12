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

<p>My university lecture transcripts full of typos.</p>

<ul>
	<li><a href="/pages/notes/PSYCH232/notes-psych232.html">PSYCH 232 - Psychology of Evil [Winter 2015]</a> (Complete)</li>
	<li><a href="/pages/notes/PSYCH232/notes-psych232-baumeistertext.html">PSYCH 232 - Psychology of Evil Text Notes [Winter 2015]</a> - Evil: Inside Human Violence and Cruelty by Roy F. Baumeister. Notes for the chapters I took the time to write notes for.</li>
	<li><a href="/pages/notes/PSYCH218/PSYCH218Notes.html">PSYCH 218 - Psychology of Death and Dying [Fall 2015]</a> (Complete)</li>
	<li><a href="/pages/notes/PSYCH253/PSYCH253Notes.html">PSYCH 253 - Social Psychology [Fall 2015]</a> (Stopped after Lecture 6 because the prof went too fast and it was easier to just add notes to the slides).</li>
	<li><a href="/pages/notes/ENGL108A/ENGL108A_notes.php">ENGL 108A - The Superhero [Spring 2016]</a></li>
	<li><a href="/pages/notes/PSYCH353/PSYCH353_notes.php">PSYCH 353 - Social Cognition [Spring 2016]</a> - At one point, I stopped caring about format since I rewrote the notes.</li>
	<li><a href="/pages/notes/ANTH100/ANTH100_notes.php">ANTH 100 - Intro to Anthropology [Spring 2017]</a> - Never bothered to edit this after class because I rewrote the notes with paper and pen.</li>
	<li><a href="/pages/notes/SMF215/SMF215Notes.html">SMF 215 - Sexuality and Popular Culture [Winter 2018]</a> (Complete)</li>
	<li><a href="/pages/notes/LS101/LS101Notes.html">LS 101 - Introduction to Legal Studies [Winter 2018]</a> (Complete)</li>
	<li><a href="/pages/notes/PSYCH356/PSYCH356Notes.html">PSYCH 356 - Personality [Winter 2018]</a> (Incomplete) - Wasn't actually enrolled, skipped a lecture to study, then never went again. 3-hour evening class was draining!</li>
	<li><a href="/pages/notes/PSYCH357/PSYCH357Notes.html">PSYCH 357 - Psychology of Good [Winter 2018]</a> (Complete)</li>
	<li><a href="/pages/notes/ANTH202/ANTH202Notes.html">ANTH 202 - Cultural &amp; Social Anthropology [Spring 2018]</a> (Incomplete) - Wasn't enrolled, stopped going to lectures because they only talked about the readings which I didn't do. </li>
	<li><a href="/pages/notes/PSYCH261/PSYCH261Notes.html">PSYCH 357 - Physiological Psychology [Spring 2018]</a> (Complete)</li>
</ul>


<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
