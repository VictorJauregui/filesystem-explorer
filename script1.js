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


xClose2.addEventListener("click", closeWindows2);
// documents.addEventListener("click", openDocuments);
// images.addEventListener("click", openImages);
// audioVideo.addEventListener("click", openAudioVideo);
buttonCreate.addEventListener("click", create);
xClose.addEventListener("click", closeWindows);
createDirectory.addEventListener("click", directoryCreate);
// card.addEventListener("click", openCard);
// xCloseRightPart.addEventListener("click", closeRightPart);
cardFile.addEventListener("click", openFile);
formDirectory.addEventListener("submit", createADirectory);
formFile.addEventListener("submit", createAFile);


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

function openCard(){

    if(rightPart.classList.contains("content-individual-document")){
        rightPart.classList.replace("content-individual-document", "content-individual-document-show");
    }
    
    card.style.border = "2px solid #A8FFAB"
    card.style.backgroundColor = "2px solid #A8FFAB"

    sidebar.style.width = "20%";
    content.style.width = "60%"
    card.style.height = "260px"
    allCards.style.gridTemplateColumns = "30% 30% 30%"

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

 function createAFile(e){
     e.preventDefault();
     let fileName = e.target.elements["file-upload"].value;

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

             const iconEye = document.createElement("img");
             iconEye.setAttribute("src", "assets/icon-eye.png");
             iconEye.classList = "icon-down-card"

             const iconDelete = document.createElement("img");
             iconDelete.setAttribute("src", "assets/icon-waste.png");
             iconDelete.classList = "icon-down-card"

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
