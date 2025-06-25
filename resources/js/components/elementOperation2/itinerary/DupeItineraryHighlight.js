import ItineraryInterface from "./ItineraryInterface.js"

export default class DupeItineraryHighlight extends ItineraryInterface {
      constructor(){
            super(); 
            this.template = document.getElementById("itinerary-highlight_template").innerHTML
            this.wrapper = document.getElementById("itinerary_highlight-wrapper")

      }


      /**
       * @override
       */
      duplicateElement(){
            this.activityIndex ++
            this.createDOM()
            
      }

      /**
       * @override
       */
      createDOM(){
            let rawHTML = this.template.replace(/{itinerary_index}/g, this.itineraryIndex).replace(/{activity_index}/g, this.activityIndex);;
            const newDiv = document.createElement("div")
            newDiv.classList.add("itinerary_highlight-item")
            newDiv.innerHTML = rawHTML
            this.wrapper.appendChild(newDiv)
      }

      
      /**
       * @override
       */
      deleteElement(button){
            const targetElement = button.closest(".itinerary_highlight-item")
            this.wrapper.removeChild(targetElement)
      }
}