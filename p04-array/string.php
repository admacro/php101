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

        // define CSV string
        $str = 'red, green, yellow, blue';

        // split into individual words
        $colors = explode(',', $str);

        print_r($colors);

        echo '<br/>';

        // join into single string with 'and'
        $str = implode(' and ', $colors);

        print $str;
        ?>
    </body>
</html>
