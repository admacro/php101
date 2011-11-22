<?php
// set file to read
$file = './test.txt' or die('Could not open file!');

// open file
$f = fopen($file, 'r') or die('Could not open file!');

// read file contents
$data = fread($f, filesize($file)) or die('Could not read file!');

// close file
fclose($file);

// print file contents
echo $data;
?>
