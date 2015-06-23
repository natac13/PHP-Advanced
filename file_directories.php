<?php
// current working directory
echo getcwd() . "<br>";

/**
 * make a directory be aware of unmask of 0022 which is set by default by the
 * file system and it is there to take away permissions
*/
mkdir('new', 0777); // will really be sudo chmod 755 because of unmask

/**
* I think that the best way to understand umask is to say that umask is used to revoke permissions, not to set permissions.
* umask sets which permissions must be removed from the system default when you create a file or a directory.
* For example, a mask 0022 means that you don't want group and others modify the file.
*
* default 0666 rw-.rw-.rw-
* umask   0022 ---.-w-.-w-
* Final   0644 rw-.r--.r--
*
* That means that any file from now on will have 0644 permissions.
* It is important to understand that umask revokes, deletes permissions from system default, so it can´t grant permissions the system default hasn't. In the example above, with the 666 system default, there is no way you can use umask to create a file with execute permission. If you want to grant more permissions, use chmod.
* Be aware that system default permissions are not related to PHP (they depends upon server configuration). PHP has a default umask that is applied after system default base permissions. And there are different system default base permissions for files and directories.
* Usually, system default permissions for files are 666 and for directories 0777. And usually, default PHP umask is 0022
*/

//recursive directories
mkdir('new/test/test2', 0777, true);

// change dir
chdir('new');
echo getcwd() . "<br>";

// removing dir
// must be empty and closed. Not in them.
rmdir('test/test2');


?>