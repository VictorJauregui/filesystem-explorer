<?php

$nameDirectory = $_REQUEST["name-directory"];


$root = './root/'. $nameDirectory;
$documents = './root/documents/' . $nameDirectory;
$images = './root/images/nuevo' . $nameDirectory;
$audioVideo = './root/audio-video/nuevo' . $nameDirectory;
$trash = './root/trash/nuevo' . $nameDirectory;

if (!file_exists($documents)) {
    mkdir($documents, 0777, true);
    echo "está creada";
}


?>