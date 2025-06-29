export default class FileOperation {
      constructor(uploadInput, previewSrc, imageElement) {
            this.fileUpload = uploadInput;
            this.previewImageElement = previewSrc;
            this.imageElement = imageElement;
      }

      async handleUpload() {
            this.fileUpload.addEventListener("change", (e) => {

                  const file = e.target.files[0];
                  this.#displayPreview(file);
            });
      }

      #displayPreview(file) {
            const objectURL = URL.createObjectURL(file);
            console.log(this.previewImageElement);
            
            this.previewImageElement.closest(".preview_container").classList.remove("hidden");
            this.imageElement.classList.add("hidden");
            this.previewImageElement.src = objectURL;
      }
}
