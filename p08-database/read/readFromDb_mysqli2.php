<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // using mysqli extension, need to install mysqli extension!

        // set database server access variables:
        $server = 'localhost';
        $db = 'testdb';
        $username = 'root';
        $password = '12345';

        // create mysqli object
        // open connection
        $mysqli = new mysqli($server, $username, $password, $db);

        // check for connection errors
        if(mysqli_connect_errno()) {
            die('Unable to connect!');
        }

        // creat query
        $query = 'select * from symbols';

        // execute query
        if(($result = $mysqli->query($query)) == true) {
        // see if any rows were returned
            if($result->num_rows > 0) {
            // yes, print result out
                echo "<table cellpadding=10 border=1>";
                while($row = $result->fetch_array()) {
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
            // no, print status message
                echo 'No rows found!';
            }

            // free result set memory
            mysqli_free_result($result);
        } else {
        // print error message
            echo "Error in query: $query. ".$mysqli->error;
        }

        // close connection
        mysqli_close($connection);

        ?>
    </body>
</html>
