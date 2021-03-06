
<?php

include "inc/dbconnect.php";
include "inc/functions.php";

ob_start();
session_start();

if( isset($_SESSION['user'])!="" ){
	header("Location: home.php");
}


$error = false;


if ( isset( $_POST['name'] ) ) {

// Sanitize function from "inc/functions.php" to combat HTML/SQL injections
	$name  = sanitize( $_POST['name'] );
	$email = sanitize( $_POST['email'] );
	$pass  = sanitize( $_POST['pass'] );

}

	// NAME VALIDATION
if (empty($name)) {
	$error = true;
	$nameError = "Please enter your full name";
} else if (strlen($name) < 3) {
	$error = true;
	$nameError = "Name must have at least 3 characters";
} else if (!preg_match( "/^[a-zA-Z ]+$/", $name ) ) {
	$error = true;
	$nameError = "Name must contain alphabetical characters and white space.";
}

	// EMAIL VALIDATION
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	$error = true;
	$emailError = "Please enter a valid email address.";
} else  {

		// CHECK TO SEE IF EMAIL EXISTS IN THE TABLE
	if ( $result = $conn->query("SELECT userEmail FROM users WHERE userEmail='$email'")) {
		$count = $result->num_rows;
	}


	if ($count != 0) {
		$error = true;
		$emailError = "Email entered is already in use.";
	}
}

	// PASSWORD VALIDATION
if (empty($pass)) {
	$error = true;
	$passError = "Please enter a password.";
} else if (strlen($pass) < 6) {
	$error = true;
	$passError = "Password must have 6 characters or more.";
}

	// ENCRYPT THE PASS USING SHA256() (BUILT IN HASH FUNCTION)
$password = hash('sha256', $pass);

if ($error == false) {
	$res = $conn->query("
		INSERT INTO users(userName, userEmail, userPass)
		VALUES ('$name', '$email', '$password');");

	if ($res = 1) {
		$errType = "success";
		$errMsg = "Successfully registered, you may login now.";
		unset($name);
		unset($email);
		unset($pass);
	} else {
		$errType = "danger";
		$errMsg = "Something went wrong, try again later.";
	}
}
$pageTitle = "Register";
$section   = "bootstrap";


include "inc/header.php";
include "inc/linkstyler.php";










include "inc/footer.php";
