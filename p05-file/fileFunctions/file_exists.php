<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $file = null;
        // if form has not yet been submitted
        // display input box
        if (!isset($_POST['file'])) {
            ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Enter file path <input type="text" name="file">
            <input type="submit" value="GO">
        </form>

        <?php
        } else { // else process form input
            $file = $_POST['file'];
            echo 'File name: <b>'.$file.'</b><br/>';
            // check if file exists
            // display appropriate message
            if(file_exists($_POST['file'])) {
                echo 'File exists!<br/>';
                
            } else {
                echo 'File does not exist!<br />';
            }
        }
        ?>

    </body>
</html>
