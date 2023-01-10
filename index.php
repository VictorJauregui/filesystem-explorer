<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script1.js" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap');
    </style>

    <title>System Explorer</title>
</head>
<body>
    <!-------------------MODAL---------------------> 
    <div class="modal">
        <div class="contenido-modal">
            <div class="div-h2-modal">
                <h2 class="h2-modal">Update</h2>
                <div class="div-icon-close">
                    <img class="icon-close" src="assets/icon-close.png" alt="icon close">
                </div>
            </div>
            <div class="type-of-update">
                <div class="card-type-update card-directory">
                    <div class="div-icon-type-update">
                        <img class="icon-type-update" src="assets/icon-directory.png" alt="icon-directory">
                    </div>
                    <p>DIRECTORY</p>
                </div>
                <div class="card-type-update">
                    <div class="div-icon-type-update">
                        <img class="icon-type-update" src="assets/icon-file.png" alt="icon-directory">
                    </div>
                    <p>FILE</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal2">
        <div class="contenido-modal2">
            <div class="div-icon-close close-modal2">
                <img class="icon-close icon-close2" src="assets/icon-close.png" alt="icon close">
            </div>
            <div class="top-contenido-modal2">
                <h2 class="h2-modal2">NAME OF DIRECTORY</h2>
            </div>
            <input class="input-directory" type="text">
            <div class="buttons-modal2">
                <button class="button-secundary">BACK</button>
                <button class="button-primary">CREATE</button>
            </div>
        </div>
    </div>
   <!-------------------DASHBOARD---------------------> 
    </div>
    <div class="nav-bar">
        <img class="logo" src="assets/logo.png" alt="logo"> 
        <input type="search">
        <div class="user-right">
            <img class="icon-user"src="assets/icon-user.png" alt="user">
        </div>
        
    </div>
    <div class="all-screen">
        <div class="sidebar">
            <div class="div-btn-create">
                <div class="btn-create">
                    <img src="assets/icon-create.png" alt="create icon">
                    <h2>Create</h2>
                </div>
            </div>
            <div class="all-sidebar-documents">
                <div class="div-type-sidebar div-type-sidebar1 div-document">
                    <img class="icon-type" src="assets/icon-documents.png" alt="icon document">
                    <h2 class="h2-title-sidebar">Documents</h2>
                    <div class="div-down-arrow">
                        <img class="down-arrow" src="assets/arrow-down.png" alt="arrow-down">
                        <img class="down-arrow up-arrow" src="assets/icon-arrow-up.png" alt="arrow-down">
                    </div>
                </div>
                <div class="type-of-documents">
                    <div class="div-type-documents">
                        <img class="icon-type-documents" src="assets/icon-ppt.png" alt="icon power point">
                        <p class="text-type-document">POWER POINT</p>
                    </div> 
                    <div class="div-type-documents">
                        <img class="icon-type-documents" src="assets/icon-word.png" alt="icon word">
                        <p class="text-type-document">WORD</p>
                    </div>  
                    <div class="div-type-documents">
                        <img class="icon-type-documents" src="assets/icon-csv.png" alt="icon csv">
                        <p class="text-type-document">CSV</p>
                    </div>  
                    <div class="div-type-documents">
                        <img class="icon-type-documents" src="assets/icon-odt.png" alt="icon odt">
                        <p class="text-type-document">ODT</p>
                    </div>  
                    <div class="div-type-documents">
                        <img class="icon-type-documents" src="assets/icon-pptt.png" alt="icon ppt">
                        <p class="text-type-document">PPT</p>
                    </div>  
                    <div class="div-type-documents">
                        <img class="icon-type-documents" src="assets/icon-txt.png" alt="icon txt">
                        <p class="text-type-document">TXT</p>
                    </div>  
                    <div class="div-type-documents">
                        <img class="icon-type-documents" src="assets/icon-exe.png" alt="icon exe">
                        <p class="text-type-document">EXE</p>
                    </div> 
                    <div class="div-type-documents">
                        <img class="icon-type-documents" src="assets/icon-zip.png" alt="icon zip">
                        <p class="text-type-document">ZIP</p>
                    </div> 
                    <div class="div-type-documents">
                        <img class="icon-type-documents" src="assets/icon-rar.png" alt="icon rar">
                        <p class="text-type-document">RAR</p>
                    </div> 
                </div>
            </div>
            <div class="all-sidebar-images">
                <div class="div-type-sidebar div-images">
                    <img class="icon-type" src="assets/icon-images.png" alt="icon images">
                    <h2 class="h2-title-sidebar">Images</h2>
                    <div class="div-down-arrow">
                        <img class="down-arrow" src="assets/arrow-down.png" alt="arrow-down">
                    </div> 
                </div>
                <div class="type-of-images">
                    <div class="div-type-images">
                        <img class="icon-type-documents" src="assets/icon-jpg.png" alt="icon jpg">
                        <p class="text-type-document">JPG</p>
                    </div> 
                    <div class="div-type-images">
                        <img class="icon-type-documents" src="assets/icon-png.png" alt="icon png">
                        <p class="text-type-document">PNG</p>
                    </div> 
                    <div class="div-type-images">
                        <img class="icon-type-documents" src="assets/icon-jpg.png" alt="icon svg">
                        <p class="text-type-document">SVG</p>
                    </div> 
                </div>
            </div>
            <div class="all-sidebar-audio-video">
                <div class="div-type-sidebar div-audio-video">
                    <img class="icon-type" src="assets/icon-audio-video.png" alt="icon audio-video">
                    <h2 class="h2-title-sidebar">Audio/Video</h2>
                    <div class="div-down-arrow">
                        <img class="down-arrow" src="assets/arrow-down.png" alt="arrow-down">
                    </div> 
                </div>
                <div class="type-of-audio-video">
                    <div class="div-type-audio-video">
                        <img class="icon-type-documents" src="assets/icon-mp3.png" alt="icon mp3">
                        <p class="text-type-document">MP3</p>
                    </div> 
                    <div class="div-type-audio-video">
                        <img class="icon-type-documents" src="assets/icon-mp4.png" alt="icon mp4">
                        <p class="text-type-document">MP4</p>
                    </div> 
                </div>
            </div>
            <div class="div-type-sidebar">
                <img class="icon-type" src="assets/icon-trash.png" alt="icon document">
                <h2 class="h2-title-sidebar">Rubish</h2>
            </div>
        </div>
        <div class="content">
            <h1>All</h1>
            <div class="every-type-documents">
                <div class="card-document">
                    <div class="div-icon-card">
                        <img class="icon-card" src="assets/word-color.png" alt="icon power point">
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and</p>
                </div>
                <div class="card-document">
                    <div class="div-icon-card">
                        <img class="icon-card" src="assets/word-color.png" alt="icon power point">
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and</p>
                </div>
                <div class="card-document">
                    <div class="div-icon-card">
                        <img class="icon-card" src="assets/word-color.png" alt="icon power point">
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and</p>
                </div>
                <div class="card-document">
                    <div class="div-icon-card">
                        <img class="icon-card" src="assets/word-color.png" alt="icon power point">
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and</p>
                </div>
                <div class="card-document">
                    <div class="div-icon-card">
                        <img class="icon-card" src="assets/word-color.png" alt="icon power point">
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and</p>
                </div>
                <div class="card-document">
                    <div class="div-icon-card">
                        <img class="icon-card" src="assets/word-color.png" alt="icon power point">
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and</p>
                </div>
                
              
            </div>  
        </div>
        <div class="content-individual-document">
            <div class="div-icon-close-right">
                <img class="icon-close icon-close-right-part" src="assets/icon-close.png" alt="icon close">
            </div>
            <div class="top-type-document">
                <div class="div-individual-content">
                    <h2>TITLE</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                </div>   
                <div class="div-individual-content">
                    <h2>CREATION DATE</h2>
                    <p>02-01-2023</p>
                </div>  
                <div class="div-individual-content">
                    <h2>LAST MODIFIED DATE</h2>
                    <p>05-01-2023</p>
                </div>  
                <div class="div-individual-content">
                    <h2>TYPE</h2>
                    <div class="icon-and-name">
                        <img class="icon-type-document" src="assets/word-color.png" alt="type of document">
                        <p>Microsoft Word</p>
                    </div>
                </div>
            </div>
            <div class="div-logo2">
                <img class="logo2" src="assets/logo2.png" alt="logo secundary">
            </div>
        </div>
        
    </div>
    
</body>
</html>