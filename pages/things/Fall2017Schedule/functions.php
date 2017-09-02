<?php

	function renderShow($show, $network, $colspan, $rowspan) {

		$img = preg_replace('/[^A-Za-z0-9]/', '', strtolower($show)); 
		$html = '<td colspan="'. $colspan .'" rowspan="'. $rowspan .'" style="background-image:url(images/'. $img .'.png)" class="'. $network .'" >'. $show .'</td>' . PHP_EOL; 

		return $html; 

	}

	function renderTimeslot($timeslot, $shows) {
		$html = '<tr class="'. $timeslot .'">' . PHP_EOL;
		$html .= '<td class="timeslot">'. $timeslot .'</td>' . PHP_EOL;

		if (count($shows) > 0) {
			foreach($shows as $show => $args) {
				$network = $args[0]; 
				$colspan = $args[1]; 
				$rowspan = $args[2];

				$html .= renderShow($show, $network, $colspan, $rowspan);
			}	
		}

		$html .= '</tr>' . PHP_EOL;

		return $html; 
	}

	function renderDay($day, $shows_800, $shows_830, $shows_900, $shows_930, $shows_1000, $shows_1030) {
		$html = '';
		$html .= '<div id="'. $day .'" class="day">' . PHP_EOL;
		//$html .= '<td></td>' . PHP_EOL;

		// schedule 
		$html .= '<table class="day-schedule">' . PHP_EOL;

		$html .= '<thead><th class="timeslot"></th><th>'. $day .'</th></thead>' . PHP_EOL;
		$html .= '<tbody>' . PHP_EOL;

		$html .= renderTimeslot('8:00', $shows_800); 
		$html .= renderTimeslot('8:30', $shows_830); 
		$html .= renderTimeslot('9:00', $shows_900); 
		$html .= renderTimeslot('9:30', $shows_930); 
		$html .= renderTimeslot('10:00', $shows_1000); 
		$html .= renderTimeslot('10:30', $shows_1030); 

		$html .= '</tbody>' . PHP_EOL;
		$html .= '</table>' . PHP_EOL;
		$html .= '</div>' . PHP_EOL;

		echo $html;
	}
?>