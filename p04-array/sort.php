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

        // define an array
        $pasta = array('spaghetti', 'penne', 'macaroni');
        print_r($pasta);

        echo '<br/>';

        // sorted alphabetically
        sort($pasta);
        print_r($pasta);

        echo '<br/>';

        // sorted alphabetically in reverse 
        rsort($pasta);
        print_r($pasta);

        ?>
    </body>
</html>
