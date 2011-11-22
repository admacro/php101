<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $str = '10';
        $int1 = 10;
        $int2 = 10;

        $result = ($str == $int);
        echo "result is $result<br/>";

        $result = ($str === $int);
        echo "result is $result<br/>";

        $testFalse = false;
        $testTrue = true;

        echo "$testFalse<br/>";
        echo "$testTrue<br/>";

        if ($testFalse == false) {
            echo "\$testFalse = FALSE<br/>";
        }
        if ($testTrue == true) {
            echo "\$testTrue = TRUE";
        }
        
        ?>
    </body>
</html>