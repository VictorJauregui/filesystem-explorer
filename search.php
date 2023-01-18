<?php
$folderArr=[];
$fileArr=[];
$currentFile=$_REQUEST["file-name"];
function search_files( $dir , $files )
{
    if (is_dir($dir))
    {
        if ($gd = opendir($dir))
        {
            while (($file = readdir($gd)) !== false)
            {
                if ( $file != '.' AND $file != '..'  )
                {
                    // ¿ Dir or File ?
                    if (  is_dir( $dir.'/'.$file ) )
                    {
                        global $folderArr;
                        array_push($folderArr, $dir.'/'.$file );
                        search_files( $dir.'/'.$file , $files );
                    }
                    else
                    {
                        // Ready File
                        if ( is_file( $dir.'/'.$file)  )
                        {
                            global $fileArr;
                        array_push($fileArr, $dir.'/'.$file );
                          // $size = filesize( $dir.'/'.$file );
                          // $md5 = md5_file( $dir.'/'.$file );
                        //     $files[ dirname($dir.'/'.$file)."/".$file  ] = filemtime( $dir.'/'.$file  );
                        }
                    }
                }
            }
            closedir($gd);
        }
    }
}
search_files("./root",$currentFile);
 echo json_encode([
    "folders"=>$folderArr,
    "files"=>$fileArr,
    "okay"=>true
]);
// $files = array();
// search_files("./root/", $files );
// print_r($files);

// function getFile($path = "./root"){
//     $allFiles = glob("$path/*");
// echo $allFiles;
    // foreach($allFiles as $eachElement){
    //     if(is_file($eachElement)) {
    //         $file = preg_replace('/\.[^.\s]{3,4}$/', '', basename($eachElement));
        
    //         echo "
    //             <div class='card-document'>
    //                 <div class='div-icon-card'>
    //                     <img class='icon-card' src='assets/png.png' alt='icon power point'>
    //                 </div>
    //                 <p>$name</p>
    //                 <div class='div-down-card'>
    //                     <img class='icon-down-card icon-information' src='assets/icon-information.png' alt='icon information'>
    //                     <img class='icon-down-card icon-eye' src='assets/icon-eye.png' alt=''>
    //                     <img class='icon-down-card icon-delete' src='assets/icon-waste.png' alt='icon-delete'>
    //                  </div>
    //             </div>";
            
    //     } 
    //     }

//}



?>





