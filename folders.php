<?php

$name= $_FILES["file-upload"]["name"];
$content = $_FILES["file-upload"]["tmp_name"];
$btn = $_REQUEST["uploadBtn"];


if(mkdir("docx")){
    "<div class=' div-type-sidebar div-type-sidebar1 div-document'>
    <img class= 'icon-type ' src= 'assets/icon-documents.png'  alt= 'icon document' >
    <h2 class=' h2-title-sidebar' >Documents</h2>
    <div class=' div-down-arrow '>
        <img class= 'down-arrow'  src= 'assets/arrow-down.png'  alt= 'arrow-down' >
        <img class= 'down-arrow up-arrow'  src=' assets/icon-arrow-up.png'  alt= 'arrow-down' >
    </div>
</div>"
}


?>