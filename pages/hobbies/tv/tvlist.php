<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(dirname(getcwd())));		// go up three levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'TV Show List'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<table>
	<tr>
		<td>Show</td>
		<td>Rating</td>
		<td>Short Review</td>
		<td>Review</td>
	</tr>	

<?php 

	$spreadsheet_url = "https://docs.google.com/spreadsheets/d/1-0UmY4T_TQRb3PO3B7crUm0CBSCkYKypQxfLl81DkOo/pub?gid=0&single=true&output=tsv"; 

	if(!ini_set('default_socket_timeout', 15)) echo "<!-- unable to change socket timeout -->";

	if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	        $spreadsheet_data[] = $data;
	    }
	    fclose($handle);
	}
	else
	    die("Problem reading csv");

	//echo print_r($spreadsheet_data);

	$list = file_get_contents('tvshows.list');
	$data = file_get_contents('tvshows.data'); 


	$list = explode("\n", $list); 
	//$data = explode("\n", $data); 
	$data = $spreadsheet_data;


	//echo(print_r($list) . '<br>');
	//echo(print_r($data) . '<br><br>');

	$data_count = count($data); 

	echo "<br><br>";

	// turn data into a dictionary 
	for ($i = 0; $i < $data_count ; $i++) 
	{
		//if (substr($data[$i], 0, 2) == '//')
		//{
			//continue;
		//}

		/*$show = explode("\t", $data[$i]); 
		$title = $show[0]; 
		$rating = $show[1]; 
		$oneword = $show[2]; 
		//$review = $show[3]; 

		$parsed_data[trim($show[0])] = $show; 
*/
		//echo(print_r($parsed_data[$show[0]]) . '<br>');
		//echo($title . ' | ' . $rating . ' | ' . $oneword . '<br>');


		//echo('<br><br>spreadsheet[$i]: ' . print_r($data[$i]) . '<br><br>');
		$show = explode("\t", $data[$i][0]); 
		$title = $show[0]; 
		$rating = $show[1]; 
		$oneword = $show[2];

		//echo($title . ' | ' . $rating . ' | ' . $oneword . '<br>');	
		$parsed_data[trim($show[0])] = $show; 
	}


	//echo "<table>\n";

	foreach ($list as $show)
	{
		$show = trim($show); 
		// find the show's data 
		$showdata = $parsed_data[$show];

		$title = $show;
		$rating = $showdata[1];
		$oneword = $showdata[2];

		echo "<tr>\n";

		echo "<td>" . $title . "</td>"; 
		echo "<td>" . $rating . "</td>"; 
		echo "<td>" . $oneword . "</td>"; 
		echo "<td>" . $review . "</td>"; 

		//echo($title . ': ' . $rating . '/10' . $oneword . '<br>');
		//echo($show . ': ' . print_r($showdata). '<br>');


		echo "</tr>\n";
	}

	//echo "</table>\n"; 
?>
</table>


<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
