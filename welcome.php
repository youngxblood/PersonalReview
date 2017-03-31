<?php $pageTitle = "Request Page";
include "inc/header.php";
include "inc/linkstyler.php";
?>

<?php

include_once "inc/connection.php";

$sql =  mysql_query("INSERT INTO users (userId, userName, userEmail, userPass)
  VALUES ('$fname', '$lname', '$email')");



  ?>
  <div id="wrapper">
    <h3>Thank you for loggin in, <?php echo $_POST['fname']?>.</h3>
  </div>
</body>
</html>

<?php
include "inc/connection.php";
    // $sql = "SELECT * FROM users";
$conn->query($sql);
include "inc/footer.php"
?>
