<?php 
	//$base = "/home/a1257259/public_html"; 
	$base = getcwd();	// index-specific 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Hello World!'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->

<p>Welcome to my newly renovated site. I have re-designed it so many times and I even thought the last one was the final time, but hopefully this is the last time I will ever re-design this. I worked hard to make it responsive, so feel free to minimize and maximize the window as much as you'd like. </p>

<p>I have finally uploaded content! I waited for when I had a template to use because I'm too lazy to do a bunch of HTML copy and pasting.</p>
<p>Now every single link (except "Hobbies") in my menu has leads to a page! I hope that it gives a little insight to who I am.</p>

<p>Check it! I'm rendering stuff from my notes on Dropbox, edited via UpWord. So when I make a change to the note, it will update on here instantaneously! Y'all be gettin' real-time updates from me whenever, wherever!</p>

<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>