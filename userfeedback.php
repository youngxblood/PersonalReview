<?php $pageTitle = "Feedback";
$section = "feedback";
include "inc/header.php";
include "inc/linkstyler.php";
?>

<div class="content">
	<div class="content-inside" id="wrapper">

		<h2>HERE THE USER CAN SUBMIT FEEDBACK TICKETS</h2>

		<form action="acceptfeedback.php" method="post">

			<label for="feed-fname">First Name:</label>  <input type="text" id="feed-fname" name="fname"><br>

			<label for="feed-lname">Last Name:</label><input type="text" id="feed-lname" name="lname"><br>

			<label for="feed-email">Email:</label><input type="text" id="feed-email" name="email"><br>

			<label for="comment">Comment:</label><textarea rows="15" cols="80" id="comment" name="comm" placeholder="Enter text here..."></textarea><br>

			<input type="submit" value="Submit">
		</form>
		<p>Here your data will be sent to the site administrator so further action can be taken. Please leave a specific and consise report so we can further assist you!</p>

	</div>
</div>



<div>


</div>
<?php
include "inc/footer.php";
?>
