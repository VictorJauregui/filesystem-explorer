<?php

$name= $_FILES["file-upload"]["name"];
$content = $_FILES["file-upload"]["tmp_name"];
$size = $_FILES["file-upload"]["size"];
$archivo = "./root/images/hola.png";
$archivoName = $_REQUEST["file-upload"];

$newFileImage = "./root/images/". $archivoName;
$newFileDocument = "./root/documents/". $archivoName;
$newFileAudioVideo = "./root/trash/". $archivoName;




if (strpos($name, 'jpeg') || strpos($name, 'png') || strpos($name, 'svg') !== false) {
    
    move_uploaded_file($content,"root/" .$name);
    echo "You create this file:  " . date("d F Y H:i:s.", filemtime($newFileImage)). "<br>";
    echo "You modifiqued last time this file:  " . date("d F Y H:i:s.", filectime($newFileImage)) . "<br>";
    echo "The size of this file is:  " . $size / 100000 ."Bytes" . "<br>";
    if(strpos($name, 'png') !== false){
        echo "<img class='icon-type-documents' src='assets/icon-png.png' alt='icon png'>";
        echo 'It´s a PNG Document';
    }
    if(strpos($name, 'jpeg') !== false){
        echo "It´s a JPEG Document";
    }
    
} else if (strpos($name, 'pptx') || strpos($name, 'word') || strpos($name, 'csv') || strpos($name, 'odt') ||  strpos($name, 'pdf') || strpos($name, 'txt') || strpos($name, 'exe') || strpos($name, 'zip') || (strpos($name, 'rar') !==false)) {
    move_uploaded_file($content,"root/documents/" .$name);
    echo "You create this file: " . date("d F Y H:i:s.", filemtime($newFileDocument)). "<br>";
    echo "You modifiqued last time this file: " . date("d F Y H:i:s.", filectime($newFileDocument)) ."<br>";
    if(strpos($name, 'pptx') !== false){
        echo "It´s a PPTX Document" ."<br>";
    }
    if(strpos($name, 'txt') !== false){
        echo "It´s a TTX Document" ."<br>";
    }
    
} else if(strpos($name, 'mp3') || strpos($name, 'mp4' !== false)){
    move_uploaded_file($content,"root/audio-audio/" .$name);
    echo "You create this file: " . date("d F Y H:i:s.", filemtime($newFileAudioVideo)). "\n";
    echo "You modifiqued last time this file: " . date("d F Y H:i:s.", filectime($newFileAudioVideo));
}










?>

