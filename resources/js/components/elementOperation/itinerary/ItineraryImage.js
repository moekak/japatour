export default class ItineraryImage{
      constructor(event){
            this.event = event
           // imageInputの設定
            if( this.event.target.closest(".image-upload-input") !== null){
                  this.imageInput =  this.event.target.closest(".image-upload-input");
                  this.previewContainer = this.imageInput.closest(".form-group").querySelector(".preview-image");
                  this.imageInput.addEventListener("change", this.#handleImage.bind(this)); 
            }
            
            // プロパティを初期化
            this.file = null;
            this.objectURL = null;
      }
      
      #handleImage(){
            this.file = this.event.target.files[0]
            this.objectURL = URL.createObjectURL(this.file)
            // プレビューに表示する
            this.previewContainer.src = this.objectURL
            
      }
}