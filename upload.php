<?php

$directory="root/";
$fileVariable=$directory . basename($_FILES["Upload"]["name"]);

$tipoArchivo=strtoupper(pathinfo($fileVariable, PATHINFO_EXTENSION));
$content = file_get_contents($_FILES["Upload"]["tmp_name"]);

if($content !=false){
if(move_uploaded_file($_FILES["Upload"]["tmp_name"],$fileVariable)){
echo "uploaded";
}else{
    echo"error";
}
}else{
    echo "this document is not img";
}

?>