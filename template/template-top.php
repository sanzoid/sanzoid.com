<!DOCTYPE html> 

<html>
<head>
	<title>sanzoid.com - <?php echo $title; ?></title>
	<!--<meta charset="UTF-8">-->
	<?php /*
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	*/ ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/main2.css">
	<link rel="stylesheet" type="text/css" href="/css/quotes.css">
	<link rel="stylesheet" type="text/css" href="/css/art.css">
	<!--<script type="text/javascript" src="<?php echo $base; ?>/js/main.js"></script>-->
	<link href='https://fonts.googleapis.com/css?family=Coming+Soon|Cabin+Sketch' rel='stylesheet' type='text/css'>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!--<script src="./js/jquery-2.1.4.min.js"></script>-->
	<?php include_once($base."/js/main.js"); ?>
	<?php include_once($base."/php/functions.php"); ?>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

</head>

<body>
	
<!-- START: banner -->
<div id="banner" class="global">
	<!-- banner left --><!--<div class="left"></div>-->
	<!-- banner mid --><a href="/"><div class="mid"></div></a>
	<!-- banner right --><!--<div class="right"></div>-->
</div>
<!-- END: banner -->

<div id="navbar-container">
<!-- START: navbar -->
<div id="navbar" class="global">
	<ul class="menu">
		<li class="media"><a class="menu-link" href="/pages/hobbies/hobbies.php">hobbies</a>
			<ul class="submenu">
				<li class=""><a class="menu-link" href="/pages/hobbies/tv.php">tv</a></li>
				<li class=""><a class="menu-link" href="/pages/hobbies/movies.php">movies</a></li>
				<li class=""><a class="menu-link" href="/pages/hobbies/books.php">books</a></li>
				<li class=""><a class="menu-link" href="/pages/hobbies/manga.php">manga</a></li>
				<li class=""><a class="menu-link" href="/pages/hobbies/music.php">music</a></li>
				<li class=""><a class="menu-link" href="/pages/hobbies/celebs.php">the loves of my life</a></li>
			</ul>
		</li>
		<li class="art "><a class="menu-link" href="/pages/art/art.php">art</a>
		</li>
		<li class="goals "><a class="menu-link" href="/pages/projects/projects.php">projects</a>
			<ul class="submenu">
				<li class=""><a class="menu-link" href="/pages/projects/goals.php">goals</a></li>
			</ul>
		</li>
		<li class="home"><a href="/"><div class="home-logo"></div><span class="menu-link">home</span></a></li>
		<li class="thoughts "><a class="menu-link" href="/pages/thoughts/thoughts.php">thoughts</a>
			<!--<ul class="submenu">
				<li class=""><a class="menu-link" href="#">opinions</a></li>
				<li class=""><a class="menu-link" href="#">ideas</a></li>
				<li class=""><a class="menu-link" href="#">philosophy</a></li>
				<li class=""><a class="menu-link" href="#">theories</a></li>
			</ul>-->
		</li>
		<li class="quotes "><a class="menu-link" href="/pages/quotes/quotes.php">quotes</a>
			<!--<ul class="submenu">
				<li class=""><a class="menu-link" href="#">my quotes</a></li>
				<li class=""><a class="menu-link" href="#">tv quotes</a></li>
				<li class=""><a class="menu-link" href="#">movie quotes</a></li>
				<li class=""><a class="menu-link" href="#">random quotes</a></li>
			</ul>-->
		</li>
		<li class="things "><a class="menu-link" href="/pages/things/things.php">things</a>
			<ul class="submenu">
				<li class=""><a class="menu-link" href="/pages/things/notes.php">notes</a></li>
				<li class=""><a class="menu-link" href="/pages/things/favourites.php">favourites</a></li>
				<!--<li class=""><a class="menu-link" href="#">exploration</a></li>-->
			</ul>
		</li>
	</ul>
</div>
<!-- END: navbar -->
<!--<div class="menu-message null">You won't find anything there</div>-->
</div>

<!-- START: content -->
<div id="content" class="global">
<!-- start: margin-wrapper -->
<div class="margin-wrapper">

	<!-- start: content body -->
	<div class="body">
		<!-- title--><h1 class="content-page-title"><?php echo $title; ?></h1>