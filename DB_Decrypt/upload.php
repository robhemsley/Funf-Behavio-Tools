<?php

$BASE_DIR = "/home/robhemsley/webapps/htdocs/mp2p/";

$pass = $_POST["pass"];
move_uploaded_file($_FILES["file"]["tmp_name"], $BASE_DIR . "upload/" . $_FILES["file"]["name"]);
$return_str = shell_exec('python2.6 '.$BASE_DIR.'dbdecrypt.py '.$BASE_DIR.'upload/'.$_FILES["file"]["name"].' -k '.$pass);

if (strpos($return_str,'Success!') !== false) {
    echo 'true';
}else{
	echo 'false';
}
?>
