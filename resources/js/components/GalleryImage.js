export default class GalleryImage{
    constructor(){
        this.galleryCount = 1
        this.galleryContainer = document.getElementById("js_gallery_image")
        this.wrapper = document.querySelector(".gallery_image-wrapepr")
        this.addBtn = document.getElementById("add-gallery")

        this.initialize()
    }

    initialize(){
        this.addBtn.addEventListener("click", this.handleAddGallery.bind(this))
    }

    handleAddGallery(){
        const newGalleryImage = this.galleryContainer.cloneNode(true)
        const fileInput = newGalleryImage.querySelector(".image-upload-input")
        fileInput.setAttribute('name', `gallery_images[${this.galleryCount}]`);
            // クローンした要素をDOMに追加（親要素の後ろに追加する例）
            this.wrapper.appendChild(newGalleryImage);
            const count = this.galleryCount
            this.handleInputFile(fileInput, count)
        // カウンターをインクリメント
        this.galleryCount++;
    }

    handleInputFile(inputFile, count){
        inputFile.addEventListener("change", (e)=>{
            console.log("222");
            
            const objectURL = URL.createObjectURL(e.target.files[0]);
            const previewContainer = document.getElementById("gallery_image")
            const img = document.createElement("img")
            img.id = `previewgalleryImage${count}`
            img.classList.add("preview-image")
            img.src = objectURL
            previewContainer.appendChild(img)
        })
    }
}