<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <script src="script1.js?v=<?php echo time(); ?>" defer></script>
    
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
                    <p class="p-directory">DIRECTORY</p>
                </div>
                <div class="card-type-update card-file">
                        <label for="file-upload" style="cursor: pointer;">
                            <div class="div-icon-type-update" >
                                <img class="icon-type-update" src="assets/icon-file.png" alt="icon-directory">
                            </div>
                            <p>FILE</p>
                        </label>
                    <form class="form-disable-file" enctype="multipart/form-data">
                        <input class="input-file-disable" id="file-upload" type="file" name="file-upload"> 
                        <button type="submit" name="uploadBtn">UPLOAD</button>   
                    </form>     
                </div>
            </div>
        </div>
    </div>
    <!-------------------MODAL 2---------------------> 
    <div class="modal2">
        <div class="contenido-modal2">
            <div class="div-icon-close close-modal2">
                <img class="icon-close icon-close2" src="assets/icon-close.png" alt="icon close">
            </div>
            <div class="top-contenido-modal2">
                <h2 class="h2-modal2">NAME OF DIRECTORY</h2>
            </div>
            <form id="create-directory-form" method="GET">
                <input class="input-directory" type="text" name="name-directory">
                <div class="buttons-modal2">
                    <button class="button-secundary">BACK</button>
                    <button type="submit" class="button-primary">CREATE</button>
                </div>
            </form>       
        </div>
    </div>
<!-------------------MODAL DELETE---------------------> 
    <div class="modal-delete">
        <div class="contenido-modal-delete">
                <div class="div-icon-close close-modal2">
                    <img class="icon-close icon-close2" src="assets/icon-close.png" alt="icon close">
                </div>
                <div class="top-contenido-delete">
                    <h2 class="h2-modal-delete">Are you sure that you want to delete this file?</h2>
                </div>
                <div class="btns-delete">
                    <button class="button-secundary">CANCEL</button>
                    <button onclick="openDelete(event)" class="btn-delete">DELETE</button>
                </div>
                
        </div>  
    </div>


    <?php
        if(isset($_GET["createsuccesfully"])){
            echo "<div class='modal-succesfully'>
                <div class='div-succesfully'>
                    <img class='icon-succesfully' src='assets/check.png' alt='succesfully'>
                    <p>Your directory has been created succesfully</p>
                <div>
            </div>";
        }
    ?>

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
            <?php
            require_once("./get-files-and-folders.php");
            
            ?>
             <div class="all-sidebar-documents"></div>
            
        </div> 
        <div class="content">
            <h1 class="h1-tittle-folder">All</h1>
            <div class='every-type-documents'>
            <?php
            require_once("./get-files.php");
            ?>  
            </div>
            <div class="div-btn-create-file">
                <div class="btn-create-file">
                    <img src="assets/icon-create.png" alt="create icon">
                    <h2>Create a file</h2>
                </div>
            </div>
        </div>
        <div class='content-individual-document'>
         <div class='div-icon-close-right'>
                <img class='icon-close icon-close-right-part' src='assets/icon-close.png' alt='icon close'>
            </div>
            <div class='top-type-document'>
                <div class='div-individual-content'>
                    <h2>TITLE</h2>
                    <p id="title-file"></p>
                </div>   
                <div class='div-individual-content'>
                    <h2>CREATION DATE</h2>
                    <p id="date-creation"></p>
                </div>  
                <div class='div-individual-content'>
                    <h2>LAST MODIFIED DATE</h2>
                    <p id="date-modification"></p>
                </div>  
                <div class='div-individual-content'>
                    <h2>TYPE</h2>
                    <div class='icon-and-name'>
                        <img class='icon-type-document' src='assets/word-color.png' alt='type of document'>
                        <p>Microsoft Word</p>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    
</body>
</html>