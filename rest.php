<?php
$id = $_GET['id'];
$details = json_decode(file_get_contents("http://demo.filedeo.stream/drive/json.php?url=https://drive.google.com/file/d/" . $id . "/view"));
echo $details->file;
