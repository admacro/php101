<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // define a function
        function someFunc() {
            $args = func_get_args();

            // print out the args
            foreach($args as $arg) {
                echo "$arg ";
            }
            echo "<br/>";
        }

        // call function with different arguments
        $numbers = array(1, 2, 3, 4, 5);
        someFunc('a', 'b', 'c');
        someFunc(1, 'x');
        someFunc($numbers);
        someFunc(1, true); // out put "1 1 "

        ?>
    </body>
</html>
