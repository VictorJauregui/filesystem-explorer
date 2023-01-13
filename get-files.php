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
                    <p>$file</p>
                </div>";
            
        } 
        }

}



getFile(); 