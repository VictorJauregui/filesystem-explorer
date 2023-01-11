
<?php


$name = $_FILES["Upload"]["name"];
$content = $_FILES["Upload"]["tmp_name"];


/*
if(file_exists("root/".$name)){
    echo "if";
    mkdir("Giorgi",0777,true);
    if(file_exists("Upload")){
        if(move_uploaded_file($content,"root/".$name)){
            echo "saved";
        }else{
            echo"error";
        }
    }

}  
else{
    echo "else";*/


    if(move_uploaded_file($content,"root/".$name)){
        echo"saved";
    } else{
        echo"error";
    }

?>