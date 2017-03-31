<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $pageTitle; ?></title> <!-- VARIABLE $pageTitle DECLARED AT THE TOP OF EACH PAGE -->

</head>
<body>
<header>
<span class="date"> <?php echo date("l, j, F") ?> </span>
<div class="col-lg-8 col-md-8 col-sm-8">
<h1>LOGGY: <small>WEEKLY PERSONAL UPDATES</small></h1><br>

</div>
</header>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">


    <ul class="nav navbar-nav">
      <li><a href="index.php?cat=home" class="<?php if ($section == "home") {
            echo "on";
        } ?>">HOME</a></li>
         <li><a href="about.php?cat=about" class="<?php if ($section == "about") {
            echo "on";
        } ?>">ABOUT</a></li>
        <li><a href="logs.php?cat=logs" class="<?php if ($section == "logs") {
            echo "on";
        } ?>">LOGS</a></li>
        <li><a href="userfeedback.php?cat=feedback" class="<?php if ($section == "feedback") {
            echo "on";
        } ?>">FEEDBACK</a></li>
        <li><a href="bootstrap.php?cat=bootstrap" class="<?php if ($section == "bootstrap") {
            echo "on";
        } ?>">BOOTSTRAP</a></li>
        <li><a href="register.php">REGISTER</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
