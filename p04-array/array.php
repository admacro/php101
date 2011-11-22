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

        echo '<br/>';

        $cars[4] = 'Honda';
        print_r($cars);

        echo '<br/>';

        // define an array using key
        $menu['breakfast'] = 'bacon and eggs';
        $menu['lunch'] = 'roast beef';
        $menu['dinner'] = 'lasagna';

        print_r($menu);

        $menu['dinner'] = 'steak with mashed potatoes';
        echo '<br/>';
        print_r($menu);

        echo '<br/>Keys: ';
        $keys = array_keys($menu);
        print_r($keys);

        echo '<br/>Values: ';
        $values = array_values($menu);
        print_r($values);
        
        ?>
    </body>
</html>
