<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        // set up some string variables
        $a = 'the';
        $b = 'games';
        $c = 'begin';
        $d = 'now';

        // combine them using the concatenation operator
        $statement = $a.' '.$b.' '.$c.' '.$d;
        echo $statement;

        echo "<br/>";

        $str = 'the';
        $str .= 'n';

        echo "\$str: $str";
        ?>
    </body>
</html>
