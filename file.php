<?php

$name= $_FILES["file-upload"]["name"];
$content = $_FILES["file-upload"]["tmp_name"];



if (strpos($name, 'png') || strpos($name, 'jpeg') || strpos($name, 'pptx') !== false) {
    echo "true";
    move_uploaded_file($content,"root/images/" .$name);

} else {
    echo "false";
    move_uploaded_file($content,"root/documents/" .$name);
}






?>

