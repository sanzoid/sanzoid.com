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
	<!--<script type="text/javascript" src="<?php echo $base; ?>/js/main.js"></script>-->
	<link href='https://fonts.googleapis.com/css?family=Coming+Soon|Cabin+Sketch' rel='stylesheet' type='text/css'>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!--<script src="./js/jquery-2.1.4.min.js"></script>-->
	<?php include_once($base."/js/main.js"); ?>
</head>

<body>
	
<!-- START: banner -->
<div id="banner" class="global">
	<!-- banner left --><div class="left"></div>
	<!-- banner mid --><div class="mid"></div>
	<!-- banner right --><div class="right"></div>
</div>
<!-- END: banner -->

<div id="navbar-container">
<!-- START: navbar -->
<div id="navbar" class="global">
	<ul class="menu">
		<li class="media null"><a class="menu-link" href="#">media</a>
			<ul class="submenu">
				<li class="null"><a class="menu-link" href="#">tv</a></li>
				<li class="null"><a class="menu-link" href="#">movies</a></li>
				<li class="null"><a class="menu-link" href="#">books</a></li>
				<li class="null"><a class="menu-link" href="#">manga</a></li>
			</ul>
		</li>
		<li class="art null"><a class="menu-link" href="#">art</a>
			<ul class="submenu">
				<li class="null"><a class="menu-link" href="#">sculptures</a></li>
				<li class="null"><a class="menu-link" href="#">drawings</a></li>
				<li class="null"><a class="menu-link" href="#">paintings</a></li>
				<li class="null"><a class="menu-link" href="#">this is my design</a></li>
			</ul>
		</li>
		<li class="goals null"><a class="menu-link" href="#">goals</a>
			<!--<ul class="submenu">
				<li class="null"><a class="menu-link" href="#"></a></li>
			<ul>-->
		</li>
		<li class="home null"><a href="/"><div class="home-logo"></div><span class="menu-link">home</span></a></li>
		<li class="thoughts"><a class="menu-link" href="#">thoughts</a>
			<ul class="submenu">
				<li class="null"><a class="menu-link" href="#">opinions</a></li>
				<li class="null"><a class="menu-link" href="#">ideas</a></li>
				<li class="null"><a class="menu-link" href="#">philosophy</a></li>
				<li class="null"><a class="menu-link" href="#">theories</a></li>
			</ul>
		</li>
		<li class="quotes null"><a class="menu-link" href="#">quotes</a>
			<ul class="submenu">
				<li class="null"><a class="menu-link" href="#">my quotes</a></li>
				<li class="null"><a class="menu-link" href="#">tv quotes</a></li>
				<li class="null"><a class="menu-link" href="#">movie quotes</a></li>
				<li class="null"><a class="menu-link" href="#">random quotes</a></li>
			</ul>
		</li>
		<li class="things null"><a class="menu-link" href="http://www.neopets.com">things</a>
			<ul class="submenu">
				<li class="null"><a class="menu-link" href="#">favourite things</a></li>
				<li class="null"><a class="menu-link" href="#">exploration</a></li>
				<li class="null"><a class="menu-link" href="#">notes</a></li>
				<li class="null"><a class="menu-link" href="#">satisfying</a></li>
			</ul>
		</li>
	</ul>
</div>
<!-- END: navbar -->
</div>

<!-- START: content -->
<div id="content" class="global">
<!-- start: margin-wrapper -->
<div class="margin-wrapper">

	<!-- start: content body -->
	<div class="body">
		<!-- title--><h1 class="content-page-title"><?php echo $title; ?></h1>