<?php
$pageTitle = "Home";
$section = 'home';
include "inc/login.php";
include "inc/header.php";
?>

<div class="content">
	<div id="wrapper" class="content-inside">
		<p>paragraph.</p>
	</div>
</div>


<?php
    // <?php echo htmlspecialchars('register.php'); // PARKING HERE TEMPORARILY
include "inc/footer.php"
?>
<?php ob_end_flush(); ?>
