<?php

$archivoName = $_REQUEST["file-upload"];
$newFileImage = "./root/". $archivoName;

echo "<div class='content-individual-document'>
         <div class='div-icon-close-right'>
                <img class='icon-close icon-close-right-part' src='assets/icon-close.png' alt='icon close'>
            </div>
            <div class='top-type-document'>
                <div class='div-individual-content'>
                    <h2>TITLE</h2>
                    <p>$newFileImage</p>
                </div>   
                <div class='div-individual-content'>
                    <h2>CREATION DATE</h2>
                    <p>02-01-2023</p>
                </div>  
                <div class='div-individual-content'>
                    <h2>LAST MODIFIED DATE</h2>
                    <p>05-01-2023</p>
                </div>  
                <div class='div-individual-content'>
                    <h2>TYPE</h2>
                    <div class='icon-and-name'>
                        <img class='icon-type-document' src='assets/word-color.png' alt='type of document'>
                        <p>Microsoft Word</p>
                    </div>
                </div>
            </div>
        </div>";