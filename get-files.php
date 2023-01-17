<?php



    if (isset($_SESSION['current_path'])) {
        $currPath = $_SESSION['current_path'];
        getFile($currPath);
    } else {
        getFile();
    }


    function getFile($path = "./root/")
    {
        $everything = glob("$path/*");
        $route = preg_replace('/\.[^.\s]{3,4}$/', '', basename($path));
        echo "<h1 class='h1-tittle-folder'>$route</h1>
            <div class='every-type-documents'>";
        foreach ($everything as $eachElement) {
            if (is_file($eachElement)) {
                $file = preg_replace('/\.[^.\s]{3,4}$/', '', basename($eachElement));

                echo "
                <div class='card-document'>
                    <div class='div-icon-card'>
                        <img class='icon-card' src='assets/png.png' alt='icon power point'>
                    </div>
                    <p class='name-of-file'>$file</p>
                    <div class='div-down-card'>
                        <img class='icon-down-card icon-information' name='$file' path='$eachElement' onclick='openCard(event)' src='assets/icon-information.png' alt='icon information'>
                        <img class='icon-down-card icon-eye' name='$file' path='$eachElement'  onclick='openEye(event)' src='assets/icon-eye.png' alt=''>
                        <img class='icon-down-card icon-delete' name='$file' path='$eachElement' onclick='changeCurrentPath(event)' src='assets/icon-waste.png' alt='icon-delete'>
                        <img class='icon-down-card icon-rename' name='$file' path='$eachElement' onclick='renameFile(event)' src='assets/lapiz.png' alt='icon-lapiz'>
                     </div>
                     <input id='renameFile' class='renameFileClass' path='$eachElement'></input>
                </div>";
            }

        }
    }