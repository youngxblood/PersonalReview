<?php
ob_start();
session_start();
include 'inc/functions.php';
require_once 'dbconnect.php';


// Redirects to home.php page if the user's session is active
if ( isset($_SESSION['user']) !="" ) {
  header( "Location: home.php" );
  exit;
}

// Variable used to determine whether the action is successful or not
$error = false;

if( isset( $_POST['btn-login'] ) ) {
  $email = sanitize( $_POST['email'] );
  $pass = sanitize( $_POST['pass'] );


if( empty($email) ) {
  $error = true;
  $emailError = "Please enter your email address.";
} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter a valid email address.";
}

if ( empty($pass) ) {
  $error = true;
  $passError = "Please enter your password.";
}

if (!error) {
  $password = hash( 'sha256', $pass );
  $res = $conn->query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
  $row = mysqli_fetch_array($res);
}

if ( $count == 1 && $row['userPass'] == $password ) {
  $_SESSION['user'] = $row['userId'];
  header( "Location: home.php" );
} else {
  $errMSG = "Incorrect credentials, try again.";
}
}
