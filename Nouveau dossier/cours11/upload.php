<?php
header("content-type: application/json");

$ret = false;

$extensionTab = array("jpg", "jpeg", "png", "gif", "bmp");
$mimeTab = array("image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp");

$file_extension = pathinfo($_FILES["monfichier"]["name"]);
$extensionFound = in_array(strtolower($file_extension["extension"]), $extensionTab);

$mimeType = image_type_to_mime_type(exif_imagetype($_FILES["monfichier"]["tmp_name"]));
$mimeFound = in_array($mimeType, $mimeTab);

$newName = uniqid() . "." . $file_extension["extension"];
if ($extensionFound && $mimeFound)	{	
	$ret = move_uploaded_file($_FILES["monfichier"]["tmp_name"], "img/". $newName);
}

echo json_encode($ret);
?>
