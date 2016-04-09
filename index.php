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

<p>Welcome to my newly renovated site. I have re-designed it so many times and I even thought the last one was the final time, but hopefully this is the last time I will ever re-design this. I worked hard to make it responsive, so feel free to minimize and maximize the window as much as you'd like. </p>

<p>Sandy Ho enjoys watching television on the actual television. </p>

<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>