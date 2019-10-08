<?php include("top.html"); ?>

	<div id = "contact">
		<h1 id="contactInfo">Contact Information</h1>

		<div id = "card">
			<img src= "card.PNG" alt = "front"/>
		</div>

		<br>
		<p> Phone Number: (201) - 410 - 4913<br>
			Email: colleenaebmonahan@gmail.com<br>
			Address: 29 Morrow Road, Midland Park, NJ 
		</p>

		<br>
		<form action="Email_sent.php" method="post">
			<fieldset>
				<legend>Contact Colleen Here</legend>

				<strong>Name: </strong><input type="text" name="name" size="16" />

				<br><br>

				<strong>Email: </strong><input type="text" name="email" size="16" />

				<br><br>

				<strong>Phone Number: </strong><input type="text" name="number" size="24" />

				<br><br>

				<strong>Messsage: </strong><textarea rows = "4" cols = "50" name="message"></textarea>

				<br>
				<br>
                        
				<input type="submit" value="Send">
			</fieldset>
		</form>

		<br>
		<br>
		<br>

		<iframe src="https://calendar.google.com/calendar/embed?src=en.usa%23holiday%40group.v.calendar.google.com&ctz=America%2FNew_York" style="border: 0" width="800" height="600"></iframe>

		<br>
		<br>
		<br>

		<h1 id="bookings">Bookings</h1>

		<form action="Set_booking.php" method="post">
			<fieldset>
				<legend>Schedule an Event Here</legend>

				<strong>Name: </strong><input type="text" name="name" size="16" />

				<br><br>

				<strong>Name of Event: </strong><input type="text" name="event" size="16" />

				<br><br>

				<strong>Type of Event: </strong><select name="type">
				<option selected="selected">Charity Event</option>
				<option>Wedding</option>
				<option>Party</option></select>

				<br><br>

				<strong>Date of Event (MM/DD/YYYY): </strong><input type="text" name="date" size="24" />
		
				<br><br>

				<strong>Description of Event: </strong><textarea rows = "4" cols = "50" name="description"></textarea>
			
				<br><br>
                        
				<input type="submit" value="Schedule Booking">
			</fieldset>
		</form>

		<br>
		<br>
		<br>

		<form action="Confirmed_bookings.php" method="get">
			<fieldset>
				<legend>Check Booking Here</legend>

				<strong>Confirmation Number: </strong><input type="text" name="confirmationnumber" size="16"/>

				<br><br>
                        
				<input type="submit" value="Check Booking">
			</fieldset>
		</form>

		<br>
		<br>
		<br>
	</div>
		
<?php include("bottom.html"); ?>
