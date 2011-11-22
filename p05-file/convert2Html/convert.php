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
        // read recipe file into array
        $data = file('src.txt') or die('Could no read file!');

        echo '<br/>-------------- Original content ------------------<br/>';
        /* iterate over content and print it */
        foreach($data as $line) {
            echo $line;
        }

        echo '<br/>-------------- Converted HTML content ------------------<br/>';

        /* iterate over content and print it */
        foreach($data as $line) {
            echo nl2br($line);
        }
        ?>
    </body>
</html>
