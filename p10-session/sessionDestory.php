<?php

session_start();

echo "I'm tracking you with session id '".session_id()."'";

session_destroy();

echo '<br/>';

session_start();

echo "I'm tracking you with another session id '".session_id()."'";

?>
