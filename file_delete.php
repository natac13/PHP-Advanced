<?php

// In order to delete a file there are 2 things to keep in mind
// 1. The file must be closed first by fclose()
// 2. Must have write permission on the folder which contains the file

// Delete files carefully with:
// same kind of thing as unset() for variables.
unlink("filetest.txt");
?>