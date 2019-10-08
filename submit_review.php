<?php include("top.html"); ?>

	<?php
		$name = $_POST["name"];
		$review = $_POST["review"];

		$userData = $name."-".$review."\n";

		file_put_contents("reviews.txt", "\n".$userData, FILE_APPEND);
	?>


	<div id = "submitted">
		<h1>Thank you!</h1>
		<p>Your love note is being processed. <?= $name ?>!
		<br/><br/>

		Return to the other Love Notes <a href="lovenotes.php">here</a>
		</p>
		<br>
		<br>
		<br>
	</div>

<?php include("bottom.html"); ?>
