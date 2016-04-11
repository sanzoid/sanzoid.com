<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels  
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Quotes'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>It is amazing how few words can affect one's life.</p>

<ul id="quotes-menu" class="pages-submenu">
	<li><a href="#quotes-tv">TV</a></li>
	<li><a href="#quotes-movies">Movies</a></li>
	<li><a href="#quotes-literature">Books/Comics/Manga</a></li>
	<li><a href="#quotes-music">Music</a></li>
	<li><a href="#quotes-other">Other</a></li>
	<li><a href="#quotes-rwe">Ralph Waldo Emerson</a></li>
	<li><a href="#quotes-me">Quotes By Me</a></li>
</ul>

<div id="quotes-main">
<!--
<p><span class="quote"></span><span class="author"></span></p>
-->
	
	<!-- START: TV -->
	<div id="quotes-tv" class="quotes-section anchored">
		<h2>TV</h2>
		<p class="description">I usually tweet the good ones on <a href="https://twitter.com/telesanzoid">@telesanzoid</a>.</p>
		<?php render_quotes_list_from_file("quotes_tv.data"); ?>
	</div>
	<!-- END: TV-->

	<!-- START: Movies-->
	<div id="quotes-movies" class="quotes-section anchored">
		<h2>Movies</h2>
		<!--<p class="description"></p>-->
		<?php render_quotes_list_from_file("quotes_movies.data"); ?>
	</div>
	<!-- END: Movies-->

	<!-- START: Books/Comics/Manga -->
	<div id="quotes-literature" class="quotes-section anchored">
		<h2>Books/Comics/Manga</h2>
		<!--<p class="description"></p>-->
		<?php render_quotes_list_from_file("quotes_books.data"); ?>
	</div>
	<!-- END: Books/Comics/Manga -->

	<!-- START: Music-->
	<div id="quotes-music" class="quotes-section anchored">
		<h2>Music</h2>
		<!--<p class="description"></p>-->
		<?php render_quotes_list_from_file("quotes_music.data"); ?>
	</div>
	<!-- END: Music-->

	<!-- START: Other-->
	<div id="quotes-other" class="quotes-section anchored">
		<h2>Other</h2>
		<!--<p class="description"></p>-->
		<?php render_quotes_list_from_file("quotes_other.data"); ?>
	</div>
	<!-- END: Other-->

	<!-- START: RWE-->
	<div id="quotes-rwe" class="quotes-section anchored">
		<h2>Ralph Waldo Emerson</h2>
		<p class="description">I love RWE. <span class="quote">All my best thoughts were stolen by the ancients.</span></p>
		<?php render_list_from_file("quotes_rwe.data", "<span class=\"quote\">", "</span>"); ?>
	</div>
	<!-- END: RWE-->

	<!-- START: Me-->
	<div id="quotes-me" class="quotes-section anchored">
		<h2>Quotes By Me</h2>
		<p class="description">I try.</p>
		<?php render_list_from_file("quotes_me.data", "<span class=\"quote\">", "</span>"); ?>
	</div>
	<!-- END: Me -->

</div>


<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
