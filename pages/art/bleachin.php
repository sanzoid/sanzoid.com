<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Bleachin\''; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<h2>Backstory</h2>
<p>There was an episode of <em>Prison Break</em> where they bleached their PI (Prison Industries) uniform from navy to white in order to get into the psych ward. About a month later, I was thinking about it. If I wanted an all-white wardrobe, I could just bleach everything, right? And then I started searching how the bleach worked and everything, and came across BLEACH DESIGNS. People have already been doing this: bleaching clothing for an absence of dye to make really cool designs. And so my brain started exploding with ideas.</p>
<p>Now, I've always been a fan of T-shirts. They are the one thing I've always felt that's worth buying because 1) The designs represent my favourite things and 2) I can show the world how proud I am to be a fan of this very thing. But see, money was always an issue. I think one time I bought a shirt for $20 because I had lots of reasons going for it, but most of the time, I decide against it. So now I find out that all of these years, I could've just made my own T-shirts??? I mean, I could always make them, but it would be like ironing paper on shirts which isn't very nice. Yes, the designs are limited to different shades of one colour, but STILL. A lot of T-shirts are only one colour too. PLUS, I can put the design anywhere and as big as I want, so that makes up for the limited colouring. </p>

<h2>The Process</h2>
<p>How does it work, you say? You can Google it or I'll just tell you!</p>

<ol>
	<li>The Idea: Think of what you want. Find images of it. A lot of designs already exist, but if you want something totally original, you can create your own design.</li>
	<li>The Design: Every part of the design will be either positive or negative (bleached or not bleached, lightened or not). You can draw this on paper or on the computer. I like to get the images in Photoshop, erase everything that's negative, overlay the positive with white and put a black stroke. This creates a nice outline and doesn't waste too much ink when you print it. </li>
	<li>The Stencil: Once you have the stencil on paper, you can trace it or cut directly with it. I've tried using cardstock, but bleach leaks through it. If you're just trying the process out, go for it with cardstock like I did, but if you really want a nice outcome, I recommend shelf liner or freezer paper. Well, other people recommend freezer paper. I haven't tried it, but I hear it's the best for this. It involves ironing, which I have no idea so I stuck with shelf liner. I got a huge roll for about $9 on Amazon. It's basically a clear adhesive so it's great for just sticking onto a shirt and peeling off when you're one. One disadvantage is that if your design has lots of shapes that peel in different directions, it will be hard to peel. Also, it's difficult to place it perfectly on the shirt and avoid sticking everything together.</li>
	<li>The Bleaching: Get a spray bottle with 50% bleach and 50% water. Then, not too close, spray the shirt. Dab with a paper towel to prevent the bleach from bleeding under the design. Spraying from far away will land a nice mist on the shirt. A couple of layers and you've got yourself an awesome piece of clothing!</li>
</ol>


<h2>The Finished Products</h2>
<p>So here are all of my bleachings. If the particle accelerator were to explode near me, I would become a bleach metahuman.</p>
<p>(Sorted by reverse chronological order.)</p>

<div id="bleachin-finished-products"> 
<?php 

	$data_file = file_get_contents("bleach.data"); 
	$data_array = explode("\n", $data_file);
	$data_count = count($data_array); 

	for ($i = 0; $i < $data_count; $i++) {		
		$html = '<div class="finished-product">' . "\n"; 

		// h2 
		$html = $html . '<h2>' . $data_array[$i] . '</h2>' . "\n"; 
		$i++; 

		// image 
		$html = $html . '<img src="/images/art/bleaching/' . $data_array[$i] . '" />' . "\n"; 
		$i++; 

		// description 
		$html = $html . '<p>' . $data_array[$i] . '</p>' . "\n";
		$i++;  

		$html = $html . '</div>' . "\n"; 

		echo $html; 
	}

?>
</div>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
