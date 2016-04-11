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
	<li>Pooptracker (iOS)</li>
	<li>Protect the Dot (iOS)</li>
	<li>How Toilets Work (Javascript)</li>
	<li>sanzoid.com</li>
</ul>

<h2>Projects from School</h2>
<ul>
	<li>Websites from High School</li>
	<li>CS246: Tetris (C++). Programming Tetris with a partner. Received 104%.</li>
	<li>CS241: Compiler (C++). Implementing a compiler.</li>
	<li>CS350: OS161 (C). Implementing features to an operating system such as locks, fork, execv, etc. </li>
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
	<li>Developing and updating webpages based on mockups (PHP, Javascript, HTML, Drupal, AngularJS).</li>
	<li>Converting webpages to PDFs dynamically.</li>
	<li>Working with several different websites in development environments (VirtualBox, Vagrant, Github).</li>
</ul>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
