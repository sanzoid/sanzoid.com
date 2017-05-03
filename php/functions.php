<?php 
function last_modified($filepath) {
	if( ! ini_get('date.timezone') )
	{
	    date_default_timezone_set('America/Toronto');
	}

	$dateformat = ""; 

	echo date("Y-M-d h:iA", filemtime($filepath));
}

// Get the content from url 
function curl_get_contents($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $data = curl_exec($ch);
  curl_close($ch);
  //echo "<p>" . print_r($data) ."</p>";
  return $data;
}

// No longer works
function get_dropbox_location($link) {
	// Dropbox will redirect, so we want the actual location of it since we won't redirect
	$headers = get_headers($link, 1); 
	$file_link = isset($headers['location']) ? $headers['location'] : NULL;
	if (!$file_link) {
		$file_link = $headers['Location']; 
	}
	//echo "<p>" . print_r($headers) ."</p>";
	return $file_link;
}

function render_txt_file($file_link) {

	$file = curl_get_contents($file_link);
	$file = explode("\n", $file); 
	$title = trim(str_replace("?", "", utf8_decode($file[0]))); 

	echo "<div>\n";
	echo "<h2>" . $title . "</h2>\n";
	echo "<p>(Rendered via Dropbox file)</p>\n"; 
	$file[0] = ""; 	// clear title so it doesn't go in the list

	echo "<ul class=\"upword\">\n"; 
	foreach ($file as $string) {
		// !!! 
		// âœ“ strike 
		// â€¢ bullet 
		$html = "";
		$string = str_replace("!!!", "!", $string);	// only want one ! 
		$line = utf8_decode($string);	// decode weird characters to ?
		$bullet = substr($line, 0, 1); 	// what kind of bullet is it 
		$class = "";

		if (strcmp($bullet, "!") == 0) {
			$class = "important";
		} else if (strcmp($bullet, "?") == 0) {
			$class = "bullet";
		}

		$last_char = substr($line, -1);
		if ($last_char == "?") {
			$class = $class . " strike"; 
		} 

		$line = str_replace(array("!", "?"), "", $line); 
		$line = trim($line);

		if (!empty($line)) {
			$html = "<li class=\"" . $class . "\">" . $line ."</li>\n"; 
		} else {
			$html = "<li class=\"empty\"></li>\n";
		}

		echo $html; 
	}
	echo "</ul>\n";
	echo "</div>\n";
}

function render_bulleted_txt_file($file_link) {

	$file = curl_get_contents($file_link);
	$file = explode("\n", $file); 
	$title = trim(str_replace("?", "", utf8_decode($file[0]))); 

	echo "<div>\n";
	echo "<h2>" . $title . "</h2>\n";
	echo "<p>(Rendered via Dropbox file)</p>\n"; 
	$file[0] = ""; 	// clear title so it doesn't go in the list

	echo "<ul class=\"upword\">\n"; 
	foreach ($file as $string) {
		// !!! 
		// âœ“ strike 
		// â€¢ bullet 
		$html = "";
		//$string = str_replace("!!!", "!", $string);	// only want one ! 
		//$line = utf8_decode($string);	// decode weird characters to ?
		$line = $string; 
		$bullet = substr($line, 0, 3); 	// what kind of bullet is it 
		$class = "";

		if (strcmp($bullet, "!") == 0) {
			$class = "important";
		} else {
			$class = "bullet";
		}

/*
		$last_char = substr($line, -1);
		if ($last_char == "?") {
			$class = $class . " strike"; 
		} 
*/
		//$line = str_replace(array("!", "?"), "", $line); 
		$line = substr($line, 3);
		$line = trim($line);

		if (!empty($line)) {
			$html = "<li class=\"" . $class . "\">" . $line ."</li>\n"; 
		} else {
			$html = "<li class=\"empty\"></li>\n";
		}

		echo $html; 
	}
	echo "</ul>\n";
	echo "</div>\n";
}

function render_list_from_file($data_file, $wrap_before, $wrap_after) {
	$data_stream = file_get_contents($data_file); 

	$lines = explode("\n", $data_stream); 

	echo "<ul>";
	foreach ($lines as $line) {
		if (!empty($line)) {
			echo "<li>". $wrap_before . $line . $wrap_after . "</li>"; 
		}
	}
	echo "</ul>";
}

function render_quotes_list_from_file($data_file) {
	$data_stream = file_get_contents($data_file); 

	$lines = explode("\n", $data_stream); 

	echo "<ul>";
	for ($i = 0; $i < count($lines); $i++) {
		$line = $lines[$i]; 
		if (!empty($line)) {
			// get next line for author 
			$i++; 
			$author = $lines[$i]; 
			echo "<li><span class=\"quote\">" . $line . "</span><span class=\"author\">" . $author . "</span></li>"; 
		}
	}
	echo "</ul>";
}

function linked_image($image_location) {

	echo "<a href=\"" . $image_location ."\" target=\"_blank\"><img src=\"" . $image_location . "\" /></a>\n"; 
}

?>
