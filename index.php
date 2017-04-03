<?php

$pageTitle = "Home";
$section = 'home';
include "model/login.php";
include "model/register.php";
include "inc/header.php";
?>

<div class="content">
	<div id="wrapper" class="content-inside">

		<form action="" method="post">
      <label for="email">Email: </label>
      <input type="text" name="email">
      <label for="pass">Password: </label>
      <input type="text" name="pass">
      <input type="submit" name="btn-login">


  <?php

  if (isset($_SESSION['user']))

  ?>


    </div>
  </div>


  <?php
  include "inc/footer.php";
  ob_end_flush();
  ?>
