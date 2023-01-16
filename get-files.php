 <?php

function getFile($path = "./root"){
    $everything = glob("$path/*");

    foreach($everything as $eachElement){
        if(is_file($eachElement)) {
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
                     </div>
                </div>";
                
            
        } 
        }

}



getFile(); 