<!DOCTYPE html>


<html lang="en">
<head>
    <title>Server Variables</title>
<body>
<?php
    $indicesServer = array("PHP_SELF",
                           "SERVER_ADDR",
                           "SERVER_NAME",
                           "SERVER_PORT",
                           "PHP_SELF",
                           "REQUEST_METHOD",
                           "REQUEST_URI",
                           "REQUEST_TIME",
                           "HTTP_USER_AGENT",
                           "HTTP_REFERER",
                           "QUERY_STRING",
                           "DOCUMENT_ROOT",
                           "REMOTE_ADDR",
                           "REMOTE_HOST",
                           "SERVER_PORT",
                           "REMOTE_PORT",
                           "REMOTE_USER",
                           "SCRIPT_FILENAME",
                           "SCRIPT_NAME");
    echo "<table cellpadding=\"10\">";
    foreach ($indicesServer as $item) {
        if (isset($_SERVER[$item])) {
            echo "<tr><td>" . $item . "</td><td>" . $_SERVER[$item] . "</td></tr>";
        } else {
            echo "<tr><td>" . $item . "</td><td>-</td></tr>";
        }
    }
    echo "</table>";
    ?>


</body>




</html>

