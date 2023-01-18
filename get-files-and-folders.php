<?php
// Comprobar si hay variable de sesión $_SESSION["current_path"];
// Pasar a variable de sesión como parámetro de GetFilesAndFolder si está seteada.(isset($_SESSION["current_path"]))
// si no existe ejecutar la funcion sin parámetros.



function getFilesAndFolders($path = "./root/")
{
    $everything = glob("$path/*");
    foreach ($everything as $eachElement) {
        if (is_dir($eachElement)) {
            $folder = preg_replace('/\.[^.\s]{3,4}$/', '', basename($eachElement));
            echo "<div class='div-type-sidebar' onclick='navigate(event)' id='$eachElement' routeId='$eachElement'>
            <img class='icon-type' src='assets/carpeta.png' alt='icon document'>
            <h2 class='h2-title-sidebar'  onclick='navigate(event)' routeId='$eachElement'>$folder</h2>
            <div class='div-down-arrow'>
                <img class='create-sub-folder' path='$eachElement' src='assets/icon-create.png' alt='arrow-down'>
            </div>
        </div>";

            $subfolders = glob("$eachElement/*");
            foreach ($subfolders as $subdir) {
                if (is_dir($subdir)) {
                    $folder = preg_replace('/\.[^.\s]{3,4}$/', '', basename($subdir));
                    echo "<div class='div-type-documents' onclick='navigate(event)' id='$subdir' routeId='$subdir'>
                        <img class='icon-type-documents' src='assets/icon-subfolder.png' alt='icon power point'>
                        <p  onclick='navigate(event)' routeId='$subdir' class='text-type-document'>$folder</p>
                        <div class='div-down-arrow'>
                    </div>
                </div>";
                }
            }
        }
    }
}


getFilesAndFolders();