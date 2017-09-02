<!DOCTYPE html>
<html>
<head>
	<title>Fall 2017 Schedule</title>
	<link rel="stylesheet" type="text/css" href="tvschedule.css">

	<?php include_once("functions.php"); ?>
</head>

<body>

<h1>Fall 2017 Schedule</h1>
<p>My 2017 Fall Primetime Network Television schedule.<br>Most anticipated shows: The Gifted and The Good Doctor.</p>

<div id="schedule-container">
<div id="div-schedule">
	<?php 
	/*
		renderDay('', 
			[ // 8:00
			], 
			[ // 8:30 
			],
			[ // 9:00
			],
			[ // 9:30
			],
			[ // 10:00
			],
			[ // 10:30
			]
		); 
	*/

	/*
		'' => ['', 1, 1]
	*/

		renderDay('Monday', 
			[ // 8:00
			], 
			[ // 8:30 
			],
			[ // 9:00
				'The Gifted' => ['fox', 1, 2]
			],
			[ // 9:30
			],
			[ // 10:00
				'The Good Doctor' => ['abc', 1, 2]
			],
			[ // 10:30
			]
		); 

		renderDay('Tuesday', 
			[ // 8:00
				'The Flash' => ['cw', 1, 2]
			], 
			[ // 8:30 
				'Fresh Off The Boat' => ['abc', 2, 1]
			],
			[ // 9:00
				'Legends of Tomorrow' => ['cw', 1, 2],
				'The Mick' => ['fox', 1, 1], 
				'Blackish' => ['abc', 1, 1]
			],
			[ // 9:30
				'Brooklyn Nine-Nine' => ['fox', 1, 1], 
				'The Mayor' => ['abc', 1, 1]
			],
			[ // 10:00
				'Kevin (Probably) Saves the World' => ['abc', 3, 2]
			],
			[ // 10:30
			]
		); 

		renderDay('Wednesday', 
			[ // 8:00
				'The Goldbergs' => ['abc', 1, 1],
				'The Blacklist' => ['nbc', 1, 2]
			], 
			[ // 8:30 
				'Speechless' => ['abc', 1, 1]
			],
			[ // 9:00
				'Modern Family' => ['abc', 1, 1]
			],
			[ // 9:30
			],
			[ // 10:00
			],
			[ // 10:30
			]
		); 

		renderDay('Thursday', 
			[ // 8:00
				'Superstore' => ['nbc', 3, 1]
			], 
			[ // 8:30 
				'The Good Place' => ['nbc', 2, 1],
				'Young Sheldon' => ['cbs', 1, 1]
			],
			[ // 9:00
				'The Orville' => ['fox', 1, 2],
				'Arrow' => ['cw', 1, 2]
			],
			[ // 9:30
				'Great News' => ['nbc', 1, 1]
			],
			[ // 10:00
			],
			[ // 10:30
			]
		); 

		renderDay('Friday', 
			[ // 8:00
				'Once Upon A Time' => ['abc', 1, 2],
				'Crazy Ex-Girlfriend' => ['cw', 1, 2]
			], 
			[ // 8:30 
			],
			[ // 9:00
				'Marvel\'s Inhumans' => ['abc', 2, 2]
			],
			[ // 9:30
			],
			[ // 10:00
			],
			[ // 10:30
			]
		); 

		renderDay('Sunday', 
			[ // 8:00
				'Wisdom of the Crowd' => ['cbs', 1, 2]
			], 
			[ // 8:30 
				'Ghosted' => ['fox', 2, 1]
			],
			[ // 9:00
			],
			[ // 9:30
				'The Last Man on Earth' => ['fox', 3, 1]
			],
			[ // 10:00
			],
			[ // 10:30
			]
		); 

	?>
	
<table id="networks-legend">
	<tr>
		<td class="abc">ABC <!-- 8 --></td>
		<td class="cbs">CBS <!-- 4 --></td>
		<td class="fox">FOX<!-- 4 --></td>
		<td class="nbc">NBC<!-- 6 --></td>
		<td class="cw">CW<!-- 7 --></td>
	</tr>
</table>
</div>
</div>

</body>
</html>