<?php
$id = $_GET['id'];
$details = json_decode(file_get_contents("http://demo.filedeo.stream/drive/json.php?url=" . $id));

echo '{"id":"' . $details->id . '","title":"' . $details->title . '","image":"' . $details->image . '","label":"' . $details->label . '","file":"' . $details->file . '","type":"' . $details->type . '","embed_id":"' . $details->embed_id . '"}';