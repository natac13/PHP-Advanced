<!DOCTYPE html>
<html>
<head>
    <title>Variable Scope</title>
</head>
<body>
<?php
    $var = 1;
    function test1() {
        $var = 2;
        echo $var . "<br>";
    }

    test1();
    echo $var . "<br>";
    echo "<hr>";

    function test2() {
        global $var;
        $var = 2;
        echo $var . "<br>";
    }

    test2();
    echo $var . "<br>";
    echo "<hr>";

    function test3() {
        // static will keep this variable in the function updating
        // meaning if the function is called repeatedly then it will continue
        // to increment
        // without the static keyword then each time the function is called
        // the $var is reset back to 2 in this case
        static $var = 2;
        echo $var . "<br>";
        $var++;
    }

    test3();
    test3();
    test3();
    test3();
    echo $var . "<br>";


 ?>
</body>
</html>