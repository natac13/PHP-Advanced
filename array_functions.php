<!DOCTYPE html>


<html lang="en">
<head>
    <title>Array Functions</title>
<body>
<?php
    $numbers = array(1,2,3,4,5,6);
    print_r($numbers);
    echo "<br><br>";

    //shifts first element out of an array
    //and returns it
    //this does not have to be captured by a variable
    $a = array_shift($numbers);
    echo "a:" . $a . "<br>";

    print_r($numbers);
    echo "<br><br>";

    // prepends an element to an array
    // returns the element count in the variable $b, again this does not
    // need to be captured by a variable. I can simply use array_shift and
    // unshift on there own.
    $b = array_unshift($numbers, "first");
    echo "b:" . $b . "<br>";
    print_r($numbers);
    echo "<br><br>";

    echo "<hr>";

    // pops last element out of an array, and returns it
    $c = array_pop($numbers);
    echo "c:" . $c . "<br>";

    print_r($numbers);
    echo "<br><br>";

    // pushed an element onto the end of an array, returns the element count
    $d = array_push($numbers, 'last');
    echo "d:" . $d . "<br>";

    print_r($numbers);
    echo "<br><br>";

    // these are important since they allow me to not only take the first or
    // last item out or onto an array but it also removes that element from
    // the array.

?>


</body>




</html>

