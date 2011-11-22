<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        // define an array
        $cars = array('BMW', 'Benz', 'Audi', 'Toyota');
        print_r($cars);

        echo '<br/><br/>';

        // add an element to the end 
        array_push($cars, 'Honda');
        echo 'Add an element to the end:<br/>';
        print_r($cars);

        echo '<br/><br/>';

        // take an element off the top
        array_shift($cars);
        echo 'Take an element off the top:<br/>';
        print_r($cars);

        echo '<br/><br/>';

        // remove an element from the end
        array_pop($cars);
        echo 'Remove an element from the end:<br/>';
        print_r($cars);

        echo '<br/><br/>';

        // add an element to the beginning
        array_unshift($cars, 'Ford');
        echo 'Add an element to the beginning:<br/>';
        print_r($cars);

        echo '<br/><br/>';

        ?>
    </body>
</html>
