<?php include("top.html"); ?>

<?php
	$textFile = file_get_contents("bookings.txt");
	$bookings = explode("\n", $textFile);
	$confirmationnumber = $_GET["confirmationnumber"];

	$userInfo = array();
	$num = count($bookings);
	$found = false;

	for ($i=1; $i < $num; $i++) {
		$booking = $bookings[$i];
		$userInfo = explode(",", $booking);
	
		if($userInfo[5] == $confirmationnumber) {
			printMatch($userInfo);
			$found = true;
			break;
		}
	}

	if($found == false) {
		echo "<h1>Sorry, this event was not found. </h1></div>";
	}

	function printMatch($rawMatch){
		echo
		"<h1>Event confirmed for" . $rawMatch[0] . "</h1>
		<div class='match'>
			<strong>Name of Event: </strong>" . $rawMatch[1] . "<br>
			<strong>Type of Event: </strong>" . $rawMatch[2] . "<br>
			<strong>Date: </strong>" . $rawMatch[3] . "<br>
			<strong>Decription: </strong>" . $rawMatch[4] . "<br>
			<strong>Confirmation Number: </strong>" . $rawMatch[5] . "<br>
		</div><br><br>";
	}

?>

<hr>

<?php include("bottom.html"); ?>
