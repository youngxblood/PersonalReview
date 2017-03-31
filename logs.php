<?php $pageTitle = "Logs";
$section = "logs";
include "inc/header.php";
include "inc/linkstyler.php";
?>
<div class="content">
    <div class="content-inside" id="wrapper">
        <h2>
            HERE WE WILL STORE THE USER'S DATA
        </h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum neque enim, tristique non pellentesque in, tincidunt in nisl. Nullam luctus sem et diam facilisis porttitor. Etiam ut lacinia leo. Proin a congue erat, ullamcorper luctus sem. Nulla facilisi. Donec sodales et lacus et congue. Nam non sapien et mi ornare suscipit rhoncus quis tortor. Sed efficitur, nibh eget ornare blandit, nibh velit pretium sem, a elementum enim sapien eget mi. Donec ultrices sodales dapibus. Donec in ex a sapien tempus blandit et at lectus. Vestibulum et ante et ex auctor dapibus. Curabitur ut dui in est hendrerit interdum sed sit amet ante.
        </p>
        <p>
            Curabitur sed fringilla massa, eget rutrum libero. Sed vitae ultricies ligula, sit amet porttitor lectus. Curabitur vitae nulla tempor, volutpat nulla sit amet, rhoncus nibh. Fusce dapibus mollis sapien sit amet pretium. Praesent vestibulum in nibh sollicitudin consectetur. Nullam dui nibh, eleifend et pretium ac, blandit sed magna. Quisque mollis sapien a magna efficitur egestas. In vitae ex metus.
        </p>
        <p>
            Curabitur suscipit consequat nisl, quis gravida augue ornare egestas. Praesent accumsan maximus euismod. Sed ipsum odio, placerat in suscipit interdum, accumsan sit amet est. Duis convallis sodales diam, et fermentum ante pulvinar ut. Aliquam ultricies tristique cursus. Praesent tempor at urna a viverra. In hac habitasse platea dictumst. Nunc porta, tellus ut tincidunt aliquam, est lacus facilisis ante, rhoncus auctor mi turpis eu lectus. Nullam eu commodo lectus. Integer non lacinia orci. Mauris lacinia purus ut ante dapibus, sed eleifend risus mollis.
        </p>
        <p>
            Integer sollicitudin efficitur tristique. Donec quis fringilla tellus, quis malesuada nibh. Vestibulum condimentum suscipit eros vel euismod. Aliquam sed tortor eu orci elementum semper ut quis lectus. Quisque suscipit quam consectetur, laoreet augue eget, congue dolor. Aenean consequat laoreet ante, venenatis mollis magna fringilla eget. Sed nec tortor interdum, malesuada metus vel, maximus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris augue massa, mattis sit amet posuere non, consequat ut arcu. Proin at dui imperdiet, consequat dolor a, luctus nisi. Vestibulum sem sapien, sodales at leo nec, tristique semper nunc.
        </p>
        <p>
            Ut id ante luctus, tristique nulla ac, varius ante. Curabitur ut ultricies risus. Aenean laoreet tellus eu tempus iaculis. Integer tincidunt lectus sed nibh consectetur lobortis. Curabitur placerat faucibus ligula condimentum lobortis. Sed commodo ligula at ipsum sollicitudin, a pulvinar arcu pretium. Phasellus sed sagittis eros, ut sodales dui. Donec sollicitudin cursus congue. Praesent et augue condimentum, tincidunt turpis at, vehicula augue. Nulla risus dui, tincidunt sit amet ligula eget, ullamcorper scelerisque arcu.
        </p>
        <form action="" method="post">
            <label for="title">
                Title:
            </label>
            <input name="posttitle" type="text">
                <label for="body">
                    Body:
                </label>
            </input>
            <textarea cols="50" placeholder="Type text here..." rows="4" name="postbody">
            </textarea>
            <input name="submit" type="submit">
            </input>
        </form>
                <!-- PHP/SQL TO INSERT FORM DATA INTO -->
        <?php
            include "inc/connection.php";
            include "inc/sqltableinit.php";
                 if ( isset($_POST['posttitle']) && isset($_POST['postbody'] ) ) {
                $logtitle = $_POST['posttitle'];
                $logbody = $_POST['postbody'];
                $success = true;
                 } else {
                $logtitle = '';
                $logbody = '';
                $success = false;
                }

                 $sql = "INSERT INTO UserNotes (log_summ, log_body)
                    VALUES ('$logtitle', '$logbody')";

                 if ($success == true) {
                 $conn->query($sql);
                 echo "New record created successfully";
        }
        ?>
    </div>
</div>

<?php include "inc/footer.php"?>

