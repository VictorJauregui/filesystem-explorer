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
const allCards = document.querySelector(".every-type-documents")

xClose2.addEventListener("click", closeWindows2);
documents.addEventListener("click", openDocuments);
images.addEventListener("click", openImages);
audioVideo.addEventListener("click", openAudioVideo);
buttonCreate.addEventListener("click", create);
xClose.addEventListener("click", closeWindows);
createDirectory.addEventListener("click", directoryCreate);
card.addEventListener("click", openCard);
xCloseRightPart.addEventListener("click", closeRightPart)


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



const newDirectoryBtnn=document.querySelector(".button-primary");//el boton que lo crea


const directoryNamePut=document.querySelector(".input-directory");//nombre del directorio


newDirectoryBtnn.addEventListener("click",createDirectory);


function createDirectory(){

console.log("hola");

const div=document.createElement("div");
div.classList.add("div-type-sidebar","div-type-sidebar1","div-document");
allDocuments.appendChild(div);


const img = document.createElement("img");
img.src = ".assets/icon-documents.png";
img.classList.add("icon-type");
div.appendChild(img);

const h2=document.createElement("h2");
h2.classList.add("h2-title-sidebar");
h2.value=directoryNamePut.value;
div.appendChild(h2);

const arrow=document.createElement("div");
arrow.classList.add("div-down-arrow");
div.appendChild(arrow);

const imgArrow=document.createElement("img");
imgArrow.src=".assets/arrow-down.png";
imgArrow.classList("down-arrow");
arrow.appendChild(imgArrow);

const imgUpArrow=document.createElement("img");
imgUpArrow.src="assets/icon-arrow-up.png";
imgUpArrow.classList.add("down-arrow up-arrow");
arrow.appendChild(imgUpArrow);


}


//llamar todas las clases i hacer append