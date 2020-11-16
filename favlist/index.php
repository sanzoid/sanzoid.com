<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	$base = dirname(getcwd());				// go up one level
	// $base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'FAVLIST'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>FAVLIST is an app where you can keep a list of your favourite things. It allows you to share beautiful cards of your favourite things so you can share with the world what they are.</p>

<p>I mean, take a look at how many <a href="/pages/things/favourites.php">favourite things</a> I have.</p>

<p>An iOS app written in Swift that I have been working on since September 2020. I tend to have app ideas that grow extremely complex. Having never released an app on my own, I wanted to work on an app that was simple enough that I wouldn't overcomplicate it and end up never completing it.</p>

<p><a href="https://github.com/sanzoid/SZDFavourites" style="font-size:20px;">Github Repo</a><br><em>(If the repo is inaccessible, please contact me if you would like to view it. As this project will be monetized, I will keep the project private. I will only be making it public for short periods of time for prospective employers.)</em></p>

<p>As of Nov 2020, here is my progress:</p>
<p><b>Features</b></p>
<ul>
	<li>&#10004; Manage a list of things (add, delete, move, edit things)</li>
	<li>&#10004; Manage things in groups (add, delete, move, edit groups)</li>
	<li>&#10004; Add favourite items to things (add, delete, move, edit items)</li>
	<li>Share favourite thing card</li>
	<li>Settings</li>
	<li>CSV export/import</li>
	<li>iCloud Sync</li>
</ul>

<p><b>Monetization</b></p>
<ul>
	<li>&#10004; Ads (by AdMob)</li>
	<li>Premium features - themes, card themes, unlock limits.</li>
</ul>

<p><b>Project</b></p>
<ul>
	<li>&#10004; Persistence</li>
	<li>&#10004; Model with Unit Tests</li>
	<li>&#10004; MVVM Architecture</li>
	<li>&#10004; Controllers</li>
	<li>Views</li>
</ul>

<h2>Brainstorming &amp; Notes</h2>
<div id="favlist-note">
<?php 
	linked_image("/images/favlist/favlist1.JPG"); 
	linked_image("/images/favlist/favlist4.JPG"); 
	linked_image("/images/favlist/favlist2.JPG"); 
	linked_image("/images/favlist/favlist3.JPG"); 
	linked_image("/images/favlist/favlist5.JPG"); 
	linked_image("/images/favlist/favlist6.JPG"); 

?>
</div>

<h2>App Development Progress</h2>
<div id="favlist-sim">
<?php 
	linked_image("/images/favlist/favlist_sim1.png"); 
	linked_image("/images/favlist/favlist_sim2.png"); 
	linked_image("/images/favlist/favlist_sim3.png"); 
	linked_image("/images/favlist/favlist_sim4.png"); 
	linked_image("/images/favlist/favlist_sim5.png"); 
	linked_image("/images/favlist/favlist_sim6.png"); 
	linked_image("/images/favlist/favlist_sim7.png"); 
	linked_image("/images/favlist/favlist_sim8.png"); 
?>
</div>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
