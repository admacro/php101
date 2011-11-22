<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        if (!isset($_POST['submit'])) {
        // form not submitted
            ?>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            ID: <input type="text" name="id">
            <input type="submit" name="submit">
        </form>

        <?php

        } else {
        // form submitted
        // process form

        // set database server access variables:
            $server = 'localhost';
            $db = 'testdb';
            $username = 'root';
            $password = '12345';

            // get form input
            // check to make sure it's all there
            // escape input values for greater safety
            $id = empty ($_POST['id']) ? die ("ERROR: Enter an id") : mysql_escape_string($_POST['id']);
            

            // open connection
            $connection = mysql_connect($server, $username, $password) or die('Unable to connect!');

            // select database
            mysql_select_db($db);

            // create query
            $query = "delete from symbols where id = $id";

            // execute query
            $result = mysql_query($query) or die("Error in query: $query".mysql_error());

            // print message with ID of inserted record
            echo "Record deleted with ID ".$id;
        }

        // close connection
        mysql_close($connection);

        ?>
    </body>
</html>
