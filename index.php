<?php 
	$base = "/home/a1257259/public_html"; 
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

<h1><?php echo "PHP SUCCESSSSSSS" ?></h1>
<p><a href="http://www.neopets.com">Play neopets with me.</a></p>
<p>Welcome to my newly renovated site. I have re-designed it so many times and I even thought the last one was the final time, but hopefully this is the last time I will ever re-design this. I worked hard to make it responsive, so feel free to minimize and maximize the window as much as you'd like. </p>
<h1>Sanzoid Technologies</h1>
<p>Founded on January 4th, 2016, Sanzoid Technologies is a company that does whatever the CEO Developer wants. The company is portable and goes wherever its CEO Developer goes. It's like magic!</p>
<p>Employee count to date: 1</p>
<h2>CEO Developer: Sandy Ho</h2>
<p>Sandy Ho enjoys watching television on the actual television. </p>

<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>