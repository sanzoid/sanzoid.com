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
<ul>Ingredients: 
	<li>Clothing/Fabric (100% cotton works best. Polyester does not bleach so any Cotton/Poly blends will not work as well)</li>
	<li>Photoshop &amp; printer or pen &amp; paper</li>
	<li>Xacto Knife</li>
	<li>Freezer Paper or Shelf Liner (I buy Con-tact Paper Shelf Liner on Amazon)</li>
	<li>Spray Bottle with 50% bleach and 50% water</li>
</ul>

<ol>
	<li>Designing: Create the design in Photoshop, on paper, etc. It should be a stencil, so each part of the design is either positive or negative. If you're doing multilayer, then each part is a layer is a single shade of colour. <br>What I do is get an image in Photoshop, erase negative areas, overlay with white, then add a black stroke. I end up with all of the lines I need to cut. </li>
	<li>Cutting and Applying: Once you have the design on paper, you can trace it or cut directly on top of it. What you will use is something that is both waterproof and will stick to the shirt - freezer paper or shelf liner. Most people recommend freezer paper, but that requires ironing so I haven't tried it. I use shelf liner and the stuff works great. Once your stencil is on your shirt, you should have any parts you want to turn lighter exposed and any parts you want to stay the same covered. If you are doing multiple layers, the lightest layers are exposed first for bleaching and the darker layers are exposed later. 

		<br>Tip: When working with shelf liner, because you have to peel it with the design already cut and then place it on the shirt, it can be difficult to work with. Parts will start ripping or sticking together. I recommend not cutting parts entirely so that when you peel it, the whole thing comes off without little pieces not agreeing with you. Once you have it placed on the shirt, you can then cut those little uncut bits. </li>
	<li>Bleaching: Get a spray bottle with 50% bleach and 50% water. Then, not too close, spray the shirt. Dab with a paper towel to prevent the bleach from bleeding under the stencil. Spraying farther away will create a mistier effect. Do a couple of layers of this and the shirt will turn lighter due to the dye being removed from the bleach. If you're doing multilayer, you'll have to remove parts of your stencil in the middle of bleaching. <br>Heat will speed up the bleaching process. So do this in the sun or use a hair dryer/iron. </li>
	<li>Washing: Dump it in cold water to stop the bleaching. Then wash it. I like to hand wash it and then wash with other bleached shirts so I don't bleach my regular clothes. </li>
</ol>

<p>(I recommend doing this outside as the bleach is smelly and intoxicating. Although bleach on skin is apparently bad, I have never had any problems with bleachy mist landing on my bare feet. Maybe because I am now immune to bleach.) </p>

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
