<?php include("top.html"); ?>

	<?php
		$name = $_POST["name"];
		$event = $_POST["event"];
		$type = $_POST["type"];
		$date = $_POST["date"];
		$description = $_POST["description"];
		$confirmationnumber = rand(100000, 999999);

		$textFile = file_get_contents("bookings.txt");
		$infos = explode(",", $textFile);

		foreach ($infos as $info) {
			if($info == $confirmationnumber) {   
				$confirmationnumber = rand(100000, 999999);
			}
		}

		$userData = "";
		$userData = $userData."-".$name.",".$event.",".$type.",".$date.",".$description.",".$confirmationnumber;

		file_put_contents("bookings.txt", "\n".$userData, FILE_APPEND);
	?>


	<div id="thankyou">
		<h1>Thank you!</h1>
		<p>Your event has been scheduled <?= $name ?>!<br/>
		Your confirmation number is <?= $confirmationnumber ?>.<br/>

		<a href="home.php">Click here to return to the homepage.</a>
		</p>
	</div>

	<hr>

<?php include("bottom.html"); ?>
