<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
</head>
<body>


<?php
/**
 * The maximum file size (in bytes) must be declared before the file input
 * field and cannot be larger than the etc/php5/apache2/php.ini setting for
 * upload_max_filesize
 *
 * This form value can be hacked. I really am relying on the php.ini file to
 * control the absolute file size.
 *
 * Think of it as a polite declaraction:
 *
 * 1 megabyte = 1,084,576 bytes but I am rounding for ease.
 */


if(isset($_POST['submit'])) {
    // process the form!!!
}
?>

<?php if(!empty($message)) { echo "<p>{$message}</p>";} ?>

<form action="upload.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <input type="file" name="file_upload" value="" placeholder="">
    <input type="submit" name="submit" value="Upload">
</form>
</body>
</html>