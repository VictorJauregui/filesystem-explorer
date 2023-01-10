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


documents.addEventListener("click", openDocuments);
images.addEventListener("click", openImages);
audioVideo.addEventListener("click", openAudioVideo);

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