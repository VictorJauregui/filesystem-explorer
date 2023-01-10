const typeOfDocuments = document.querySelector(".type-of-documents");
const typeOfImages = document.querySelector(".type-of-images")
const documents = document.querySelector(".div-document");
const images = document.querySelector(".div-images")
const upArrow = document.querySelector(".up-arrow");
const downArrow = document.querySelector(".down-arrow");


documents.addEventListener("click", openDocuments);
images.addEventListener("click", openImages);

function openDocuments(){
    typeOfDocuments.classList.toggle("type-of-documents");
    typeOfDocuments.style.backgroundColor = "#8BD5FF";
    documents.style.backgroundColor= "#8BD5FF";
    documents.style.marginLeft = "10px";
    documents.style.marginRight = "10px";
    typeOfDocuments.style.marginLeft = "10px";
    typeOfDocuments.style.marginRight = "10px";

    if(typeOfDocuments.classList.contains("type-of-documents")){
        documents.style.backgroundColor = "#DCF2FF"
        documents.style.marginLeft = "0px";
        documents.style.marginRight = "0px";
        typeOfDocuments.style.marginLeft = "0px";
        typeOfDocuments.style.marginRight = "0px";
    }
}

function openImages(){
    typeOfImages.classList.toggle("type-of-images");
    typeOfImages.style.backgroundColor = "#8BD5FF";
    images.style.backgroundColor= "#8BD5FF";
    images.style.marginLeft = "10px";
    images.style.marginRight = "10px";
    typeOfImages.style.marginLeft = "10px";
    typeOfImages.style.marginRight = "10px";

    if(typeOfImages.classList.contains("type-of-images")){
        images.style.backgroundColor = "#DCF2FF"
        images.style.marginLeft = "0px";
        images.style.marginRight = "0px";
        typeOfImages.style.marginLeft = "0px";
        typeOfImages.style.marginRight = "0px";
    }
}