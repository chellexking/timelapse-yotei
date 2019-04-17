<?php
$dir = "48hr";
$files = scandir($dir, SCANDIR_SORT_DESCENDING);
$latestImg = $files[0];
// $filecount = count($files);

$filecount = count($files)-2;
// echo "Number of files is $filecount";

$half_filecount = (count($files)-2) /2;
// echo nl2br("\n Half of the files is $half_filecount");


?>
