<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Projects'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>This page is for my projects.</p>

<h2>Current Projects</h2>
<ul>
	<li><a href="/pooptracker">Pooptracker (iOS)</a></li>
	<li>Protect the Dot (iOS)</li>
	<li>How Toilets Work (Javascript) - just an idea for now</li>
	<li>sanzoid.com</li>
</ul>
<p>For school: </p>
<ul>
	<li>CS349 (UI): There will be 4 Java/Android programming assignments. First one is implementing Snake!</li>
</ul>

<h2>Projects from School</h2>
<ul>
	<li>Websites from High School</li>
	<li>CS246: Tetris (C++). Programming Tetris with a partner. Received 104%.</li>
	<li>CS241: Compiler (C++). Implementing a compiler. I got addicted to doing this. The last 3 assignments, I spent ~30 hours for each coding. I couldn't sleep without thinking about it, I woke up thinking about it. It's all I did. This course reassured me that I do, in fact, love programming. </li>
	<li>CS350: OS161 (C). Implementing features to an operating system such as locks, fork, execv, etc. I look at operating systems so differently now. </li>
</ul>


<h2>Projects from Work</h2>
<ul>
	<!-- PWGSC -->
	<li>Converting PDFs to webpages (HTML, CSS).</li>
	<li>Making a list of regexes to aid the team.</li>
	<li>Coding the basic template and design for an internal guide document (HTML, CSS).</li>
	<li>Writing components of internal guide document with team (English).</li>
	<li>Querying database and rendering information (SQL, ColdFusion).</li>

	<!-- OICR -->
	<li>Fixing and improving a website crawler that takes screenshots (casperJS).</li>
	<li>Developing and updating webpages based on mockups (PHP, Javascript, HTML, Drupal, tiny bit of AngularJS).</li>
	<li>Converting webpages to PDFs dynamically - this started out as "research ways to do this" to me actually doing it. Solo'd it from start to finish. Was a HUGE accomplishment for me. </li>
	<li>Working with several different websites in development environments (VirtualBox, Vagrant, Github).</li>
</ul>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
