<?php
$searchedFiles=$_REQUEST["searched"];
$all = glob("./root/*");


function createForFile(){
    foreach($all as $eachElement){
        if(file_exists($eachElement)) {
            $h1 = preg_replace('/\.[^.\s]{3,4}$/', '', basename($eachElement));
            
            echo"  <div class='every-type-documents'>
            <div class='card-document'>
            <div class='div-icon-card'>
            <img class='icon-card' src='assets/word-color.png' alt='icon power point'>
            </div>
            <p>$h1</p>
            </div>
            </div>";
        }
    }
}
var_dump($all ) ;