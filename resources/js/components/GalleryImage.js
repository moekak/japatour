import GalleryImageElement from "./GalleryImageElement.js"

export default class GalleryImage{
    constructor(submitBtn){

        console.log(submitBtn);
        
        this.galleryCount = 1
        this.galleryContainer = document.getElementById("js_gallery_image")
        this.wrapper = document.querySelector(".gallery_image-wrapepr")
        this.addBtn = document.getElementById("add-gallery")
        this.submitBtn = submitBtn
        this.form = document.querySelector(".tour-form")

        this.initialize()
        this.#handleRemoveImage()
    }

    initialize(){
        this.addBtn.addEventListener("click", this.handleAddGallery.bind(this))
        this.submitBtn.addEventListener("click", this.handleSubmit.bind(this))
        this.handleInputFile(document.getElementById("gallery_images_0"), 0)
    }


    handleSubmit(e){
        e.preventDefault()
        const files = document.querySelectorAll(".js_galllery_images")
        files.forEach((file, index)=>{
            if(file.value == ""){
                return
            }
            file.setAttribute("name", `gallery_images[${index}]`)
        })

        this.form.submit()


    }
    handleAddGallery(){
        const newGalleryImage = this.galleryContainer.cloneNode(true)
        newGalleryImage.dataset.id = this.galleryCount
        const fileInput = newGalleryImage.querySelector(".image-upload-input")
        fileInput.value = ""
        const fileLabel= newGalleryImage.querySelector(".image-upload-label")

        fileInput.setAttribute('name', `gallery_images[${this.galleryCount}]`);
        fileInput.id = `gallery_images_${this.galleryCount}`
        // クローンした要素をDOMに追加（親要素の後ろに追加する例）
        fileLabel.setAttribute("for", `gallery_images_${this.galleryCount}`)
        
        this.wrapper.appendChild(newGalleryImage);
        const count = this.galleryCount
        this.handleInputFile(fileInput, count)
        // カウンターをインクリメント
        this.galleryCount++;
    }

    handleInputFile(inputFile, count){
        inputFile.addEventListener("change", (e)=>{
            const objectURL = URL.createObjectURL(e.target.files[0]);
            const previewContainer = document.getElementById("gallery_image")
            previewContainer.appendChild(GalleryImageElement.generatePreviewElement(objectURL,count))

            this.#handleRemoveImage()
        })
    }

    #handleRemoveImage(){
        const removeBtns = document.querySelectorAll(".preview_remove-style")
        removeBtns.forEach((btn)=>{
            const newBtn = btn.cloneNode(true)
            btn.replaceWith(newBtn)
            newBtn.addEventListener("click", (e)=>{
                const id = btn.dataset.id
                const targetInput = Array.from(document.querySelectorAll(".image-upload-container")).find((container) => container.dataset.id == id)
                this.wrapper.removeChild(targetInput)
                document.getElementById("gallery_image").removeChild(newBtn.parentElement)
                
            })
        })
    }
}