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

<p>Welcome to my website. I created this from scratch (HTML/CSS, some Javascript/jQuery, and good ol' PHP) because I love building websites and having a place to express myself. </p>
<p>Hopefully this site can give you some insight as to who I am. As I am always growing and changing, the content you read here may not be the most up-to-date with my character.</p>

<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>