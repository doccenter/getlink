<?php
$id = $_GET['id'];
$details = json_decode(file_get_contents("http://demo.filedeo.stream/drive/json.php?url=https://drive.google.com/file/d/1U-dBNjsDcAoHL-FFlMpO5ON3NMmUirlj/view"));
var_dump($details);