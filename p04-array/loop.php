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

        My favourite bands are:
        <ul>

        <?php

        // define array
        $artists = array('Metallica', 'Evanescence', 'Linkin Park', 'Guns n Roses');

        // loop over it and print array elements
        for ($i = 0; $i < sizeof($artists); $i++) {
            echo '<li>'.$artists[$i];
        }

        ?>

        </ul>
    </body>
</html>
