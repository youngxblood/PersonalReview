<?php $pageTitle = "Home";
$section = 'home';
include "inc/header.php";
include "inc/linkstyler.php";
include_once "inc/connection.php";
include "inc/sqltableinit.php";
?>

<div class="content">
<div id="wrapper" class="content-inside">
    <h3>
        TESTING WRAPPERS:
    </h3>
    <br/>
    <p>
        Here I am testing my wrappers to make sure they work. I am also testing my 'p' tags and their styling.
    </p>
    <p>
        Here I am testing my wrappers to make sure they work. I am also testing my 'p' tags and their styling.
    </p>
    <p>
        Here I am testing my wrappers to make sure they work. I am also testing my 'p' tags and their styling.
    </p>
    <br/>
    <form action="register.php" method="post">
<!--         First name: <input type="text" name="fname"><br>
        Last name: <input type="text" name="lname"><br>
        E-mail: <input type="text" name="email"><br> -->
        <input type="submit" name="btn-signup">
    </form>

    <form action="register.php" method="post">
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
