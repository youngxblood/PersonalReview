<?php

ob_start();
session_start();
include 'inc/functions.php';
require_once 'inc/dbconnect.php';


// Redirects to home.php page if the user's session is active
if ( isset($_SESSION['user']) !="" ) {
  header( "Location: home.php" );
  exit;
}

// Variable used to determine whether the action is successful or not
$error = false;
$row = 0;

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

  if ($error == false) {
    $password = hash( 'sha256', $pass );

    $query = $conn->query("SELECT userEmail FROM users WHERE userEmail='$email'");
    $rowId = $query->num_rows;

    $dbPassword = $conn->query("SELECT userPass FROM users WHERE userPass='$password'");


    if ($rowId != 0 && $password == $dbPassword) {
      $_SESSION['user'] = $rowId;
      header( "Location: home.php" );
      echo $_SESSION['user'];
    } else {
      $errorMsg = "Incorrect credentials. Please try again.";
    }

    if ( isset($rowId) ) {
      echo $rowId;
    }

  }
}
