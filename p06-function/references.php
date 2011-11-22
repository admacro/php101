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
        
        function setDay(&$day) {
            $day = 'Sunday';
            echo "It's $day inside the function.<br/>";
        }

        echo "Before: It's $today outside the function.<br/>";
        
        // after calling the function
        setDay($today);
        echo "After: It's $today outside the function.<br/>";

        ?>
    </body>
</html>
