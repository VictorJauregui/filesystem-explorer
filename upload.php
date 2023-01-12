
<?php


$name=$_FILES["Upload"]["name"];


$content = $_FILES["Upload"]["tmp_name"];

/*
if(!file_exists("Upload")){
    mkdir("Upload",0777,true);
    if(file_exists("Upload")){
        if(move_uploaded_file($content,"root/".$name)){
            echo "saved";
        }else{
            echo"error";
        }

    }

}else{*/
    if(move_uploaded_file($content,"root/".$name)){
        echo"saved";
    } else{
        echo"error";
    }


?>