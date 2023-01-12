<?php

print_r($_FILES);

$name= $_FILES["file-upload"]["name"];
$content = $_FILES["file-upload"]["tmp_name"];
$btn = $_REQUEST["uploadBtn"];



   
    if(file_exists("uploadBtn")){
        if(move_uploaded_file($content,"root/" . $name)){
            echo "saved";
        }else{
            echo "error";
        }
    }


?>