<?php include("top.html"); ?>

	<hr>

	<?php
		$userName = $_POST["name"];
		$userData = $userName;

		foreach ($_POST as $key => $value) {
			if ($key != "name"){
				$userData = $userData.",".$value;
			}
		}
		
		file_put_contents("messages.txt", "\n".$userData, FILE_APPEND);
	?>

	<div id = "email-sent">
		<h1>Thank you!</h1>
		<p id="sent">Your email has been sent to Celebrations with Colleen, <?= $userName ?>!<br><br>

		<a href="home.php">Click here to return to the homepage.</a>
		</p>
	</div>
	
	<br><br><br>

<?php include("bottom.html"); ?>
