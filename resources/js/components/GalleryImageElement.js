export default class GalleryImageElement{
      static generatePreviewElement(objectURL, count){

            const findElement = Array.from(document.querySelectorAll(".preview-box")).find((box)=> box.dataset.id == count)
            if(findElement){
                  findElement.querySelector(".preview-image").src = objectURL
                  return
            }

            const div = document.createElement("div")
            div.classList.add("preview-box")
            div.style.position = "relative"
            div.dataset.id = count;

            const img = document.createElement("img")
            img.id = `previewgalleryImage${count}`
            img.classList.add("preview-image")
            img.src = objectURL

            const p = document.createElement("p")
            p.innerHTML = "×"
            p.classList.add(`preview_remove${count}`)
            p.classList.add(`preview_remove-style`)
            p.dataset.id = count
            

            div.appendChild(p)
            div.appendChild(img)

            return div
      }


}