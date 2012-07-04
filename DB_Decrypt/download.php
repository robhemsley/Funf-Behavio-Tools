<?php

$file = $_GET['file'];
header('Content-Description: File Transfer');
header("Content-type:  application/octet-stream");
header("Content-disposition: attachment; filename= ".$file."");
readfile('upload/'.$file);

unlink('upload/'.$file);
?>