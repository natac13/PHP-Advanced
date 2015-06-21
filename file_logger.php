<?php

require_once('log.class.php');

$log = new Log();
$log->write("test.txt", "JOE JOE JOE");
echo "<pre>";
echo $log->read('test.txt');
echo "</pre>";

?>