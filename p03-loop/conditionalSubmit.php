<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php $phpSelf = $_SERVER['PHP_SELF']; ?>

        <?php
        /*
         * if the "submit" variable does not exist, the form has not been
         * ssubmitted - display initial page 
         */
        if(!isset($_POST['submit'])) {
            ?>

        <form action="<?php echo $phpSelf; ?>" method="post">
            Enter your age: <input name="age" size="2">
            <input type="submit" name="submit" value="Go">
        </form>

        <?php
        } else {
        /*
         * if the "submit" variable exists, the form has been submitted -
         * look for and process form data 
         */
        // display result
            $age = $_POST['age'];
            if ($age > 20) {
                echo 'Come on in, we have alcohol and music awaiting you!';
            } else {
                echo 'You\'re too young for this club, come back when you\'re a little older';
            }
        }
        ?>

    </body>
</html>
