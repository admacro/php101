<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        // define a global variable in the main program
        $today = 'Monday';

        // define a function
        function getDay() {
            // define a local variable inside the function
            $today = 'Tuesday';
            echo "It's $today inside the function.";
        }
        
        getDay();
        echo '<br/>';
        echo "It's $today outside the function.";
        
        ?>
    </body>
</html>
