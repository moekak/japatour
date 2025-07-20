
import DupeEventhandler from "../components/elementOperation/DupeEventhandler.js";
import FileOperation from "../components/fileOperation/FileOperation.js";


new DupeEventhandler()
new FileOperation()


// Image Upload
// itinerary image
const itinerary_fileUpload = document.getElementById("itinerary_0");
const itinerary_previewImageSrc = document.querySelector(".itinerary_preview_src0");
const itinerary_imageElement = document.querySelector(".itinerary_image_element0");
const itinerary_fileOperation = new FileOperation(itinerary_fileUpload, itinerary_previewImageSrc, itinerary_imageElement)
itinerary_fileOperation.handleUpload()


// hero image
const hero_fileUpload = document.getElementById("hero_image");
const hero_previewImageSrc = document.querySelector(".preview_src");
const hero_imageElement = document.querySelector(".hero_image_element");
const hero_fileOperation = new FileOperation(hero_fileUpload, hero_previewImageSrc, hero_imageElement)
hero_fileOperation.handleUpload()



// itinerary image(sessionあり)
const tempContainers = document.querySelectorAll(".temp_container")

tempContainers.forEach((container, index)=>{
      const itinerary_fileUpload = document.getElementById(`itinerary_${index}`);
      const itinerary_previewImageSrc = document.querySelector(`.itinerary_preview_src${index}`);
      const itinerary_imageElement = document.querySelector(`.itinerary_image_element${index}`);
      const itinerary_fileOperation = new FileOperation(itinerary_fileUpload, itinerary_previewImageSrc, itinerary_imageElement)
      itinerary_fileOperation.handleUpload()
})


