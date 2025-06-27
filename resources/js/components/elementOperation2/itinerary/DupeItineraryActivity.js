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
      duplicateElement(wrapper){
            this.activityIndex ++
            this.createDOM(wrapper)
            
      }

      /**
       * @override
       */
      createDOM(wrapper){
            const activityWrapper = wrapper.querySelector(".activity-wrapper")
            const activityCount = activityWrapper.querySelectorAll(".activity-item").length

            let rawHTML = this.template.replace(/{itinerary_index}/g, wrapper.dataset.id).replace(/{activity_index}/g, activityCount);
            const newDiv = document.createElement("div")
            newDiv.classList.add("activity-item")
            newDiv.innerHTML = rawHTML
            activityWrapper.appendChild(newDiv)
      }

      
      /**
       * @override
       */
      deleteElement(button, wrapper){
            const targetElement = button.closest(".activity-item")
            wrapper.querySelector(".activity-wrapper").removeChild(targetElement)
      }
}