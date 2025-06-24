export default class DupeItineraryActivity {
      constructor(){
            this.template = document.getElementById("activity_template").innerHTML
            this.wrapper = document.getElementById("activity-wrapper")
            this.section = document.getElementById("itinerary-section")

            this.itineraryIndex = 0
            this.activityIndex = 0

            this.initialize()

      }

      initialize(){
            this.section.addEventListener("click", this.#handleEvent.bind(this))
      }

      #handleEvent(e){
            const clickedElement = e.target
            if(clickedElement.closest(".add-activity")) this.#duplicateElement()
            if(clickedElement.closest(".remove-activity")) this.#deleteElement(clickedElement.closest(".remove-activity"));
            
      }

      // Tour Hightlightの要素の追加
      #duplicateElement(){
            this.itineraryIndex ++
            this.activityIndex ++
            this.#createDOM()
            
      }

      #createDOM(){
            let rawHTML = this.template.replace(/{itinerary_index}/g, this.serviceCount).replace(/{activity_index}/g, dayIndex);;
            const newDiv = document.createElement("div")
            newDiv.classList.add("activity-item")
            newDiv.innerHTML = rawHTML
            this.wrapper.appendChild(newDiv)
      }

      // Tour highlightの要素の削除
      #deleteElement(button){
            const targetElement = button.closest(".activity-item")
            console.log(button);
            console.log(targetElement);
            
            
            this.wrapper.removeChild(targetElement)
      }
}