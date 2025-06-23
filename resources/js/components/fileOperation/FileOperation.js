export default class FileOperation{
      constructor(){
            this.fileUpload = document.getElementById("hero_image")
      }

      async handleUpload(){
            this.fileUpload.addEventListener("change", (e)=>{
                  const file = e.target.files[0]
                  
            })
      }

      #displayPreview(file){
            const objectURL = URL.createObjectURL(file)
            
      }
}