<?php

/**
 * Like fopen/fread/fclose
 * opendir()
 * readdir()
 * closedir()
 */

$dir = ".";
if(is_dir($dir)) {
    if($dir_handle = opendir($dir)) {
        // readdir() is working just like fgets() to read line by line. This
        // will read file by file in the directory. So while I can assign
        // something to a var $filename then echo it out.
        while($filename = readdir($dir_handle)) {
            echo "Filename: {$filename}<br>";
        }
        closedir($dir_handle);
    }
}

/**
 * Much better way with scandir(): it will read all the files into an array
 * Not really shorter but it is better to have everything stored as an array,
 * therefore I can do what I want with it.
 */

if(is_dir($dir)) {
    $dir_array = scandir($dir);
    foreach ($dir_array as $file) {
        echo "Filename: {$file}<br>";
    }
}
?>