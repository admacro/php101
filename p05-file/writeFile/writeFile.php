<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // set file to write
        $file = 'test.txt';

        // open file
        $f = fopen($file, 'w') or die('Could not open file!');

        // write to file (will create file if no exist)
        fwrite($f, 'Look, Ma, I wrote a file!') or die('Could not write to file!');

        // close file
        fclose($file);
        
        ?>
    </body>
</html>
