<?php include "inc/header.php";?>
<div class="content">
	<div id="wrapper" class="content-inside">
		<h2>THANK YOU FOR SENDING DATA!</h2><br>
		<p>Your first name: <?php echo $_POST['fname'];?></p><br>
		<p>Your last name: <?php echo $_POST['lname'];?></p><br>
		<p>Your email: <?php echo $_POST['email'];?></p><br>
	</div>
</div>

<div id="wrapper">

	<?php
	include "inc/connection.php";
	include "inc/sqltableinit.php";

	if ( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['comm']) ) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$comm  = $_POST['comm'];
	} else {
		$fname = '';
		$lname = '';
		$email = '';
		$comm = '';
	}

	$sql = $comm;

$message = <<<EMAIL

$comm;
EMAIL;

	mail("crazyeight68@gmail.com", "FEEDBACK: LOGS", $message, "From: test@mailtest.com");




     // if ($success == true) {
     // $conn->query($sql);
     // echo "New record created successfully";

	?>

</div>

<?php



include "inc/footer.php";
?>
