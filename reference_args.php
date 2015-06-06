<!DOCTYPE html>
<html>
<head>
    <title>Reference Function Arguments</title>
</head>
<body>
<?php

    // now $var in this local scope will point to the same thing as $a
    // in the global scope
    // therefore when the value of $var inside gets changed it effects the
    // memory bits that $a is pointing to... therefore when I echo $a
    // afterwards it looks at the bits of memory that got changed by
    // making a reference with $var inside the function!
    function ref_test(&$var) {
        $var = $var * 2;
    }

    $a = 10;
    ref_test($a);
    echo $a;
    // note without the & at the $var in ref_test(&$var) then when
    // I echo $a above would have been 10 instead of 20



    echo "<hr>";
    $b = 10;
    // working with global seems a lot easier and straight forward
    function ref_test2() {
        global $b;
        $b = $b * 2;
    }

    ref_test2();
    echo $b;


 ?>
</body>
</html>