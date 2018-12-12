<?php
$id = $_GET['id'];
$details = json_decode(file_get_contents("http://demo.filedeo.stream/drive/json.php?url=".$id));
echo $details->file;
