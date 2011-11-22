<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        // set database server access variables:
        $server = 'localhost';
        $db = 'testdb';
        $username = 'root';
        $password = '12345';

        // open connection
        $connection = mysql_connect($server, $username, $password) or die('Unable to connect!');

        // select database
        mysql_select_db($db);

        // creat query
        $query = 'select * from symbols';

        // execute query
        $result = mysql_query($query) or die("Error in query: $query".mysql_error());

        // see if any rows were returned
        if(mysql_num_rows($result) > 0) {
        // yes, print result out
            echo "<table cellpadding=10 border=1>";
            while($row = mysql_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['country']."</td>";
                echo "<td>".$row['animal']."</td>";
                echo "</tr>"; 
            }
            echo "</table>";
        } else {
            // no, print status message
            echo 'No rows found!';
        }

        // free result set memory
        mysql_free_result($result);

        // close connection
        mysql_close($connection);

        ?>
    </body>
</html>
