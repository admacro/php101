<?php
// set file to read
$file = './test.txt' or die('Could not open file!');

// read file contents into array
$data = file($file) or die('Could not read file!');

// loop through array and print each line
foreach($data as $line) {
    echo $line;
}

?>
