<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Thoughts'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>My favourite hobby is thinking. I usually think a lot when I'm on the toilet or in the shower. </p>

<p>Here's an idea: When you're living alone, put picture frames all around your place. For the photos, use photos of other people's families (you can get them from the internet or from friends). When people come to visit you, they'll be like, "Oh, cute photos. Wait a second, who are these people?!??!" <br>Serial killer spin: the photos actually came from people you murdered. You took a photo frame from each of the families you murdered as a trophy. Would be a great Criminal Minds episode.</p>

<p>Below you will find various thoughts and ideas I've had throughout the years. Most of them are story ideas. I don't think I would be able to implement all of these ideas, but I would love if other people did, so I don't really care if anyone steals them. Some are just like, "What was I thinking?" but then I'm like, "Oh yeah, I remember." You might not understand them because the words lack the images that are in my head. Most of these, I remember very clearly what I imagined at the time.</p>
<p>The list was compiled from the many iCloud notes that I had. I am very unorganized when it comes to these things. Sorry for all of the typos. </p>

<p>These are most of my billion-dollar ideas!</p>

<?php render_bulleted_txt_file("https://www.dropbox.com/s/ohiclv3opdcufj6/Thoughts%20and%20Ideas.txt?raw=1"); ?>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
