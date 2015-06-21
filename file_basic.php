<?php

echo __FILE__ . "<br>";
/**
 * Must be careful with __LINE__ since with include files the line number may
 * not be what I expect. Think about the layout files and how they would
 * affect the line number.
 */
echo __LINE__ . "<br>";
echo dirname(__FILE__) . "<br>"; //prior to 5.3
echo __DIR__ . "<br>"; // only 5.3 and up

echo file_exists(__FILE__) ? 'yes' : 'no'; // yes
echo "<br>";
echo file_exists(__DIR__ . "/basic.php") ? 'yes' : 'no'; // yes
echo "<br>";
echo is_file(__Dir__) ? 'yes' : 'no'; // no
echo "<br>";
echo is_file(__DIR__ . "/basic.php") ? 'yes' : 'no'; // yes
echo "<br>";
echo is_dir(__Dir__) ? 'yes' : 'no'; // yes
echo "<br>";
echo is_dir(__DIR__ . "/basic.php") ? 'yes' : 'no'; // no
echo "<br>";

/**
 * file_exists() works with both file and folders
 * Really it is asking does 'this' part of the file system exist?
 * So to find out if something is a file I need to use is_file()
 */

/**
 * These are the fundamental functions and constants when working with the
 * file system.
 * Before writing a file I will want to check if that file exists or before
 * moving files to a new directory make sure it really is a directory and not
 * a file. Check a file before reading it.
 */

?>