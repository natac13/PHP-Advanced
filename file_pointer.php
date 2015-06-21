<?php
$file = 'filetest.txt';
if($handle = fopen($file, 'w')) {
    fwrite($handle, "123\n456\n789\n");

    $pos = ftell($handle);
    // When I move around the pointer it will overwrite anything that was
    // there already no matter what the mode. However only works with 'r', or
    // 'w', either + or normal versions. The 'a' and 'x' don't let me move the
    // pointer around.
    fseek($handle, $pos-6);
    fwrite($handle, "abcefd");

    rewind($handle);
    fwrite($handle, "xyz");

    fclose($handle);
}
?>