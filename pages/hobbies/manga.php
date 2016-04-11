<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Manga/Anime'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<div id="manga-main">

<p>A lot of people prefer Anime over Manga, but I don't. When it comes to watching stuff, I prefer live-action and when it comes to reading stuff, I prefer comics. </p>

<p><strong>Favourite Manga:</strong> <span style="font-size:20px; text-transform:uppercase">Dr. Slump, Gintama, Bakuman</span></p>
<p><strong>Favourite Mangaka:</strong> <span style="font-size:20px; text-transform:uppercase">Akira Toriyama</span></p>
<p><strong>Favourite Anime:</strong> <span style="font-size:20px; text-transform:uppercase">Dragon Ball Z, Death Note, Blue Exorcist</span></p>

<ul class="pages-submenu">
	<li><a href="#manga-reading">What I'm Reading</a></li>
	<li><a href="#manga-read-fully">What I've Read (Fully)</a></li>
	<li><a href="#manga-read-parts">What I've Read (Parts)</a></li>
	<li><a href="#manga-wishlist">What I Want To Read</a></li>
	<li><a href="#manga-anime">Anime</a></li>
</ul>

<div id="manga-reading" class="anchored">
	<h2>I'm reading</h2>

	<ul>
		<li>Gintama <span class="progress">Ever since they stopped printing it in English, I've stopped reading.</span></li>
		<li>Otomen</li>
		<li>Yotsuba&amp;!</li>
		<li>Tegami Bachi</li>
		<li>Fairy Tail</li>
		<li>Beelzebub</li>
		<li>Case Closed <span class="progress">Stopped reading because it gave me a ton of paranoia.</span></li>
		<li>Bobobobo Bobobo</li>
	</ul>
</div>

<div id="manga-read-fully" class="anchored">
	<h2>I've Read (Fully)</h2>

	<ul>
		<li>Ceres</li>
		<li>Buso Renkin</li>
		<li>Ral Grad</li>
		<li>Dr. Slump</li>
		<li>Bakuman</li>
		<li>Angel Densetsu</li>
	</ul>
</div>

<div id="manga-read-parts" class="anchored">
	<h2>I've Read (Parts)</h2>
	<p>I subscribed to Shonen Jump for years until they went digital. (euck!)</p>

	<ul>
		<li>One Piece</li>
		<li>Hikaru No Go</li>
		<li>Naruto</li>
		<li>Dragon Ball</li>
		<li>Rurouni Kenshin</li>
		<li>Shaman King</li>
		<li>Flame of Recca</li>
		<li>Karakuri Dôji Ultimo</li>
		<li>Whistle!</li>
		<li>Fuushigi Yuugi</li>
	</ul>
</div>

<div id="manga-wishlist" class="anchored">
	<h2>I want to read</h2>

	<ul>
		<li>Tokyo Ghoul</li>
		<li>D-Gray Man</li>
		<li>Lots more</li>
	</ul>
</div>

<div id="manga-anime" class="anchored">
	<h2>Anime</h2>

	<ul>
		<li>Inuyasha</li>
		<li>Dragon Ball Z (Since I was 4)</li>
		<li>Sailor Moon (Parts on TV)</li>
		<li>Dragon Ball</li>
		<li>Beyblade</li>
		<li>Shaman King (Fox Kids on Saturdays)</li>
		<li>Full Moon Wo Sagashite</li>
		<li>Sailor Stars</li>
		<li>Zatchbell (On TV)</li>
		<li>Death Note (went crazy Christmas Break of Grade 7)</li>
		<li>Blue Exorcist</li>
	</ul>
</div>

<!--
<div id="" class="anchored">
	<h2></h2>

	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
-->

</div>
<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
