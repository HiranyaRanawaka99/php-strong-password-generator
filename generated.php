
<?php 

session_start();
$_SESSION['generated_password']

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include __DIR__.'/template/head.php' ?>
    </head>


    <body>
    <div class="generated-password m-5">
        Your secure password is: 
        <p class=" text-success">
            <?=  $_SESSION['generated_password']?>
        </p>
    </div>

    </body>
</html>