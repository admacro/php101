<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function getSessionAttribute($key) {
            return $_SESSION[$key];
        }

        function setSessionAttribute($key, $value) {
            $_SESSION[$key] = $value;
        }

        // initialize a session
        session_start();

        $counter = getSessionAttribute('counter');
        $counter++;
        setSessionAttribute('counter', $counter);

        echo "You have visited this page $counter times.";
        
        ?>
    </body>
</html>
