<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Movies'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>From time to time, I watch a load of movies at once. I always try to watch a movie a day, but after a while, I stop because it gets pretty time-consuming. On a regular basis, I just watch TV. Movies are big events to me, and I don't often plan big events. </p>
<p>I only see cinema-worthy films in theatres. The rest I put on a watchlist and watch them years later.</p>
<p><a class="link-block" style="background-color:#d62b20; color:#FFF; font-family:proxima-nova, sans-serif;" href="https://trakt.tv/users/sanzoidy/history/movies/added">Movies I've Watched</a></p>
<p><a class="link-block" style="background-color:#d62b20; color:#FFF; font-family:proxima-nova, sans-serif;" href="https://trakt.tv/users/sanzoidy/ratings/movies/all/added">Movie Ratings</a></p>
<p><a class="link-block" style="background-color:#d62b20; color:#FFF; font-family:proxima-nova, sans-serif;" href="https://trakt.tv/users/sanzoidy/watchlist">Watchlist (Filter the list by movie)</a></p>
<p>Movies can be really powerful. It's the length of 2-5 episodes of television, yet it can have a much bigger impact. You watch it, then it's over. It's both a good thing and a bad thing. There's a sense of accomplishment, but if you want more, there isn't.</p>

<h2>Top Film Franchises</h2>
<ul>
	<li>X-Men</li>
	<li>The Lord of the Rings</li>
	<li>Harry Potter</li>
	<li>Pirates of the Carribean</li>
</ul>

<h2>Top Comedies</h2>
<ul>
	<li>Get Smart</li>
	<li>The Pink Panther 1 &amp; 2</li>
	<li>Red 1 &amp; 2</li>
</ul>

<h2>Top Dramas</h2>
<ul>
	<li>Mr. Magorium's Wonder Emporium</li>
	<li>The Odd Life of Timothy Green</li>
	<li>Sorceror's Apprentice</li>
	<li>Nanny McPhee Returns</li>
	<li>The Sound of Music</li>
</ul>

<h2>MCU Films Ranked</h2>
<p>I originally made a list after watching all of them in order up in until Civil War, but I need to make a new one after rewatching all of them.</p>

<hr />

<p>I might add reviews and recommendations down here some time.</p>

<p>Below is a list of movies I want to watch (started in 2014). It's edited using an app called UpWord and syncs up to my Dropbox account. This renders it in real-time. So if I make a change in the app, it will reflect here automatically! Cool, huh?</p>
<p>It's most likely incredibly outdated because I make new lists all the time.</p>
<div class="capitalize">
<?php 
	render_txt_file("https://www.dropbox.com/s/fyu9oo8gagaglz8/movies%202014-2016.txt?raw=1");
?>
</div>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
