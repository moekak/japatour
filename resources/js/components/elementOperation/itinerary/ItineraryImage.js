export default class ItineraryImage{
      constructor(event){
            console.log(event.target);
            
           // imageInputの設定
            this.imageInput = event.target.closest(".image-upload-input");
            this.imageInput.addEventListener("change", this.#handleImage.bind(this));
            
            // プロパティを初期化
            this.file = null;
            this.objectURL = null;
      }
      
      #handleImage(){
            this.file = e.target.files[0]
            this.objectURL = URL.createObjectURL(this.file)

            console.log(this.objectURL);
            
            
      }
}