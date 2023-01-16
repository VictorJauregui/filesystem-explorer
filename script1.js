const typeOfDocuments = document.querySelector(".type-of-documents");
const typeOfImages = document.querySelector(".type-of-images")
const typeOfAudioVideo = document.querySelector(".type-of-audio-video")
const documents = document.querySelector(".div-document");
const images = document.querySelector(".div-images")
const audioVideo = document.querySelector(".div-audio-video")
const upArrow = document.querySelector(".up-arrow");
const downArrow = document.querySelector(".down-arrow");
const allDocuments = document.querySelector(".all-sidebar-documents");
const allImages = document.querySelector(".all-sidebar-images");
const allAudioVideo = document.querySelector(".all-sidebar-audio-video");
const buttonCreate = document.querySelector(".btn-create")
const modalUpdate = document.querySelector(".modal");
const xClose = document.querySelector(".icon-close");
const modalDirectory = document.querySelector(".modal2");
const createDirectory = document.querySelector(".card-directory");
const xClose2 = document.querySelector(".close-modal2");
const card = document.querySelector(".card-document");
const content = document.querySelector(".content");
const rightPart = document.querySelector(".content-individual-document");
const sidebar = document.querySelector(".sidebar")
const iconCard = document.querySelector(".icon-card");
const xCloseRightPart = document.querySelector(".icon-close-right-part");
const allCards = document.querySelector(".every-type-documents");
const cardFile = document.querySelector(".card-file");
const formDisable = document.querySelector(".form-disable-file");
const btnCreateDirectory = document.querySelector(".button-primary");
const iconDirectory = document.querySelector(".icon-type");
const formDirectory = document.querySelector("#create-directory-form");
const formFile = document.querySelector(".form-disable-file");
const createSubFolder = document.querySelectorAll(".create-sub-folder")
const iconInformation = document.querySelectorAll(".icon-information");
const closeOpenCard = document.querySelectorAll(".div-icon-close-right");
const deleteFile = document.querySelectorAll(".icon-delete");
const modalDelete = document.querySelector(".modal-delete");
const openFolderSidebar = document.querySelectorAll(".div-type-sidebar");
const titleFolder = document.querySelector(".h1-tittle-folder");
const titleFile = document.querySelector("#title-file");
const dateCreation = document.querySelector("#date-creation");
const dateModification = document.querySelector("#date-modification");
const createSubfolder = document.querySelector(".modal2-subFolder");
const btnSubFolder = document.querySelector("#btn-subFolder");



/* EVENTS */

xClose2.addEventListener("click", closeWindows2);
// documents.addEventListener("click", openDocuments);
// images.addEventListener("click", openImages);
// audioVideo.addEventListener("click", openAudioVideo);
buttonCreate.addEventListener("click", create);
xClose.addEventListener("click", closeWindows);
createDirectory.addEventListener("click", directoryCreate);

// xCloseRightPart.addEventListener("click", closeRightPart);
cardFile.addEventListener("click", openFile);
formDirectory.addEventListener("submit", createADirectory);
formFile.addEventListener("submit", createAFile);

for(let i = 0; i < createSubFolder.length; i++){
    createSubFolder[i].addEventListener("click", subFolder)
}

// for(let i = 0; i < iconInformation.length; i++){
//     iconInformation[i].addEventListener("click", openCard);
// }

for(let i = 0; i < closeOpenCard.length; i++){
    closeOpenCard[i].addEventListener("click", closeInformation);
}



for(let i = 0; i < openFolderSidebar.length; i++){
    openFolderSidebar[i].addEventListener("click", openFolder);
}

btnSubFolder.addEventListener("click", createNewSubFolder);


/* FUNCTIONS */

function openDocuments(){
    typeOfDocuments.classList.toggle("type-of-documents");
    allDocuments.style.backgroundColor= "#8BD5FF";
    allDocuments.style.marginLeft = "10px";
    allDocuments.style.marginRight = "10px";
    allDocuments.style.borderRadius = "10px";



    if(typeOfDocuments.classList.contains("type-of-documents")){
        allDocuments.style.backgroundColor = "#DCF2FF"
        allDocuments.style.marginLeft = "0px";
        allDocuments.style.marginRight = "0px";
    }
}



function openImages(){
    typeOfImages.classList.toggle("type-of-images");
    allImages.style.backgroundColor= "#8BD5FF";
    allImages.style.marginLeft = "10px";
    allImages.style.marginRight = "10px";
    allImages.style.borderRadius = "10px";


    if(typeOfImages.classList.contains("type-of-images")){
        allImages.style.backgroundColor = "#DCF2FF"
        allImages.style.marginLeft = "0px";
        allImages.style.marginRight = "0px";
    }
}

function openAudioVideo(){
    typeOfAudioVideo.classList.toggle("type-of-audio-video");
    allAudioVideo.style.backgroundColor = "#8BD5FF";
    allAudioVideo.style.marginLeft = "10px";
    allAudioVideo.style.marginRight = "10px";
    allAudioVideo.style.borderRadius = "10px";

    if(typeOfAudioVideo.classList.contains("type-of-audio-video")){
        allAudioVideo.style.backgroundColor = "#DCF2FF"
        allAudioVideo.style.marginLeft = "0px";
        allAudioVideo.style.marginRight = "0px";
    }
}

function create(){
    

    // if(modalDirectory.classList.contains("modal2")){
    //     modalDirectory.classList.replace("modal2", "modal2-show")
    // }

    if(modalUpdate.classList.contains("modal")){
        modalUpdate.classList.replace("modal", "modal-show")

}

}

function closeWindows(){
    if(modalUpdate.classList.contains("modal-show")){
        modalUpdate.classList.replace("modal-show", "modal")

}
}

function closeWindows2(){
    if(modalDirectory.classList.contains("modal2-show")){
        modalDirectory.classList.replace("modal2-show", "modal2")
    }
}

function directoryCreate(){
    if(modalDirectory.classList.contains("modal2")){
        modalDirectory.classList.replace("modal2", "modal2-show")
    }
}

function openCard(event){
    // event.preventDefault();
    let file = event.target.getAttribute("path");
    let fileName = event.target.getAttribute("name");


    fetch(`./information.php?card=${file}&fileName=${fileName}`, {
        method: "GET",
      })

      .then((response) => response.json())
        .then((data) => {
          titleFile.innerHTML = data.fileName;
          dateCreation.innerHTML = data.dateCreation;
          dateModification.innerHTML = data.dateModification;
        })
        .catch((err) => console.log("Request: ", err));
    



    if(rightPart.classList.contains("content-individual-document")){
        rightPart.classList.replace("content-individual-document", "content-individual-document-show");
    }
    
    for(let i = 0; i < card.length; i++){
        card[i].style.border = "2px solid #A8FFAB";
        card[i].style.backgroundColor = "2px solid #A8FFAB";
        card[i].style.height = "27vh"
    }
    

    sidebar.style.width = "20%";
    content.style.width = "60%"
    allCards.style.gridTemplateColumns = "25% 25% 25% 25%"

}


function closeInformation(){
    if(rightPart.classList.contains("content-individual-document-show")){
        rightPart.classList.replace("content-individual-document-show", "content-individual-document");
    }

    sidebar.style.width = "20%";
    content.style.width = "80%"
    allCards.style.gridTemplateColumns = "20% 20% 20% 20% 20%"


}



function closeRightPart(){
    if(rightPart.classList.contains("content-individual-document-show")){
        rightPart.classList.replace("content-individual-document-show", "content-individual-document");
        content.style.width = "80%";
        allCards.style.gridTemplateColumns = "20% 20% 20% 20% 20%"
    }
}

function openFile(){
    console.log("hola")
    if(formDisable.classList.contains("form-disable-file")){
        setInterval(() => {
            formDisable.classList.replace("form-disable-file", "form-disable-file-show")
        }, 1000);
        

    }
}

function createADirectory(e){

    e.preventDefault();
    let directoryName = e.target.elements["name-directory"].value;

    fetch(`./create-directory.php?foldername=${directoryName}`, {
        method: "GET",
      })
        .then((response) => response.json())
        .then((data) => {
          if(data.ok){
            console.log(allDocuments);

            const divDirectory = document.createElement("div");
            divDirectory.classList = "div-type-sidebar";


            const iconDirectory = document.createElement("img");
            iconDirectory.classList = "icon-type";
            iconDirectory.setAttribute("src", "assets/carpeta.png");

            
            const h2Directory = document.createElement("h2");
            h2Directory.classList = "h2-title-sidebar";
            h2Directory.textContent = data.name;

            divDirectory.appendChild(iconDirectory);
            divDirectory.appendChild(h2Directory);
            allDocuments.appendChild(divDirectory);
        }
        })
        .catch((err) => console.log("Request: ", err));

        if(modalUpdate.classList.contains("modal-show")){
            modalUpdate.classList.replace("modal-show", "modal")
        }

        if(modalDirectory.classList.contains("modal2-show")){
            modalDirectory.classList.replace("modal2-show", "modal2")
        }
   

}

/* ARREGLO FAKEPATH*/

 function createAFile(e){
     e.preventDefault();
     let fileName = e.target.elements["file-upload"].files[0].name;

     fetch(`./create-file.php?filename=${fileName}`,{
     method:"GET",
     })

     .then((response) => response.json())
         .then((data) => {
           if(data.ok){
            
             const cardNew = document.createElement("div")
             cardNew.classList = "card-document";


             const divIconFile = document.createElement("div")
             divIconFile.classList = "div-icon-card";
             

             const iconFile = document.createElement("img");
             iconFile.classList = "icon-card";
             iconFile.setAttribute("src", "assets/png.png");

            
             const pFile = document.createElement("p");
             pFile.textContent = data.name;

             const divDownCard = document.createElement("div");
             divDownCard.classList = "div-down-card"

             const iconInformation = document.createElement("img");
             iconInformation.setAttribute("src", "assets/icon-information.png");
             iconInformation.classList = "icon-down-card"
             iconInformation.setAttribute("path", data.path);
             iconInformation.addEventListener("click", openCard);

             const iconEye = document.createElement("img");
             iconEye.setAttribute("src", "assets/icon-eye.png");
             iconEye.classList = "icon-down-card"

             const iconDelete = document.createElement("img");
             iconDelete.setAttribute("src", "assets/icon-waste.png");
             iconDelete.classList = "icon-down-card";
             iconDelete.setAttribute("path", data.path);
             iconDelete.addEventListener("click", changeCurrentPath);

             allCards.appendChild(cardNew);
             cardNew.appendChild(divIconFile);
             divIconFile.appendChild(iconFile);
             cardNew.appendChild(pFile);
             cardNew.appendChild(divDownCard);
             divDownCard.appendChild(iconInformation);
             divDownCard.appendChild(iconEye);
             divDownCard.appendChild(iconDelete);
             

         }
         })
         .catch((err) => console.log("Request: ", err));

         if(modalUpdate.classList.contains("modal-show")){
            modalUpdate.classList.replace("modal-show", "modal")
    
    }
 }

let subFolderName = "";

function subFolder(e){
    
    subFolderName = e.target.getAttribute("path");
    console.log(subFolderName);

    if(createSubfolder.classList.contains("modal2-subFolder")){
        createSubfolder.classList.replace("modal2-subFolder", "modal2-show-subFolder");
    }
    
 }

function createNewSubFolder(e){
    console.log(subFolderName);
    const inputSubFolder = document.querySelector("#input-subFolder");
    let subFolderNewName = inputSubFolder.value;

    // fetch(`./create-subfolder.php?foldername=${subFolderNewName}&path=${subFolderName}`,{
    //     method:"GET",
    //     })

    //     .then((response) => response.json())
    //     .then((data) => {
    //         console.log(data);
            
    //     })
    
    window.location.href = `./create-subfolder.php?folderName=${subFolderNewName}&path=${subFolderName}`;
}




    let path = "";

    
function changeCurrentPath(e){
    path = e.target.getAttribute("path");
    console.log(path);

    if(modalDelete.classList.contains("modal-delete")){
        modalDelete.classList.replace("modal-delete", "modal-delete-show");
    }
}



    function openDelete(event){
    event.preventDefault();
    console.log(path);
    fetch(`./delete.php?delete=${path}`, {
        method: "GET",
      })

    
    if(modalDelete.classList.contains("modal-delete-show")){
        modalDelete.classList.replace("modal-delete-show", "modal-delete");
    }

    window.location.href = "./index.php"
 }
 

function openEye(event){
    let file = event;
    console.log(file);
    let fileName = event.target.getAttribute("name");
    
    fetch(`./open-file.php?open=${file}&fileName=${fileName}`, {
        method: "GET",
      })
}



 function openFolder(e){
    
    
    let nameFolder; 

    if(e.target.matches(".div-type-sidebar")){
        nameFolder = e.target.children[1].innerText;
        titleFolder.innerHTML = nameFolder;
    } else if(e.target.matches(".icon-type")){
        nameFolder = e.target.nextElementSibling.innerText;
        titleFolder.innerHTML = nameFolder;
    } else if(e.target.matches(".h2-title-sidebar")){
        nameFolder = e.target.innerText;
        titleFolder.innerHTML = nameFolder;
    }


}