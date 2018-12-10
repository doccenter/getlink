<?php
$id = $_GET['id'];
$details = json_decode(file_get_contents("http://demo.filedeo.stream/drive/json.php?url=https://drive.google.com/file/d/1U-dBNjsDcAoHL-FFlMpO5ON3NMmUirlj/view"));

echo '{"id":"' . $details->id . '","title":"' . $details->title . '","image":"' . $details->image . '","label":"' . $details->label . '","file":"' . $details->file . '","type":"' . $details->type . '","embed_id":"' . $details->embed_id . '"}';