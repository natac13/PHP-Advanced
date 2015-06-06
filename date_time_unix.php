<!DOCTYPE html>


<html lang="en">
<head>
    <title>Date and Times: Unix</title>
<body>
<?php
    echo time();
    echo "<br>";
    echo mktime(2, 30, 45, 10, 1, 2009);
    echo "<br>";


    // check date()
    echo checkdate(12, 31, 2000) ? "true" : "false";
    echo '<br>';
    echo checkdate(2, 31, 2000) ? 'ture' : 'false';
    echo "<br>";
    $unix_timestamp = strtotime("September 15, 2004");
    echo $unix_timestamp . "<br>";
    echo "<br>";
    $unix_timestamp = strtotime("last monday");
    echo $unix_timestamp . "<br>";




?>


</body>




</html>

