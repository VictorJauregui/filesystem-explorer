<?php

$nameDirectory = $_REQUEST["name-directory"];


$root = './root/'. $nameDirectory;
$documents = './root/documents/'. $nameDirectory;
$images = './root/images/nuevo';
$audioVideo = './root/audio-video/nuevo';
$trash = './root/trash/nuevo';

if (!file_exists($documents)) {
    mkdir($documents, 0777, true);
    echo "está creada";
}


?>