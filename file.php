<?php


$name=$_FILES["Upload"]["name"];


$content = $_FILES["Upload"]["tmp_name"];

    if(move_uploaded_file($content,"root/".$name)){
        echo"saved";
    } else{
        echo"error";
    }

?>