<?php
ob_start();
$path=$_REQUEST['path'];
 $filePath =$path;
    if(file_exists($filePath)) {
        $fileName = basename($filePath);
        $fileSize = filesize($filePath);

        // Output headers.
        header("Cache-Control: private");
        header("Content-Type: application/stream");
        header("Content-Length: ".$fileSize);
        header("Content-Disposition: attachment; filename=".$fileName);

        // Output file.
        readfile ($filePath);                   
        exit();
    }
    else {
        die('The provided file path is not valid.');
	}
	header("location:admin_index.php?a=display_down");
?>