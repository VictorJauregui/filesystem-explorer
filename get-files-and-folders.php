<?php

function getFilesAndFolders($path = "./root"){
    $everything = glob("$path/*");

    foreach($everything as $eachElement){
        if(is_file($eachElement)){
            $file = preg_replace('/\.[^.\s]{3,4}$/', '', basename($eachElement));
            echo "<div class='div-type-documents'>
            <img class='icon-type-documents' src='assets/icon-ppt.png' alt='icon power point'>
            <p class='text-type-document'>$file</p>
            </div>";

        }

        if(is_dir($eachElement)){
            $folder = preg_replace('/\.[^.\s]{3,4}$/', '', basename($eachElement));
            echo "<div class='div-type-sidebar'>
            <img class='icon-type' src='assets/carpeta.png' alt='icon document'>
            <h2 class='h2-title-sidebar'>$folder</h2>
            <div class='div-down-arrow'>
                <img class='create-sub-folder' src='assets/icon-create.png' alt='arrow-down'>
            </div>
        </div>";

        
        }
    }
}

getFilesAndFolders();

?>