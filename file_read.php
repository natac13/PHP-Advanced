<?php

$file = 'filetest.txt';
if($handle = fopen($file, 'r')) {
    $content = fread($handle, 6); // 6 is num of bytes each byte in a char.
    fclose($handle);
}

echo $content;
echo "<br>";
echo nl2br($content);
echo "<hr>";

/**
 * This is for when I do not know the length of the file, I can use filesize()
 * with the actual file var not the handle of fopen() to get the total size
 * and then read that total size.
 */
$file = 'filetest.txt';
if($handle = fopen($file, 'r')) {
    $content = fread($handle, filesize($file));
    fclose($handle);
}

echo $content;
echo "<br>";
echo nl2br($content);
echo "<hr>";

// file_get_contents() shortcut for fopen/fread/fclose
// companion of file_put_contents()
$content = file_get_contents($file);
echo nl2br($content);
echo "<hr>";

/**
 * For incremental reading I can use fgets() to read one line at a time
 * Therefore This next part will use a while loop to say while not at the
 * end of the file, that is the !feof() part
 */
$file = 'filetest.txt';
$content = "";
if($handle = fopen($file, 'r')) {
    while(!feof($handle)) {
        $content .= fgets($handle);
        echo $content;
    }
    fclose($handle);
}
?>