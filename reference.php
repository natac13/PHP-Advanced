<!DOCTYPE html>
<html>
<head>
    <title>Reference Assignment</title>
</head>
<body>
<?php
    $a = 1;
    // this is like a link or an alias since it tells the browser to look at
    // the same memory that $a is looking at for when we assign $b
    // if it was just $b = $a then it would happen only once and therefore $b
    // would not 'update' if the value of $a was changed

    $b =& $a;
    echo "a:{$a} / b:{$b}" . "<br>";
    $a = 3;
    echo "a:{$a} / b:{$b}"; // $b changes along with $a in this case

// these are good to use as disposable type things
// like deleting a shortcut but not removing the program

 ?>
</body>
</html>