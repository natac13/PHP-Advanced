<!DOCTYPE html>
<html>
<head>
    <title>Reference as Function Return Values</title>
</head>
<body>
<?php

    function &ref_return() {
        global $a;
        $a = $a * 2;
        return $a;
    }

    $a = 10;
    $b =& ref_return();
    // must have both & at the assignment of $b and the naming of function
    // now the returned values is not 20 but $a itself!
    // The difference is slight but without the reference it is returning the
    // value 20 and then that is assigned to $b where I want in this case for
    // the returned value to point to the same memory as $a. Therefore $a will
    // get updated when $b is later changed

    echo "a:{$a} / b:{$b}<br>";
    $b = 30;
    echo "a:{$a} / b:{$b}<br>";

    function &increment() {
        static $var = 0;
        $var++;
        return $var;
    }

    $d =& increment();  // will increment
    increment();    // will increment
    $d++;   // will increment
    // each time the same bit of memory is increment either by my function
    // or by ++ on $a
    echo "d:{$d}<br>"; // should be 3 after starting at 0


 ?>
</body>
</html>