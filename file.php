<?php

$name= $_FILES["file-upload"]["name"];
$content = $_FILES["file-upload"]["tmp_name"];




if (strpos($name, 'jpeg') || strpos($name, 'pptx') === true) {
    echo "true";
    move_uploaded_file($content,"root/images/" .$name);
} else if (strpos($name, 'png')) {
    echo "false";
    move_uploaded_file($content,"root/trash/" .$name);
}




?>

