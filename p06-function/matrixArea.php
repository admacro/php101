<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function getMatrixArea($a, $b) {
            return $a * $b;
        }

        $isSubmitted = isset($_POST['a']) || isset($_POST['b']);

        if($isSubmitted) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $area = getMatrixArea($a, $b);
        }

        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Enter two edges: <br/>
            a: <input name="a" type="text" value="<?php echo ($isSubmitted ? $a : '') ?>"/><br/>
            b: <input name="b" type="text" value="<?php echo ($isSubmitted ? $b : '') ?>"/><input type="submit" value="OK" />
        </form>

        <?php
        if($isSubmitted) {
            echo '<br/>Matrix area = '.$a.' * '.$b.' = '.sprintf('%4.3f', $area);
        }
        ?>

    </body>
</html>