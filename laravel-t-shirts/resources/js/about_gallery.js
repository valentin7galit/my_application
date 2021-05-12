function zoomGallery(image) {
    const imageBlock = document.getElementById("zoom-img");
    imageBlock.src = image.src;
    imageBlock.parentElement.style.display = "block";
}