<?php 
function render_txt_file($file_link) {
	// Dropbox will redirect, so we want the actual location of it since we won't redirect
	$headers = get_headers($file_link, 1); 
	$file_link = $headers['location'];

	$file = file_get_contents($file_link);

	$file = explode("\n", $file); 
	$title = $file[0]; 

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
		}

		echo $html; 
	}
	echo "</ul>\n";
	echo "</div>\n";
}

?>
