<?php
echo fileowner('file_permission.php');
echo "<br>";


// fileowner() will return the owner id number which does not mean much to me
// therefore I need to pass that number to the posix_getpwuid() to get an
// array of info which one of those is the 'name'
// if I have Posix installed this will work
$owner_id = fileowner('file_permission.php');
$owner_array = posix_getpwuid($owner_id);
echo "<br>";
echo "name: " . $owner_array['name'];
echo "<br>";
echo "passwd: " . $owner_array['passwd'];
echo "<br>";
echo "uid: " . $owner_array['uid'];
echo "<br>";

// fileperms() givens an unreable version of the file permissions, therefore
// I pass it to the decoct() function to give back the 6 digit version of the
// permission (which is a decimal number to octal version). Of which I only
// care about the last 4 values of that number. Hench the subsstr() function.
//
echo substr(decoct(fileperms('file_permission.php')), 2);

chmod('file_permission.php', 0777);
echo "<br>";
echo substr(decoct(fileperms('file_permission.php')), 2);
echo '<br>';
echo is_readable('file_permission.php') ? 'yes' : 'no';
echo "<br>";
echo is_writable('file_permission.php') ? 'yes' : 'no';

?>