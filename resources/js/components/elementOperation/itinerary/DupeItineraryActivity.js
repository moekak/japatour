import DupeInterface from "../DupeInterface.js"

export default class DupeItineraryActivity extends DupeInterface {
      
      constructor(){
            if (DupeItineraryActivity.instance) {
                  return DupeItineraryActivity.instance;
            }
            super(); 
            this.template = document.getElementById("activity_template").innerHTML
            this.itemWrapper = null

            DupeItineraryActivity.instance = this;
      }

      /**
       * @override
       */
      static getInstance() {
            if (!DupeItineraryActivity.instance) {
                  DupeItineraryActivity.instance = new DupeItineraryActivity();
            }
            return DupeItineraryActivity.instance;
      }

      /**
       * @override
       */
      duplicateElement(itineraryContainer){
            this.createDOM(itineraryContainer)   
      }

      /**
       * @override
       */
      createDOM(itineraryContainer){
            this.itemWrapper  = itineraryContainer.querySelector(".activity-wrapper")
            const activityCount = this.itemWrapper .querySelectorAll(".activity-item").length

            let rawHTML = this.template.replace(/{itinerary_index}/g, itineraryContainer.dataset.id).replace(/{activity_index}/g, activityCount);
            const newDiv = document.createElement("div")
            newDiv.classList.add("activity-item")
            newDiv.innerHTML = rawHTML
            this.itemWrapper .appendChild(newDiv)
      }

      
      /**
       * @override
       */
      deleteElement(button){
            if(!this.hasOneData(this.itemWrapper, "activity")){
                  alert("create one activity at least")
                  return
            }
            const targetElement = button.closest(".activity-item")
            this.itemWrapper.removeChild(targetElement)
      }
}