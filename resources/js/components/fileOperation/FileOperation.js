export default class FileOperation {
    constructor() {
        this.fileUpload = document.getElementById("hero_image");
        this.previewImageElement = document.querySelector(".preview_src");
        this.imageElement = document.querySelector(".hero_image_element");

        this.handleUpload();
    }

    async handleUpload() {
        this.fileUpload.addEventListener("change", (e) => {
            const file = e.target.files[0];
            this.#displayPreview(file);
        });
    }

    #displayPreview(file) {
        const objectURL = URL.createObjectURL(file);
        this.previewImageElement.classList.remove("hidden");
        this.imageElement.classList.add("hidden");
        this.previewImageElement.src = objectURL;
    }
}
