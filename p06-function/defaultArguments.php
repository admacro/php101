<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // define a function
        function introduce($name='James Ni', $place='China') {
            echo "Hi everyone, I'm $name from $place.<br/>";
        }

        // call function
        introduce();
        introduce('Xiaoqing Ni');
        introduce('James Bond', 'England');
        ?>
    </body>
</html>
