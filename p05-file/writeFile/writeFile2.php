<?php

// set file to write
$file = 'test.txt';

// write to file
file_put_contents($file, 'Look, Ma, I wrote a file!') or die('Could not write to file');

?>
