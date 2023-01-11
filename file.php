<?php

$name= $_FILES["file-upload"]["name"];
$content = $_FILES["file-upload"]["tmp_name"];




if(move_uploaded_file($content,"root/" .$name)){
    echo "saved";

} else{
    echo"error";
}


if (!file_exists($images)) {
    mkdir($images, 0777, true);
    echo "está creada";
}

if (strpos($name, 'png') !== false) {
    echo "true";
    move_uploaded_file($content,"root/images/" .$name);

}

?>

