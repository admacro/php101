<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        // open db
        $db = new SQLiteDatabase('sqlite:test.db');
        
        // sql
        $result = $db->query("select * from books");

        if ($result->numRows() > 0) {
            echo "<table cellpadding=10 border=1>";
            while($row = $sqlite_fetch_array($result)) {
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
