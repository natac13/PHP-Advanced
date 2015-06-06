<!DOCTYPE html>
<html>
<head>
    <title>Variable Variables</title>
</head>
<body>
<?php
$a = "hello";
$hello = "hello everyone!";
echo $a . "<br>";
echo $hello. "<br>";
// this simply says get $a variable and then get the $x of that
// with this it is really $hello
echo $$a . "<br>";
     ?>
</body>
</html>