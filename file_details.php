<?php
$filename = 'filetest.txt';

echo filesize($filename) . "<br>"; // in bytes

// filemtime: last modified (changed content)
// filectime: last changed (changed content OR metadata)
// fileatime: last accessed (any read or change)
/**
 * Recall this will take a unix timestamp and turn it into a string
 */
echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br>";
echo strftime('%m/%d/%Y %H:%M', filectime($filename)) . "<br>";
echo strftime('%m/%d/%Y %H:%M', fileatime($filename)) . "<br>";

/**
 * This will set all of them to the current time.
 */
touch($filename);
echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br>";
echo strftime('%m/%d/%Y %R', filectime($filename)) . "<br>";
echo strftime('%m/%d/%Y %H:%M', fileatime($filename)) . "<br>";


// I can return just one with the optional parameter and constant
// can read about that in the docs.
$path_parts = pathinfo(__FILE__);
echo $path_parts['dirname'] . "<br>"; // /var/www/sand/phpadvanced
echo $path_parts['basename'] . "<br>"; // file_details.php
echo $path_parts['filename'] . "<br>"; // file_detials (new php 5.2)
echo $path_parts['extension'] . "<br>"; // php

$path_parts = pathinfo("/var/www/sandbox/photo_gallery/public/index.php");
echo $path_parts['dirname'] . "<br>"; // /var/www/sand/phpadvanced
echo $path_parts['basename'] . "<br>"; // file_details.php
echo $path_parts['filename'] . "<br>"; // file_detials (new php 5.2)
echo $path_parts['extension'] . "<br>"; // php
?>