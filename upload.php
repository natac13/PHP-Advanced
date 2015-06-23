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

$upload_errors = array(
    UPLOAD_ERR_OK    => "No errors.",
    UPLOAD_ERR_INI_SIZE => "Larger then upload_max_filesize.",
    UPLOAD_ERR_FORM_SIZE => "Larger than form MAX_FILE_SIZE.",
    UPLOAD_ERR_PARTIAL => "Partial Upload.",
    UPLOAD_ERR_NO_FILE => "No file.",
    UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
    UPLOAD_ERR_CANT_WRITE => "Cannot write to the disk.",
    UPLOAD_ERR_EXTENSION => "File upload stopped by extension."
    );




if(isset($_POST['submit'])) {
    // process the form!!!
    // for demo I am just outputting some info about the file that would be
    // uploaded
    echo "<pre>";
    print_r($_FILES['file_upload']);
    echo "</pre>";
    echo "<hr>";
    // this will return JUST the name at the end of the absolute path.

/**
 * This will return the tmp name of the file which is stored in tmp directory.
 */
    $tmp_file = $_FILES['file_upload']['tmp_name'];
    $target_file = basename($_FILES['file_upload']['name']);
    $upload_dir = "uploads"; // at same level in parent dir as this file
    // file_put_contents($tmp_file, "check, check");

    // May want to check if file with that name exist already before trying
    // to safe it. file_exist()
    // Can also can for any errors before moving on. ie partial upload.

/**
 * Which file from the tmp directory to move and 2nd argument is what the new
 * path name will be.
 * Will return false if it is an invaild upload or the file cannot be moved
 * for any other reason. Meaning this is a great place to use if()
 * Only in the same parent directory because I am demoing this.
 * In reality I would upload from my home pc and website is hosted somewhere
 * else.
 */
    if(move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file)) {
        // do something
        $message = "File upload successful.";
    } else {
        $error = $_FILES['file_upload']['error'];
        $message = $upload_errors[$error];
    }

}
?>

<?php if(!empty($message)) { echo "<p>{$message}</p>";} ?>

<form action="upload.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <input type="file" name="file_upload" value="upload_file">
    <input type="submit" name="submit" value="Upload">
</form>

