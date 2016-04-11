<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Art'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<div id="art-main">

<p>I do art from time to time. I love building something out of nothing. I'm not very good at art, but I do enjoy it.</p>

<p>Here is a showcase of my work in the past. It's not a complete collection. I'll add more as soon as I find more.</p>


<?php 

	$data_file = file_get_contents("art.data2"); 
	$data_array = explode("\n", $data_file);

	$data_headings = array(); 
	$data_anchors = array(); 

	$data_array_count = count($data_array); 

	for ($i = 0; $i < $data_array_count; $i++) {
		$html = "";


		$data_line = $data_array[$i]; 
		$first_char = $data_line[0]; 

		if (empty($data_line)) {	// empty line 
			$html = "</div>"; 
		}
		else if ($first_char == "@") {	// Heading 
			$heading = substr($data_line, 1); 
			$id = substr($data_array[$i + 1], 1); 

			array_push($data_headings, $heading); 
			array_push($data_anchors, $id);

			$html = $html . "<div id=\"". $id."\" class=\"anchored section\">\n"; 
			$html = $html . "<h2>" . $heading . "</h2>\n"; 
		} 

		else if ($first_char == "%") {
			$html = $html . substr($data_line, 1) . "\n"; 
		}

		else if ($first_char == "/") {	// folder path 
			$dir_path = $base.$data_line; 

			$files = scandir($dir_path); 

			foreach ($files as $file) {
				//echo $file."\n";

				$img_src = $data_line . "/" . $file; 

				$img_src_parts = pathinfo($img_src); 

				if (strcasecmp($img_src_parts['extension'] , "jpg")  == 0 ||
					strcasecmp($img_src_parts['extension'] , "png")  == 0
					) 
				{
					$html = $html . "\t<li><a href=\"". $img_src ."\" target=\"_blank\"><img src=\"" . $img_src . "\" /></a></li>\n";
					
				}
			}
			
			$html = "<ul>\n" . $html . "</ul>\n"; 
		}

		echo $html; 

	}


	/*$LINE_BREAK = "<br>"; 

	$data_string = file_get_contents("art.data");
	//echo $data_string.$LINE_BREAK;

	$data_array = explode("\n", $data_string);
	$data_array_count = count($data_array); 

	$data_headings = array(); 
	$data_anchors = array(); 

	echo "\r\n";

	$first_item = true; 


	for ($i = 0; $i < $data_array_count; $i++) {
		$data = $data_array[$i]; 

		//echo "Line ". $i .": ".$data."\n";
		if (empty($data)) {	// newline separator 
			// print html block and clear it for the next one 
			$html = $html . "</div>\n"; 
			echo $html;
			$html = ''; 
			$first_item = true; 
			continue; 
		}

		$first_char = substr($data, 0, 1);

		if ($first_char == "@") {	// h2 
			$heading = substr($data, 1); 
			// if next line starts with #, it's the id 
			if (i < $data_array_count - 1) {
				$next_line = $data_array[$i+1];
				//echo "next line: " . $next_line;
				if ($next_line[0] == "#") {
					$id = substr($next_line, 1); 
					$i++; 	// skip next line 
				} else {
					$id = ""; 
				}
			}

			$html = $html . "<div id=\"" . $id . "\"" ; 
			if (!empty($id)) {
				$html = $html . " class=\"anchored section\""; 
			}
			$html = $html . ">\n" . "\t<h2>" . $heading . "</h2>\n"; 

			// for menu 
			array_push($data_headings, $heading); 
			array_push($data_anchors, $id); 

		} 
		else if ($first_char == "#") {	// anchor 
			//continue; 	// processed with heading 
		} 
		else if ($first_char == "%") {	// html 
			$html_string = substr($data, 1); 
			$html = $html . "\t\t" . $html_string . "\n"; 
		} 
		else {	// image 
			// first item 
			if ($first_item) {
				$html = $html ."\t\t<ul>\n";  
				$first_item = false; 
			}

			// list item 
			$img_src = $data; 
			$img_caption = $data_array[$i+1]; 
			

			$html = $html . "\t\t\t<li><a href=\"" . $img_src . "\" target=\"_blank\">";  
			$html = $html . "<img src=\"" . $img_src . "\" /></a>\n" . 
			"\t\t\t\t<span class=\"caption\">" . $img_caption . "</span>\n"; 
			$html = $html . "\t\t\t</li>\n";

			// last item 
			$next_line = $data_array[$i+2]; // 2 because caption, then line after
			$next_line_first_char = $next_line[0]; 
			if (empty($next_line_first_char) || $next_line_first_char == "%") {		// empty line or html line
				$html = $html . "\t\t</ul>\n"; 

			}

			$i++; 	// skip next line because caption already proecessed
		}
	}

	//echo print_r($data_headings)."\n"; 
	//echo print_r($data_anchors)."\n";
*/
	// Menu 
	$menu = ""; 
	$menu = $menu . "<ul class=\"pages-submenu\">\n"; 
	$i = 0; 
	foreach ($data_headings as $data_heading) {

		$menu_item = $data_heading; 
		$menu_anchor = "#"  . $data_anchors[$i]; 

		$menu = $menu .  "\t<li><a href=\"" . $menu_anchor . "\">" . $menu_item ."</a></li>\n";  
		$i++; 
	}
	$menu = $menu . "</ul>\n"; 

	echo $menu;

?>

<!--
<div id="" class="anchored">
	<h2>Sculptures</h2>

	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<div id="" class="anchored">
	<h2>Crafts</h2>

	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<div id="" class="anchored">
	<h2>Drawings</h2>

	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<div id="" class="anchored">
	<h2>Digital Drawings</h2>
	<p>Drawn with a Wacom Bamboo Tablet.</p>

	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<div id="" class="anchored">
	<h2>Paintings</h2>
	<p>I'm really bad at painting. Don't even mention watercolour. </p>

	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<div id="" class="anchored">
	<h2>Papercraft</h2>
	<p>At one point in highschool, this is all I did. Bookmark the ones I wanted to do, then do like 1% of them. </p>

	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
-->

<!--
<div id="" class="anchored">
	<h2></h2>

	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
-->
</div>
<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
