<!DOCTYPE html>


<html lang="en">
<head>
    <title>Date and Times: Formatting</title>
<body>
<?php
    $timestamp = time();
    echo strftime("The date today is %m/%d/%y", $timestamp);
    echo "<br/>";


// The reason behind this function is so that I may use the strftime()
// over date(). Since strftime() does not have a special character which
// will display the day and month without leading zeros, I have to write a
// function to get that same usability.
// Therefore in any project the deals with date I should be implementing a
// function VERY similar to this one!!


    function strip_zero_from_date( $marked_string="" ) {
        // remove the marked zeros
        $no_zeros = str_replace("*0", "", $marked_string);
        // removed any remaining marks
        $cleaned_string = str_replace("*", '', $no_zeros);
        return $cleaned_string;
    }



    // the * is mearly a marker character which could have been anything
    echo strip_zero_from_date(strftime("The date today is *%m/*%d/%y",
                                       $timestamp));

    echo "<hr>";


// For MySQL the format that it wants to see for a date time stamp is as
// follows
// $Y = year
// $m = month
// $d = day
// $H = 24 hour clock
// $M = Minutes
// $S = Seconds

    $dt = time();
    $mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);
    echo $mysql_datetime;





?>


</body>




</html>

