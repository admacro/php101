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
                // print file size
                echo 'File size: '.filesize($file).' bytes<br />'; ;
                // print file owner
                echo 'File owner: '.fileowner($file).'<br/>';
                // print file group
                echo 'File group: '.filegroup($file).'<br/>';
                // print file permissions
                echo 'File permissions: '.fileperms($file).'<br />';
                // print file type
                echo 'File type: '.filetype($file).'<br />';
                // print file last access time
                echo 'File last accessed on: '.date('Y-m-d', fileatime($file)).'<br />';
                // print file last modification time
                echo 'File last modified on: '.date('Y-m-d', filemtime($file)).'<br />';

                // is it a directory?
                if (is_dir($file)) {
                    echo 'File is a directory <br />';
                }
                // is it a file?
                if (is_file($file)) {
                    echo 'File is a regular file <br />';
                }
                // is it a link?
                if (is_link($file)) {
                    echo 'File is a symbolic link <br />';
                }
                // is it executable?
                if (is_executable($file)) {
                    echo 'File is executable <br />';
                }
                // is it readable?
                if (is_readable($file)) {
                    echo 'File is readable <br />';
                }
                // is it writable?
                if (is_writable($file)) {
                    echo 'File is writable <br />';
                }

            } else {
                echo 'File does not exist!<br />';
            }
        }
        ?>

    </body>
</html>
