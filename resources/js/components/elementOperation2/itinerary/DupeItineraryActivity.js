import ItineraryInterface from "./ItineraryInterface.js"

export default class DupeItineraryActivity extends ItineraryInterface {
      constructor(){
            super(); 
            this.template = document.getElementById("activity_template").innerHTML
            this.wrapper = document.getElementById("activity-wrapper")
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
            newDiv.classList.add("activity-item")
            newDiv.innerHTML = rawHTML
            this.wrapper.appendChild(newDiv)
      }

      
      /**
       * @override
       */
      deleteElement(button){
            const targetElement = button.closest(".activity-item")
            this.wrapper.removeChild(targetElement)
      }
}