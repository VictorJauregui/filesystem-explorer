<?php

$name= $_FILES["file-upload"]["name"];
$content = $_FILES["file-upload"]["tmp_name"];
$archivo = "./root/images/hola.png";
$archivoName = $_REQUEST["file-upload"];

$newFileImage = "./root/images/". $archivoName;
$newFileDocument = "./root/documents/". $archivoName;




if (strpos($name, 'jpeg') || strpos($name, 'png') || strpos($name, 'svg') !== false) {
    move_uploaded_file($content,"root/images/" .$name);
    
} else if (strpos($name, 'pptx') || strpos($name, 'word') || strpos($name, 'csv') || strpos($name, 'odt') ||  strpos($name, 'pdf') || strpos($name, 'txt') || strpos($name, 'exe') || strpos($name, 'zip') || (strpos($name, 'rar') !==false)) {
    move_uploaded_file($content,"root/documents/" .$name);
    
} else if(strpos($name, 'mp3') || strpos($name, 'mp4' !== false)){
    move_uploaded_file($content,"root/audio-audio/" .$name);
}


if(file_exists($newFileImage)){
    echo "You create this file: " . date("d F Y H:i:s.", filemtime($newFileImage)). "\n";
    echo "You modifiqued last time this file: " . date("d F Y H:i:s.", filectime($newFileImage));
} else if (file_exists($newFileDocument)){
    echo "You create this file: " . date("d F Y H:i:s.", filemtime($newFileDocument)). "\n";
    echo "You modifiqued last time this file: " . date("d F Y H:i:s.", filectime($newFileDocument));
}







?>

