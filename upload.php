
<?php
//check if a file was uploaded
if(isset($_FILES['file'])) {
    //validate file size and type
    $allowed_extensions = [".jpg", ".png", ".pdf"];
    $maxfilesize = 10 * 1024 * 1024; //10mb
    $filesize = $_FILES['file']['size'];
    $filename = $_FILES['file']['name'];
    $file_extension = $file_extension = strtolower(substr(strrchr($filename,"."),1));}