<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Books'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<div id="books-main">
<p>I don't read novels much.</p>

<p><strong>Absolute favourite book series:</strong> <span style="font-size:20px; color:#346ED1; text-transform:uppercase; ">Artemis Fowl</span></p>
<p><strong>Favourite of the series:</strong> <span style="font-size:20px; color:#346ED1; text-transform:uppercase; ">Artemis Fowl: The Eternity Code</span></p>

<ul class="pages-submenu">
	<li><a href="#books-reading">What I'm Reading</a></li>
	<li><a href="#books-wishlist">What I Want To Read</a></li>
	<li><a href="#books-read">What I've Read</a></li>
	<li><a href="#books-comics">Comics</a></li>
	<li><a href="#books-shakespeare">Shakespeare</a></li>
</ul>

<div id="books-reading" class="anchored">
	<h2 id="books-reading">I'm reading</h2>
	<p>... and have been reading for many, many years.</p>

	<ul>
		<li>Dracula - Bram Stoker</li>
		<li>Artemis Fowl: The Atlantis Complex</li>
		<li>Mein Kampf - Adolf Hitler</li>
		<li>Red Dragon - Thomas Harris</li>
		<li>The Gun Seller - Hugh Laurie</li>
		<li>Pride and Prejudice - Jane Austen</li>
		<li>Harry Potter and the Chamber of Secrets - J.K. Rowling</li>
		<li>The Hobbit - J.R.R. Tolkein</li>
		<li>SoulPancake - Rainn Wilson</li>
		<li>Death Note: L, Change the World</li>
		<li>The Wishlist - Eoin Colfer</li>
		<li>There's probably more... </li>
	</ul>
</div>

<div id="books-wishlist" class="anchored">
	<h2>I want to read</h2>
	<ul>
		<li>Artemis Fowl: The Last Guardian</li>
		<li>Sherlock Holmes</li>
		<li>Is It Just Me? - Miranda Hart</li>
		<li>Hannibal Series - Thomas Harris</li>
		<li>The Lord of the Rings Series</li>
		<li>Strange Case of Dr. Jekyll and Mr. Hyde - Robert Louis Stevenson</li>
		<li>The Magicians - Lev Grossman</li>
		<li>The Man in the High Castle</li>
	</ul>
</div>

<div id="books-read" class="anchored">
	<h2>I've Read</h2>
	<p>It's not a long list, so might as well put it.<br>In the approximate order that they were read.</p>
	<ul>
		<li>Various Nancy Drew</li>
		<li>A bunch of Scooby-Doo</li>
		<li class="school elementary">Bridge To Terabithia (Grade 4)</li>
		<li class="school elementary">Charlotte's Web (Grade 5)</li>
		<li class="favourite">Lion Boy</li>
		<li>Lion Boy 2</li>
		<li>Lion Boy 3 (Not sure if I actually finished this)</li>
		<li class="favourite">Dragon Rider - Cornelia Funke</li>
		<li>Artemis Fowl</li>
		<li>Wolf Pack - Edo Van Belkom (voted for this for the 2006 Silver Birch and it won!)</li>

		<li>Artemis Fowl: The Arctic Incident</li>
		<li class="favourite">Artemis Fowl: The Eternity Code</li>
		<li>Artemis Fowl: The Opal Deception</li>
		<li>Artemis Fowl: The Lost Colony</li>
		<li class="school highschool">To Kill a Mockingbird (Grade 9)</li>
		<li>Death Note Another Note: The Los Angeles BB Murder Cases</li>
		<li class="school highschool">Lord of the Flies (Grade 10)</li>
		<li class="school highschool">Fifth Business (Grade 12)</li>
		<li class="school highschool favourite">The Picture of Dorian Gray (Grade 12 - ISP)</li>
		<li>Artemis Fowl: The Time Paradox</li>
		<li class="favourite">Harry Potter and the Deathly Hallows</li>
		<li>Harry Potter and the Philosopher's Stone</li>
		<li class="school highschool">Ella Minnow Pea (Grade 12 - Writer's Craft)</li>
		<li class="school highschool">Benny &amp; Omar (Grade 12 - Writer's Craft)</li>
	</ul>
	<p>* Was forced to read in school (except for Dorian Gray. I chose that one!)</p>
</div>

<div id="books-comics" class="anchored">
	<h2 id="books-comics">Comics</h2>
	<ul>
		<li>The Simpsons - Used to read whatever was in my small local library</li>
		<li>Garfield - My sister was a fan so I was fortunate enough to have access to Garfield</li>
		<li>Calvin &amp; Hobbes - By far my favourite. Always bought these from Scholastic</li>
		<li>X-Men: The Dark Phoenix Saga</li>
		<li>Deadpool: Dead Presidents</li>
		<li>Watchmen</li>
		<li>Superman: Birthright Vol. 1</li>
		<li>Ms. Marvel (Carol Danvers) Vol. 1 - I spent 25 hours reading this when I was actually supposed to read the Khamala Khan one which only took 1 hour to read.</li>
		<li class="in-progress">Ms. Marvel (Khamala Khan)</li>
		<li>The Dark Knight Returns</li>
	</ul>
</div>

<div id="books-shakespeare" class="anchored">
	<h2>Shakespeare</h2>
	<p>I took a Shakespeare course in university. I don't know why.</p>
	<ul>
		<li class="school highschool">Romeo &amp; Juliet (Grade 9)</li>
		<li class="school highschool favourite">Macbeth (Grade 10)</li>
		<li class="school highschool">Taming of the Shrew (Grade 11)</li>
		<li class="school highschool favourite">King Lear (Grade 12)</li>
		<li class="school university">A Midsummer Night's Dream</li>
		<li class="school university">King Henry IV: Part 1?</li>
		<li class="school university">Much Ado About Nothing</li>
	</ul>

	<p style="font-size:16px; border-left:5px solid lightgrey; padding:10px;"><em>"Away, and mock the time with fairest show. False face must hide what the false heart doth know."</em></p>
</div>

</div>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
