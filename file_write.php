<?php

// In order to write and read and exuctue file the web server needs to have
// access to them. Either I need to change to file permissions to be wide open
// to other by sudo chmod 777 or I need to in the terminal change the owner of
// the file to www-data which is the name of the apache2 web server
$file = 'filetest.txt';

/**
 * When writing to a file the quotes used on the string matters, well it will
 * matter in more cases as well. If the string is surrounded by single quotes,
 * any escape character like \n or \t will be taken as literal, meaning they
 * will not do what I want them to do. In order to get the functionality out
 * of the escape characters I need to use double quotes around strings.
 */
if($handle = fopen($file, 'w')) {
    fwrite($handle, 'abc'); // returns number of bytes written or false.
    $content = "123\n456\n";
    $content2 = '123\n4456';
    fwrite($handle, $content);
    fwrite($handle, $content2);
    fclose($handle);

    // $handles do not work with chmod() just with write and close kind of
    // stuff
} else {
    echo "Could not open file for writing.";
}

// file_put_contents(): shortcut for fopen/fwrite/fclose
// overwrites the existing content in the file so BE WARNED!
$file = 'filetest.txt';
$content = "111\n222\n333\n";
if($size = file_put_contents($file, $content)) {
    echo " a file of {$size} bytes was created.";
}
?>