import ItineraryInterface from "./ItineraryInterface.js"

export default class DupeItinerary extends ItineraryInterface {
      constructor(){
            super(); 
            this.template = document.getElementById("itinerary-template").innerHTML
            this.wrapper = document.getElementById("itinerary-wrapper")
      }


      /**
       * @override
       */
      duplicateElement(){
            this.activityIndex ++
            this.itineraryIndex ++
            this.createDOM()
            
      }

      /**
       * @override
       */
      createDOM(){
            let rawHTML = this.template.replace(/{itinerary_index}/g, this.itineraryIndex).replace(/{activity_index}/g, this.activityIndex).replace(/{itinerary_count}/g, this.itineraryIndex +1);
            const newDiv = document.createElement("div")
            newDiv.classList.add("itinerary-item")
            newDiv.datasetId = this.itineraryIndex
            newDiv.innerHTML = rawHTML
            this.wrapper.appendChild(newDiv)
      }

      
      /**
       * @override
       */
      deleteElement(button){
            const targetElement = button.closest(".itinerary-item")
            this.wrapper.removeChild(targetElement)
      }
}