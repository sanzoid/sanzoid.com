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
	<li>Photoshop: 8"x10.78" template. 150 dpi (I found there isn't much of a visual difference between 150 and 300 dpi). Add strokes for extra white borders and for lines to cut. It takes a lot of rearranging to make the most of the space. </li>
	<li>Print: I save the image from Photoshop, drag it into Microsoft Word with the smallest borders it allows, then print. The paper I use is sticker paper, it's basically just a full-sheet label. Very important: print with all of the highest settings. Your printer may differ, but my crappy inkjet printer will just not do its best job until you tell it to.</li>
	<li>Protection: I add an extra layer of shelf liner to protect it since the paper is just paper. Don't want smudging or wet substances to ruin it. </li>
	<li>Cut: First I cut them all to be separate for more precise cutting. Then I actually cut around the edges to get the final product. </li>
	<li>Peel and stick! (I actually have no place to do this step.)</li>
</ol>
<p>Cost: 1 sheet of sticker paper ($1) + 1 full page of coloured ink ($1 or less?) + my time (priceless or free) = ~$2 for a full sheet of stickers! </p>

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

	foreach ($files as $file) {

		$img_src = $dir_path . "/" . $file; 

		$img_src_parts = pathinfo($img_src); 

		if (strcasecmp($img_src_parts['extension'] , "jpg")  == 0 ||
			strcasecmp($img_src_parts['extension'] , "png")  == 0
			) 
		{
			$html = $html . "\t<li><a href=\"". $img_src ."\" target=\"_blank\"><img src=\"" . $img_src . "\" /></a></li>\n";
			
		}

	}
	echo $html;
?>
</ul>
</div>

</div>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
