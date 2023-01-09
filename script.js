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
}

function openImages(){
    typeOfImages.classList.toggle("type-of-images")
}