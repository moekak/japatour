export default class DupeItinerary {
      constructor(){
            this.template = document.getElementById("highlight_template").innerHTML
            this.duplicateButton = document.getElementById("duplicate_button")
            this.tourHighlightWrapper = document.getElementById("tour_highlight-wrapper")
            this.tourHightlightSection = document.getElementById("highlight-section")

            this.initialize()

      }

      initialize(){
            this.tourHightlightSection.addEventListener("click", this.#handleEvent.bind(this))
      }

      #handleEvent(e){
            const clickedElement = e.target

            if(clickedElement.closest(".duplicate_button")) this.#duplicateElement()
            if(clickedElement.closest(".delete_highlight-button")) this.#deleteElement(clickedElement.closest(".delete_highlight-button"));
                  
      }

      // Tour Hightlightの要素の追加
      #duplicateElement(){
            this.#createDOM()
            
      }

      #createDOM(){
            const newDiv = document.createElement("div")
            newDiv.classList.add("highlight-item")
            newDiv.innerHTML = this.template
            this.tourHighlightWrapper.appendChild(newDiv)
      }

      // Tour highlightの要素の削除
      #deleteElement(button){
            const targetElement = button.closest(".highlight-item")
            this.tourHighlightWrapper.removeChild(targetElement)
      }
}