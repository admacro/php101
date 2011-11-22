<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        // define a global variable
        $today = 'Monday';
        
        function getDay() {
            global $today;
            $today = 'Sunday';
            echo "Function: It's $today inside the function.<br/>";
        }

        // before
        echo "Before: It's $today outside the function.<br/>";
        
        // after
        getDay();
        echo "After: It's $today outside the function.<br/>";


        ?>
    </body>
</html>
