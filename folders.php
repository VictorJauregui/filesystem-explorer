<?php

$nameFolder= $_REQUEST["fff"];
$root = "root/" . $nameFolder
if(!file_exists($nameFolder)){
    mkdir($nameFolder,077,true){
        echo"created";
    }else{
        echo"exists";
    }
}





?>