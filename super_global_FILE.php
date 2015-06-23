<?php

/**
 * The super global _FILES will contain any upoaded files with the post
 * request meaning they are not part of the $_POST global.
 *
 * Therefore to get back info about a file that was uploaded I use
 * $_FILES['(name=? from form)'] in the case with upload.php it is file_upload
 * The info in the assocative array can be obtained by
 * 'name' for og file name
 * 'type' for mime type("image/gif")
 * 'size' for size in bytes
 * 'tmp_name' for tmp file name on server
 * 'error' for error code
 * example $_FILES['postName']['tmp_name']
 */
?>