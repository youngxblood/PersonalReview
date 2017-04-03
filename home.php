<?php $pageTitle = "Home";
$section = 'home';
include "inc/header.php";
include "inc/linkstyler.php";
include_once "inc/dbconnect.php";
include "inc/sqltableinit.php";
?>

<div class="content">
    <div id="wrapper" class="content-inside">
        <h2>Register below:</h2>
        <br/>


        <form action="/model/register.php" method="post">
            Full name: <input type="text" name="name"><br>
            Password: <input type="text" name="pass"><br>
            Email: <input type="text" name="email"><br>
            <input type="submit" name="btn-signup">
        </form>



    </div>
</div>


<?php
    // <?php echo htmlspecialchars('register.php'); // PARKING HERE TEMPORARILY
include "inc/footer.php"
?>
