<?php

$name= $_FILES["file-upload"]["name"];
$content = $_FILES["file-upload"]["tmp_name"];
$archivo = "hola.png";




if (strpos($name, 'jpeg') || strpos($name, 'png') || strpos($name, 'svg') !== false) {
    move_uploaded_file($content,"root/images/" .$name);
    header("Location: index.php?createsuccesfully");
} else if (strpos($name, 'pptx') || strpos($name, 'word') || strpos($name, 'csv') || strpos($name, 'odt') ||  strpos($name, 'pdf') || strpos($name, 'txt') || strpos($name, 'exe') || strpos($name, 'zip') || (strpos($name, 'rar') !==false)) {
    echo "document";
    move_uploaded_file($content,"root/documents/" .$name);
} else if(strpos($name, 'mp3') || strpos($name, 'mp4' !== false)){
    echo "image or video";
}

if(file_exists($archivo)){
    echo "si existe";
}


?>

