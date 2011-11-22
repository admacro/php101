<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // set path of database file
        $dbPath = './db/test.db';

        // open db
        $handle = sqlite3_open($dbPath) or die ('Could not open database!');

        // sql
        $query = 'select * from books';

        // execute query
        $result = sqlite3_query($query, $handle)
            or die ('Error in query: '.sqlite_error_string(sqlite_last_error($handle)));

        if (sqlite_num_rows() > 0) {
            echo "<table cellpadding=10 border=1>";
            while($row = sqlite3_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        // all done
        // close database file
        sqlite_close($handle);
        
        ?>
    </body>
</html>
