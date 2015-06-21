<?php

// In order to write and read and exuctue file the web server needs to have
// access to them. Either I need to change to file permissions to be wide open
// to other by sudo chmod 777 or I need to in the terminal change the owner of
// the file to www-data which is the name of the apache2 web server
$file = 'filetest.txt';
$handle = fopen($file, 'w'); //

fclose($handle);
?>