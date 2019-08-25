<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Hobbies'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>I have many hobbies that I intensely dabble in from time to time. They include and are not limited to: </p>

<ul>
	<li><a href="/pages/hobbies/tv.php">Watching TV</a></li>
	<li><a href="/pages/thoughts/thoughts.php">Thinking</a></li>
	<li>Learning</li>
	<li>Making lists</li>
	<li>Planning schedules with lots of colours. 
		<a href="/pages/things/Fall2014Schedule/Fall2014Schedule.html">Exhibit A</a> 
		<a href="/pages/things/Fall2015Schedule/Fall2015Schedule.html">Exhibit B</a>
	</li>
	<li>Assembling furniture</li>
	<li>Building just about anything</li>
	<li>Biking in empty parking lots</li>
	<li>Sitting</li>
	<li>Reading manuals, instructions, terms &amp; conditions, labels</li>
	<li>Grocery shopping/keeping an inventory of prices in my head</li>
	<li><a href="/pages/hobbies/movies.php">Watching Movies or at least planning to</a></li>
	<li><a href="/pages/hobbies/manga.php">Reading Manga</a></li>
	<li><a href="/pages/art/art.php">Arts &amp; Crafts</a>
		<ul>
			<li><a href="/pages/art/art.php#art-friendship-bracelets">Friendship Bracelets</a></li>
			<li><a href="/pages/art/art.php#art-crafts">DIY projects</a></li>
			<li><a href="/pages/art/art.php#art-drawings">Drawing</a></li>
			<li><a href="/pages/art/art.php#art-sculptures">Sculpting</a></li>
			<li><a href="/pages/art/stickers.php">Making Stickers</a></li>
			<li><a href="/pages/art/bleachin.php">Bleaching T-shirts</a></li>
			<li>Needle Felting</li>
		</ul>
	</li>
	<li><a href="http://www.neopets.com/userlookup.phtml?user=sanzoidy">Neopets</a></li>
	<li>Couponing/getting freebies</li>
	<li>Hoarding junk that I think could be valuable later because you never know</li>
	<li>Collecting</li>
	<li>Eating</li>
	<li>Customizing things</li>
	<li>Pop Culture - learning everyone's names, faces, works in the movie/tv industry</li>
	<li>Philosophy (althought it makes me think so much I can't sleep at night)</li>
	<li>Psychology</li>
	<li>Jigsaw Puzzles</li>
	<li>MapleStory M</li>
</ul>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
