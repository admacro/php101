<?php
// set file to read
$file = './test.txt' or die('Could not open file!');

// read file into string
$data = file_get_contents($file) or die('Could not read file!');

// print file contents
echo $data;
?>
