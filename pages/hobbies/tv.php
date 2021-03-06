<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'TV'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>My number one passion is Television. If someone paid me to just watch television all day without having to do anything else, that would be the dream life. I'm not talking about watching, then reviewing. No, I'm talking about just watching, no strings attached.</p>
<p>Realistically, that is no way to live which is why I'm pursuing my second passion: <em>Building</em> (in my case, building with code).</p>
<p>Growing up, I always believed that television was the best. I learned everything through watching TV. Although it can be a bad influence, it teaches many life lessons. In high school, I discovered American Network television (more like I felt I was old and mature enough to finally watch that stuff), and I fell in love. I found my meaning in life. I was happy. I had a reason to live.</p>
<p>I prefer weekly Network Television and I think Netflix has ruined how we consume television.</p>

<p>If you would like to see my TV progress, check out my <a href="https://trakt.tv/users/sanzoidy">Trakt profile</a>. You can see my history, progress, watchlist, and more. If you want to keep track of your TV- or movie-watching progress, I recommend you check out <a href="https://trakt.tv">trakt.tv</a>. It's a really great site developed and maintained by only <em>three</em> people.</p>

<a href="https://trakt.tv/users/sanzoidy" class="link-block" style="background-color:#d62b20; color:#FFF; font-family:proxima-nova, sans-serif;">@sanzoidy on trakt</a>

<p>I also have <a href="https://docs.google.com/spreadsheets/d/1E0aGJabw6hPVuzs4Z6Dk15hsROmC8H1stzvEapbxHNM/edit?usp=sharing">this spreadsheet</a>. It was just a document with a really big table, but I recently just pasted it into a spreadsheet. I don't update it anymore, but it contains reviews and ratings from the past. It goes up to whenever <em>DC's Legends of Tomorrow</em> first premiered. </p>



<p>Sometimes I make a webpage for my annual Fall TV schedule.</p>
<ul>
	<li><a href="/pages/things/Fall2014Schedule/Fall2014Schedule.html">2014</a></li>
	<li><a href="/pages/things/Fall2015Schedule/Fall2015Schedule.html">2015</a></li>
	<li><a href="/pages/things/Fall2016Schedule/Fall2016Schedule.html">2016</a></li>
	<li><a href="/pages/things/Fall2017Schedule/Fall2017Schedule.php">2017</a></li>
</ul>


<h2>Top Favourite Dramas</h2>
<ul>
	<li>Person of Interest</li>
	<li>House</li>
	<li>Marvel's Agents of SHIELD</li>
	<li>Elementary</li>
	<li>Hannibal</li>
	<li>Leverage</li>
	<li>The Finder</li>
</ul>

<h2>Top Favourite Comedies</h2>
<ul>
	<li>The Office</li>
	<li>Parks and Recreation</li>
	<li>The Neighbors</li>
	<li>1600 Penn</li>
	<li>Silicon Valley</li>
	<li>Veep</li>
	<li>Miranda</li>
</ul>

<hr />

<p>I might post reviews/recommendations down here later. </p>

<!--<hr />-->

<?php 
	//render_txt_file("https://www.dropbox.com/s/0c295uz3l1x4uig/2016%20PILOT%20SEASON.txt?raw=1");
?>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
