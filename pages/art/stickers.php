<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Stickers'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<div id="stickers-main">

<p>I've gotten obsessed with making stickers ever since I finalized the process. The possibilities are infinite and I can't stop. Should've started this years ago. So many ideas. Although, I do admit that I take some designs from the internet.</p>
<h2>The Process</h2>

<ol>
	<li>Photoshop: 7.98"x10.65" template. 150 dpi (I found there isn't much of a visual difference between 150 and 300 dpi). Add strokes for extra white borders and for lines to cut. It takes a lot of rearranging to make the most of the space. </li>
	<li>Print: I save the image from Photoshop, drag it into Microsoft Word with the smallest borders it allows, then print. The paper I use is sticker paper, it's basically just a full-sheet label. Very important: print with all of the highest settings. Your printer may differ, but my crappy inkjet printer will just not do its best job until you tell it to.</li>
	<li>Protection: I add an extra layer of shelf liner to protect it since the paper is just paper. Don't want smudging or wet substances to ruin it. </li>
	<li>Cut: First I cut them all to be separate for more precise cutting. Then I actually cut around the edges to get the final product. </li>
	<li>Peel and stick! (I actually have no place to do this step.)</li>
</ol>
<p>Cost: 1 sheet of sticker paper ($1) + 1 full page of coloured ink ($1?) + 1 sheet of shelf liner (20 cents) + my time (priceless or free) = ~$2 for a full sheet of stickers! </p>

<img src="/images/art/stickers/sticker_process_1.JPG" />
<img src="/images/art/stickers/sticker_process_2.JPG" />
<img src="/images/art/stickers/sticker_process_3.JPG" />
<img src="/images/art/stickers/sticker_process_4.JPG" />
<img src="/images/art/stickers/sticker_process_5.JPG" />
<img src="/images/art/stickers/sticker_process_6.JPG" />

<div class="stickers-finished-product"> 
	<h2>STICKERS!!!</h2>
<ul>
<?php 

	$dir_path = '/images/art/stickers/fp'; 
	$files = scandir($base.$dir_path); 
	$html = "";

	foreach ($files as $file) {

		$img_src = $dir_path . "/" . $file; 

		$img_src_parts = pathinfo($img_src); 

		if (isset($img_src_parts['extension']) && 
			(strcasecmp($img_src_parts['extension'] , "jpg")  == 0 ||
			strcasecmp($img_src_parts['extension'] , "png")  == 0 ||
			strcasecmp($img_src_parts['extension'] , "jpeg")  == 0 ||
			strcasecmp($img_src_parts['extension'] , "gif")  == 0)
			) 
		{
			$img_name = pathinfo($img_src, PATHINFO_FILENAME); 

			$html = $html . "\t<li><a href=\"". $img_src ."\" target=\"_blank\">
			<img src=\"" . $img_src_parts['dirname'] . '/small/' . $img_src_parts['filename'] . "_small.png\" />
			</a></li>\n";
			
		}

	}
	echo $html;
?>
</ul>

</div>

<div id="cards-main">

<h1>ID Badge Cards</h1>

<p>I'm too poor for a PVC card-printing machine, so I used sticker paper to make some!</p>
<h2>The Process</h2>

<ol>
	<li>Materials: PVC cards from eBay, sticker/label paper, shelf liner.</li>
	<li>Photoshop: 2.2" x 3.4" template (measure your card and add a bit to the sides). Design your card.</li>
	<li>Print: I save in Photoshop, drag into Microsoft Word, make sure the dimensions on the page is correct, print on sticker paper. </li>
	<li>Protection and Gloss: Put some glossy shelf liner on there.</li>
	<li>Card Application: 
		<ol style="list-style-type:square">
			<li>Cut two connecting edges.</li>
			<li>Slice lightly on the back of the sticker with a knife to peel off just the corner where the edges are cut.</li>
			<li>Peel off the corner backing and line it up to the edges of the card.</li>
			<li>Peel off the rest of the backing and stick the whole thing onto the card.</li>
			<li>Use a knife to cut along the card.</li>
		</ol>
	</li>
	<li>Use it to get into top-secret facilities.</li>
</ol>

<img src="/images/art/cards/card_process_1.JPG" />
<img src="/images/art/cards/card_process_2.JPG" />
<img src="/images/art/cards/card_process_3.JPG" />
<img src="/images/art/cards/card_process_4.JPG" />
<img src="/images/art/cards/card_process_5.JPG" />

<div class="cards-finished-product"> 
	<h2>CARDS!!!</h2>
<ul>
<?php 
	$html = ''; 

	$dir_path = '/images/art/cards/fp'; 
	$files = scandir($base.$dir_path); 

	foreach ($files as $file) {

		$img_src = $dir_path . "/" . $file; 

		$img_src_parts = pathinfo($img_src); 

		if (isset($img_src_parts['extension']) && 
			(strcasecmp($img_src_parts['extension'] , "jpg")  == 0 ||
			strcasecmp($img_src_parts['extension'] , "png")  == 0 ||
			strcasecmp($img_src_parts['extension'] , "jpeg")  == 0 ||
			strcasecmp($img_src_parts['extension'] , "gif")  == 0)
			) 
		{
			$img_name = pathinfo($img_src, PATHINFO_FILENAME); 

			$html = $html . "\t<li><a href=\"". $img_src ."\" target=\"_blank\">
			<img src=\"" . $img_src_parts['dirname'] . '/small/' . $img_src_parts['filename'] . "_small.png\" />
			</a></li>\n";
			
		}

	}
	echo $html;
?>
</ul>
</div>

</div>
</div>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
