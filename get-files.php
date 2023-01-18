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
                    <p class='renombre'>$file</p>
                    <div class='div-down-card'>
                        <img class='icon-down-card icon-information' src='assets/icon-information.png' alt='icon information'>
                        <img class='icon-down-card icon-eye' src='assets/icon-eye.png' alt=''>
                        <img class='icon-down-card icon-delete' src='assets/icon-waste.png' alt='icon-delete'>
                     </div>
                </div>";
            
        } 
        }

}



getFile(); 