<?php

$nameDirectory = $_REQUEST["foldername"];


$root = './root/'. $nameDirectory;
$documents = './root/documents/' . $nameDirectory;
$images = './root/images/nuevo' . $nameDirectory;
$audioVideo = './root/audio-video/nuevo' . $nameDirectory;
$trash = './root/trash/nuevo' . $nameDirectory;


$old_umask = umask(0);

mkdir($root, 0777, false);
echo json_encode([
    "ok" => true,
    "path" => $root,
    "name" => $nameDirectory
])








/*
if (!file_exists($root)) {
    mkdir($root, 0777, true);
    echo "está creada";
}
*/

?>